<?php

namespace App\Application\Sonata\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BasePage as BasePage;

/**
 * Class Page
 *
 * @package App\Application\Sonata\PageBundle\Entity
 *
 * @ORM\Table(name="page__page")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Page extends BasePage
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
