<?php

namespace App\Application\Sonata\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;

/**
 * Class Gallery
 *
 * @package App\Application\Sonata\MediaBundle\Entity
 *
 * @ORM\Table(name="media__gallery")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Gallery extends BaseGallery
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
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
