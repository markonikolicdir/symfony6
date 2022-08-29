<?php

namespace App\Service\Marko;

class BlogService
{
    public function __construct(public UserService $userService)
    {}

    public function author(): string
    {
        return sprintf('%s %s', $this->userService->name, $this->userService->surname);
    }
}