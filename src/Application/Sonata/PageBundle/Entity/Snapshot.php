<?php

namespace App\Application\Sonata\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BaseSnapshot as BaseSnapshot;

/**
 * Class Snapshot
 *
 * @package App\Application\Sonata\PageBundle\Entity
 *
 * @ORM\Table(name="page__snapshot")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Snapshot extends BaseSnapshot
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
