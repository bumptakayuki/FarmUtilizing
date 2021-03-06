<?php

namespace Proxies\__CG__\DreamMarket\ClientBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Post extends \DreamMarket\ClientBundle\Entity\Post implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getTags()
    {
        $this->__load();
        return parent::getTags();
    }

    public function setTags($tags)
    {
        $this->__load();
        return parent::setTags($tags);
    }

    public function addTag(\DreamMarket\ClientBundle\Entity\Tag $tag)
    {
        $this->__load();
        return parent::addTag($tag);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setBody($body)
    {
        $this->__load();
        return parent::setBody($body);
    }

    public function getBody()
    {
        $this->__load();
        return parent::getBody();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function getImagePath()
    {
        $this->__load();
        return parent::getImagePath();
    }

    public function setImagePath($image_path)
    {
        $this->__load();
        return parent::setImagePath($image_path);
    }

    public function getLimitMember()
    {
        $this->__load();
        return parent::getLimitMember();
    }

    public function setLimitMember($limit_member)
    {
        $this->__load();
        return parent::setLimitMember($limit_member);
    }

    public function getPrefArea()
    {
        $this->__load();
        return parent::getPrefArea();
    }

    public function setPrefArea($pref_area)
    {
        $this->__load();
        return parent::setPrefArea($pref_area);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'body', 'image_path', 'pref_area', 'limit_member', 'createdAt', 'updatedAt', 'tags');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}