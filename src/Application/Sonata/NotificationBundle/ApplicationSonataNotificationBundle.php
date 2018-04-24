<?php

namespace App\Application\Sonata\NotificationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataNotificationBundle
 *
 * @package App\Application\Sonata\NotificationBundle
 */
class ApplicationSonataNotificationBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataNotificationBundle';
    }
}
