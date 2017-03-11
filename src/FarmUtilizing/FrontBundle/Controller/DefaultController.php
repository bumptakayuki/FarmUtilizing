<?php
namespace FarmUtilizing\FrontBundle\Controller;

use Composer\Repository\RepositoryInterface;
use Composer\Repository\RepositoryManager;
use Doctrine\ORM\EntityRepository;
use FarmUtilizing\CommonBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FarmUtilizing\CommonBundle\Entity\Post;
use FarmUtilizing\CommonBundle\Entity\Tag;

/**
 * フロント側の処理を行うコントローラ
 *
 * @author Takayuki Suzuki
 */
class DefaultController extends Controller
{
    /**
     * 初期表示メソッド
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
            ->getRepository('CommonBundle:Post');
        /* @var EntityRepository $repository */
        $query = $repository->createQueryBuilder('p')
//            ->setMaxResults(3)
            ->getQuery();

        $posts = $query->getResult();

        foreach ($posts as $post) {
            break;
        }

        return $this->render('FrontBundle:Default:index.html.twig', array(
                'posts' => $posts)
        );
    }

    /**
     * 会社情報表示メソッド
     *
     */
    public function companyAction()
    {
        return $this->render('FrontBundle:Default:company.html.twig');
    }

    /**
     * 詳細表示アクション
     *
     * @param integer $id 投稿記事ID
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('CommonBundle:Post', $id);
        return $this->render('FrontBundle:Default:show.html.twig', array('post' => $post));
    }

    /**
     * 利用申し込みアクション
     *
     * @param integer $id 投稿記事ID
     */
    public function useApplicationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('CommonBundle:Post', $id);
        return $this->render('FrontBundle:Default:show.html.twig', array('post' => $post));
    }

    /**
     * 見学申し込みアクション
     *
     * @param integer $id 投稿記事ID
     */
    public function visitApplicationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->find('CommonBundle:Post', $id);
        return $this->render('FrontBundle:Default:show.html.twig', array('post' => $post));
    }

    /**
     * 検索アクション
     *
     * @param Request $request
     */
    public function searchAction(Request $request)
    {
        // 初期化
        $post = new Post();

        // CSRFトークンを発行
        $token = $this->get('form.csrf_provider')->generateCsrfToken('csrf_token');
        $form = $this->createForm(new PostType(), $post);

        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
            ->getRepository('CommonBundle:Post');
        $query = $repository->createQueryBuilder('p')
            ->getQuery();

        $post = $query->getResult();

        // POSTで送られてきた場合
        if ('POST' == $request->getMethod()) {
            $form->submit($request);

            // バリデーションチェック
            if ($form->isValid()) {
                $repository = $this->getDoctrine()
                    ->getRepository('CommonBundle:Post');

                // 検索クエリーを発行
                $query = $repository->createQueryBuilder('p')
                    ->where('p.title like :title
                             OR
                            p.body like :body
                             OR
                            p.pref_area like :pref_area'
                    )
                    ->setParameters(array(
                        'title' => $form["title"]->getData(),
                        'body' => $form["body"]->getData(),
                        'pref_area' => $form["pref_area"]->getData(),
                    ))
                    ->getQuery();

                // 検索結果を取得
                $posts = $query->getResult();
                return $this->render('FrontBundle:Default:search.html.twig', array(
                        'form' => $form->createView(),
                        'posts' => $posts,
                        'csrf_token' => $token
                    )
                );

            }
        }
        // 初回表示用のデータを返却
        return $this->render('FrontBundle:Default:search.html.twig', array(
                'form' => $form->createView(),
                'posts' => $post,
                'csrf_token' => $token
            )
        );
    }
}