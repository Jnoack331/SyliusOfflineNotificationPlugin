<?php

declare(strict_types=1);

namespace Tests\jnoack331\SyliusOfflineNotificationPlugin\Behat\Page\Shop;

use Sylius\Behat\Page\PageInterface;

interface WelcomePageInterface extends PageInterface
{
    /**
     * @return string
     */
    public function getGreeting(): string;
}
