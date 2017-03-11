<?php
namespace FarmUtilizing\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="エラーです")
     */
    public $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;


    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // アップロードされたファイルを保存する場所への絶対パス
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // ビューで アップロードされたファイルを参照する際のために __DIR__ を取り除く
        return 'uploads/image';
    }

    public function upload()
    {
        // フィールドが必須でなければ、ファイルプロパティが空でも受け付けます
        if (null === $this->file) {
            return;
        }

        // ここではオリジナルの名前を使用します
        // しかし、セキュリティの対処のため、サニタイズはしてください

        // move メソッドは、対象となるディレクトリを受け取り、ファイルを移動します
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // パスのプロパティには、ファイルの保存先をセットします
        $this->path = $this->file->getClientOriginalName();

        // もう必要無いので、ファイルのプロパティを片付けます
        $this->file = null;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // ユニークな名前を生成できれば、何でも構いません
            $this->path = uniqid().'.'.$this->file->guessExtension();
        }
    }

//    /**
//     * @ORM\PostPersist()
//     * @ORM\PostUpdate()
//     */
//    public function upload()
//    {
//        if (null === $this->file) {
//            return;
//        }
//
//        // ファイルの移動時にエラーが起きれば move() メソッドにより
//        // 例外が自動的に投げられます。これで、エンティティをデータベース
//        // エラーで保存させないようにします。
//        $this->file->move($this->getUploadRootDir(), $this->path);
//
//        unset($this->file);
//    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
}