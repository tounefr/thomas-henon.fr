<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \AppBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'slug', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'date', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'last_update', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'comments', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'imageFile'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'slug', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'date', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'last_update', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'comments', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'imageFile'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setPostedBy(\AppBundle\Entity\User $postedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostedBy', [$postedBy]);

        return parent::setPostedBy($postedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostedBy', []);

        return parent::getPostedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function addPostedBy(\AppBundle\Entity\User $postedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPostedBy', [$postedBy]);

        return parent::addPostedBy($postedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function removePostedBy(\AppBundle\Entity\User $postedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePostedBy', [$postedBy]);

        return parent::removePostedBy($postedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\AppBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\AppBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\AppBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastUpdate($lastUpdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastUpdate', [$lastUpdate]);

        return parent::setLastUpdate($lastUpdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastUpdate', []);

        return parent::getLastUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

}
