<?php

namespace FarmUtilizing\AdminBundle\Controller;

use FarmUtilizing\CommonBundle\Entity\Image;
use FarmUtilizing\CommonBundle\Form\DocumentType;
use FarmUtilizing\CommonBundle\Form\ImageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FarmUtilizing\CommonBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;
use FarmUtilizing\CommonBundle\Entity\Post;
use FarmUtilizing\CommonBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * 管理画面側のプロジェクト投稿関連処理を行うコントローラ
 *
 * @author Takayuki Suzuki
 */
class PostController extends Controller
{

    /**
     * 初期表示アクション
     *
     * @return $posts
     */
    public function indexAction()
    {
        // 記事情報を取得する
        $repository = $this->getDoctrine()
            ->getRepository('CommonBundle:Post');
        $query = $repository->createQueryBuilder('p')
            ->getQuery();
        $posts = $query->getResult();

        // 画面に返却する
        return $this->render('AdminBundle:Default:index.html.twig', array(
                'posts' => $posts)
        );
    }

    /**
     * 新規作成アクション
     *
     * @param Request $request
     * @return view
     */
    public function newAction(Request $request)
    {
        // formを作成する
        $form = $this->createForm(new PostType(), new Post());

        // POSTで送られてきた場合
        if ('POST' == $request->getMethod()) {

            // formに値を格納する
            $form->submit($request);

            // バリデーションチェック
            if ($form->isValid()) {

                // 各Formの値を設定
                $post = new Post();
                $post->setTitle($form["title"]->getData());
                $post->setBody($form["body"]->getData());
                $post->setImagePath($form["image_path"]->getData());
                $post->setImagePath2($form["image_path2"]->getData());
                $post->setImagePath3($form["image_path3"]->getData());
                $post->setAreaMap($form["area_map"]->getData());
                $post->setPrefArea($form["pref_area"]->getData());
                $category = $form["category"]->getData();
                $post->setCategory($category);
                $post->setCreatedAt(new \DateTime());
                $post->setUpdatedAt(new \DateTime());

                // タグ関連
                $tagArray = $form["tags"]->getData();
                $em = $this->getDoctrine()->getManager();
                foreach ($tagArray as $tag) {
                    $tagEntity = $em->find('CommonBundle:Tag', $tag->getId());
                    $post->addTag($tagEntity);
                }

                $em->persist($post);
                $em->flush();
                return $this->render('AdminBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
                ));
            }
        }

        // 描画
        return $this->render('AdminBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * 編集アクション
     *
     * @param $id プロジェクトID
     * @return view
     */
    public function editAction($id)
    {
        // DBから更新対象のエンティティを取得
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('CommonBundle:Post', $id);
        if (!$post) {
            throw new NotFoundHttpException('The post does not exist.');
        }
        // フォームのビルド
        $form = $this->createForm(new PostType(), $post);
        $request = $this->getRequest();

        // POSTで送られてきた場合
        if ('POST' === $request->getMethod()) {
            $form->submit($request);

            // バリデーションチェック
            if ($form->isValid()) {

                // 更新されたエンティティをデータベースに保存
                $post = $form->getData();
                $post->setUpdatedAt(new \DateTime());
                $em->flush();
                return $this->redirect($this->generateUrl('admin_post_index'));
            }
        }

        // 描画
        return $this->render('AdminBundle:Default:edit.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }


    /**
     * 削除アクション
     *
     * @param $id プロジェクトID
     * @return view
     */
    public function deleteAction($id)
    {
        // 削除対象の記事を取得
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('CommonBundle:Post', $id);
        if (!$post) {
            throw new NotFoundHttpException('The post does not exist.');
        }
        // 削除実行
        $em->remove($post);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_post_index'));
    }


    /**
     * 検索アクション
     *
     * @param Request $request
     * @return view
     */
    public function searchAction(Request $request)
    {
        $post = new Post();
        $token = $this->get('form.csrf_provider')->generateCsrfToken('csrf_token');

        $form = $this->createForm(new PostType(), $post);
        if ('POST' == $request->getMethod()) {
            $form->submit($request);

            // バリデーションチェック
            if ($form->isValid()) {

                // 検索処理
                $repository = $this->getDoctrine()
                    ->getRepository('CommonBundle:Post');
                $query = $repository->createQueryBuilder('p');

                // 検索パラメータを設定
                if (!empty($form["title"]->getData())) {
                    $query->andwhere('p.title like :title')
                        ->setParameters('title', $form["title"]->getData());
                }
                if (!empty($form["body"]->getData())) {
                    $query->andwhere('p.body like :body')
                        ->setParameters('body', $form["body"]->getData());
                }
                if (!empty($form["pref_area"]->getData())) {
                    $query->andwhere('p.pref_area like :pref_area')
                        ->setParameters('pref_area', $form["pref_area"]->getData());
                }
                // 検索実行
                $query->getQuery();
                $posts = $query->getResult();
            }
        }

        return $this->render('FrontBundle:Default:search.html.twig', array(
                'form' => $form->createView(),
                'posts' => $posts,
                'csrf_token' => $token
            )
        );
    }

    /**
     * csvエクスポートアクション
     *
     */
    public function csvExportAction()
    {
        $response = new StreamedResponse();
        $response->setCallback(

            function () {

                // 記事情報を取得する
                $em = $this->getDoctrine()->getManager();
                $repository = $this->getDoctrine()
                    ->getRepository('CommonBundle:Post');
                $query = $repository->createQueryBuilder('p')
                    ->getQuery();

                // ヘッダーを作成
                $csv_header = [
                    'Id',
                    'Title',
                    'Body',
                    'ImagePath',
                    'CategoryId',
                    'PrefArea',
                ];

                // CSV出力形式
                $file = new \SplFileObject('php://output', 'w');
                // ヘッダーを生成
                $file->fputcsv(array_map(function ($value) {
                    return mb_convert_encoding(
                        $value, 'SJIS-win', mb_internal_encoding()
                    );
                }, $csv_header));

                // 記事の件数分繰り返す
                foreach ($query->iterate() as $iterableResult) {

                    // ボディ部分を出力する
                    /** @var Post $post */
                    $post = $iterableResult[0];
                    $row = [
                        $post->getId(),
                        $post->getTitle(),
                        $post->getBody(),
                        $post->getImagePath(),
                        $post->getCategoryId(),
                        $post->getPrefArea(),
                    ];
                    $file->fputcsv(array_map(function ($value) {
                        return mb_convert_encoding(
                            $value, 'SJIS-win', mb_internal_encoding()
                        );
                    }, $row));

                    // Doctorineを閉じる
                    $this->getDoctrine()->getManager()->detach($post);
                    flush();
                }
            }
        );

        // ヘッダーの内容を設定する
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('Content-Disposition', 'attachment; filename=sample.csv');
        $response->send();

        return $response;
    }

    /**
     * ファイルアップロードアクション
     *
     * @param Request $request
     */
    public function uploadAction(Request $request)
    {
        $image = new Image();
        $token = $this->get('form.csrf_provider')->generateCsrfToken('csrf_token');
        $form = $this->createForm(new ImageType(), $image);

        // POSTの場合
        if ($this->getRequest()->getMethod() === 'POST') {

            // formの内容を設定する
            $form->submit($request);

            // バリデーションチェック
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();

                // アップロード処理
                $image->upload();

                // 登録実行
                $em->persist($image);
                $em->flush();
            }
        }

        return $this->render('AdminBundle:Default:upload.html.twig', array(
                'form' => $form->createView(),
                'csrf_token' => $token
            )
        );
    }
}
