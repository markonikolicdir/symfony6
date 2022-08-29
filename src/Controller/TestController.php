<?php

namespace App\Controller;

use App\Event\DeleteBlogEvent;
use App\Event\NewBlogEvent;
use App\Service\Marko\BlogService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(BlogService $blogService, EventDispatcherInterface $eventDispatcher): JsonResponse
    {
        $eventDispatcher->dispatch(new NewBlogEvent('Prvi test blog'));
        $eventDispatcher->dispatch(new NewBlogEvent('Drugi test blog'), NewBlogEvent::NAME);

        $eventDispatcher->dispatch(new DeleteBlogEvent('Obrisan blog'), DeleteBlogEvent::NAME);

        return $this->json([
            'author' => $blogService->author(),
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TestController.php',
        ]);
    }
}
