<?php

namespace App\Application\Sonata\TimelineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\TimelineBundle\Entity\Component as BaseComponent;

/**
 * Class Component
 *
 * @package App\Application\Sonata\TimelineBundle\Entity
 *
 * @ORM\Table(name="timeline__component")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Component extends BaseComponent
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
