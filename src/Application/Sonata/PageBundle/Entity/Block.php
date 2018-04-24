<?php

namespace App\Application\Sonata\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BaseBlock as BaseBlock;

/**
 * Class Block
 *
 * @package App\Application\Sonata\PageBundle\Entity
 *
 * @ORM\Table(name="page__block")
 * @ORM\Entity(repositoryClass="Doctrine\ORM\EntityRepository")
 */
class Block extends BaseBlock
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
