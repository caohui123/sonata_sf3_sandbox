<?php

namespace App\Application\Sonata\PageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataPageBundle
 *
 * @package App\Application\Sonata\PageBundle
 */
class ApplicationSonataPageBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataPageBundle';
    }
}
