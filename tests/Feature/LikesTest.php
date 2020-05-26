<?php

namespace Tests\Feature;

use App\User;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikesTest extends TestCase
{
    /** @test */
    public function a_user_can_like_a_post()
    {
        $this->actingAs($user = factory(User::class)->create());
        $post = factory(Post::class)->create(['id' => 123]);

        $response = $this->post('/api/posts/'.$post->id.'/like')
            ->assertStatus(200);
        
        $this->assertCount(1, $user->likedPosts);
        $response->assertJson([
            'data' => [
                [
                    'data' => [
                        'type' => 'likes',
                        'like_id' => 1,
                        'attributes' => []
                    ],
                    'links' => [
                        'self' => url('/posts'),
                    ]
                ]
            ]
        ]);
    }
}
