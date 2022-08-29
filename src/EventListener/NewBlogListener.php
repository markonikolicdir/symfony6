<?php

namespace App\EventListener;

use App\Event\NewBlogEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener]
#[AsEventListener(event: NewBlogEvent::class, method: 'onNewBlogEvent')]
class NewBlogListener
{
    public function __invoke(NewBlogEvent $event): void
    {
        print '__invoke' . PHP_EOL;

        print $event->getTitle() . PHP_EOL;
    }

    public function onNewBlogEvent(NewBlogEvent $event): void
    {
        print 'onNewBlogEvent' . PHP_EOL;

        print $event->getTitle() . PHP_EOL;
    }
}