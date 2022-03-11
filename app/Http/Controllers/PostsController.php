<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Posts;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class PostsController extends Controller
{
    public function create(): Response
    {
    }

    public function destroy(Posts $posts): Response
    {
    }

    public function edit(Posts $posts): Response
    {
    }

    public function index(): Collection
    {
        return Posts::all();
    }

    public function show(Posts $posts): Response
    {
    }

    public function store(StorePostsRequest $request): Response
    {
    }

    public function update(UpdatePostsRequest $request, Posts $posts): Response
    {
    }
}
