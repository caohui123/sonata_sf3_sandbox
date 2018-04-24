<?php

namespace App\Application\Sonata\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BaseSite as BaseSite;

/**
 * Class Site
 *
 * @package App\Application\Sonata\PageBundle\Entity
 *
 * @ORM\Table(name="page__site")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Site extends BaseSite
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
