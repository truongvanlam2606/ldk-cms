<?php

namespace Modules\Post\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Post\Repositories\PostEloquentRepository;
use Modules\Post\Entities\Post;
use Modules\Admin\Entities\Admin;

class EloquentPostRepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetModel()
    {
        $postRepository = new PostEloquentRepository;
        $this->assertTrue($postRepository->getModel() == Post::class);
    }
    
    public function testCantInsertPostWithoutLogin()
    {
        $postData = factory(Post::class)->raw();
        
        $response = $this->post(route('dashboard.post::store'), $postData);

        $response->assertStatus(302);
        $response->assertRedirect(route('auth::loginForm'));
    }
    
    public function testInsertPost()
    {
        $postData = factory(Post::class)->raw();
        
        $admin = Admin::find(1);
        
        $response = $this->actingAs($admin, 'admin')->post(route('dashboard.post::store'), $postData);
        
        $response->assertRedirect(route('dashboard.post::index'));
        
        $this->assertDatabaseHas('posts', $postData);
    }
    
    public function testCantInsertPostIfTitleIsEmpty()
    {
        $postData = factory(Post::class)->raw(['title' => '']);
        
        $admin = Admin::find(1);
        
        $response = $this->actingAs($admin, 'admin')->post(route('dashboard.post::store'), $postData);
        
        $response->assertStatus(302);
        $response->assertSessionHasErrors();
        
        $this->assertDatabaseMissing('posts', $postData);
    }
    
    public function testCantInsertPostIfPostDataInvalid()
    {
        $postData = factory(Post::class)->raw(['content' => '']);
        
        $admin = Admin::find(1);
        
        $response = $this->actingAs($admin, 'admin')->post(route('dashboard.post::store'), $postData);
        
        $response->assertStatus(302);
        $response->assertSessionHasErrors();
        
        $this->assertDatabaseMissing('posts', $postData);
    }
    
    public function testCantInsertPostIfContentIsEmpty()
    {
        $postData = factory(Post::class)->raw(['content' => '']);
        
        $admin = Admin::find(1);
        
        $response = $this->actingAs($admin, 'admin')->post(route('dashboard.post::store'), $postData);
        
        $response->assertStatus(302);
        $response->assertSessionHasErrors();
        
        $this->assertDatabaseMissing('posts', $postData);
    }
}
