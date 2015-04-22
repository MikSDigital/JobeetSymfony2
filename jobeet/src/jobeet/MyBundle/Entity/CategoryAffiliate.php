<?php

namespace jobeet\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \jobeet\MyBundle\Entity\Category
     */
    private $category;

    /**
     * @var \jobeet\MyBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \jobeet\MyBundle\Entity\Category $category
     * @return CategoryAffiliate
     */
    public function setCategory(\jobeet\MyBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return \jobeet\MyBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \jobeet\MyBundle\Entity\Affiliate $affiliate
     * @return CategoryAffiliate
     */
    public function setAffiliate(\jobeet\MyBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * @return \jobeet\MyBundle\Entity\Affiliate 
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}
