<?php

namespace App\Application\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ClassificationBundle\Entity\BaseCategory as BaseCategory;

/**
 * Class Category
 *
 * @package App\Application\Sonata\ClassificationBundle\Entity
 *
 * @ORM\Table(name="classification__category")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Category extends BaseCategory
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
     * @var \App\Application\Sonata\MediaBundle\Entity\Media $media
     *
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="category")
     */
    protected $media;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
