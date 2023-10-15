<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()
            ->whereNotNull('published_at')
            ->get();

        return PostResource::collection($posts);
    }
}
