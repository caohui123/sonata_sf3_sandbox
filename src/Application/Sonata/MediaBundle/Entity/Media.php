<?php

namespace App\Application\Sonata\MediaBundle\Entity;

use App\Application\Sonata\ClassificationBundle\Entity\Category;
use App\Application\Sonata\ClassificationBundle\Entity\Collection;
use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;

/**
 * Class Media
 *
 * @package App\Application\Sonata\MediaBundle\Entity
 *
 * @ORM\Table(name="media__media")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Media extends BaseMedia
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \App\Application\Sonata\ClassificationBundle\Entity\Category
     *
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\ClassificationBundle\Entity\Category", mappedBy="media")
     */
    protected $category;

    /**
     * @var \Doctrine\Common\Collections\Collection|\App\Application\Sonata\ClassificationBundle\Entity\Collection[]
     *
     * @ORM\OneToMany(targetEntity="App\Application\Sonata\ClassificationBundle\Entity\Collection", mappedBy="media")
     */
    private $collections;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category.
     *
     * @param \App\Application\Sonata\ClassificationBundle\Entity\Category $category
     *
     * @return $this
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \App\Application\Sonata\ClassificationBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add collection
     *
     * @param \App\Application\Sonata\ClassificationBundle\Entity\Collection $collection
     *
     * @return $this
     */
    public function addCollection(Collection $collection)
    {
        $this->collections[] = $collection;

        return $this;
    }

    /**
     * Remove collection
     *
     * @param \App\Application\Sonata\ClassificationBundle\Entity\Collection $collection
     */
    public function removeCollection(Collection $collection)
    {
        $this->collections->removeElement($collection);
    }

    /**
     * Get collections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCollections()
    {
        return $this->collections;
    }
}
