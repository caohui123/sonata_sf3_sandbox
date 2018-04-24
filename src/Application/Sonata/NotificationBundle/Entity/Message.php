<?php

namespace App\Application\Sonata\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\NotificationBundle\Entity\BaseMessage as BaseMessage;

/**
 * Class Message
 *
 * @package App\Application\Sonata\NotificationBundle\Entity
 *
 * @ORM\Table(name="notification__message")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Message extends BaseMessage
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
