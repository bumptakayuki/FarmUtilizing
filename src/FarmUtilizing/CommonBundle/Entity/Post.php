<?php
namespace FarmUtilizing\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post
{
    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="post")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     */
    private $category;

    private $category_id;

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer")
     */
    private $money;

    /**
     * @var string
     *
     * @Assert\Length(min=2,max=100)
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     * @Assert\Length(min=2,max=1000)
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string")
     */
    private $image_path;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path2", type="string")
     */
    private $image_path2;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path3", type="string")
     */
    private $image_path3;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_area", type="string")
     */
    private $pref_area;

    /**
     * @var string
     *
     * @ORM\Column(name="area_map", type="string")
     */
    private $area_map;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToMany(targetEntity="Tag",cascade={"persist", "merge"})
     * @ORM\JoinTable(name="PostTags",
     *   joinColumns={@ORM\JoinColumn(name="post_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")}
     * )
     */
    private $tags;

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addTag(Tag $tag)
    {
//        $tag->addArticle($this);
        $this->tags[] = $tag;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Post
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getImagePath()
    {
        return $this->image_path;
    }

    /**
     * @param string $image_path
     */
    public function setImagePath($image_path)
    {
        $this->image_path = $image_path;
    }

    /**
     * @return string
     */
    public function getPrefArea()
    {
        return $this->pref_area;
    }

    /**
     * @param string $pref_area
     */
    public function setPrefArea($pref_area)
    {
        $this->pref_area = $pref_area;
    }

    /**
     * @return string
     */
    public function getImagePath2()
    {
        return $this->image_path2;
    }

    /**
     * @param string $image_path2
     */
    public function setImagePath2($image_path2)
    {
        $this->image_path2 = $image_path2;
    }

    /**
     * @return string
     */
    public function getImagePath3()
    {
        return $this->image_path3;
    }

    /**
     * @param string $image_path3
     */
    public function setImagePath3($image_path3)
    {
        $this->image_path3 = $image_path3;
    }

    /**
     * @return string
     */
    public function getAreaMap()
    {
        return $this->area_map;
    }

    /**
     * @param string $area_map
     */
    public function setAreaMap($area_map)
    {
        $this->area_map = $area_map;
    }


    /**
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param int $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

}
