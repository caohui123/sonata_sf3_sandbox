<?php

namespace App\Application\Sonata\TimelineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\TimelineBundle\Entity\Action as BaseAction;

/**
 * Class Action
 *
 * @package App\Application\Sonata\TimelineBundle\Entity
 *
 * @ORM\Table(name="timeline__action")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Action extends BaseAction
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
