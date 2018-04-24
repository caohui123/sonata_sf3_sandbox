<?php

namespace App\Application\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ClassificationBundle\Entity\BaseCollection as BaseCollection;

/**
 * Class Collection
 *
 * @package App\Application\Sonata\ClassificationBundle\Entity
 *
 * @ORM\Table(name="classification__collection")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Collection extends BaseCollection
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
     * @ORM\ManyToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="collections")
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
