<?php

namespace Unit\Http\Controllers;

use App\Models\Posts;
use Tests\TestCase;

class PostsControllerTest extends TestCase
{
    /** @test */
    public function create(): void
    {

    }

    /** @test */
    public function destroy(): void
    {

    }

    /** @test */
    public function edit(): void
    {

    }

    /** @test */
    public function index(): void
    {
        $posts = Posts::factory(10)->create();

        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    /** @test */
    public function show(): void
    {

    }

    /** @test */
    public function store(): void
    {

    }

    /** @test */
    public function update(): void
    {

    }
}
