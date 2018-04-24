<?php

namespace App\Application\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ClassificationBundle\Entity\BaseContext as BaseContext;

/**
 * Class Context
 *
 * @package App\Application\Sonata\ClassificationBundle\Entity
 *
 * @ORM\Table(name="classification__context")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Context extends BaseContext
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
