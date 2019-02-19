<?php

namespace Tests\Feature\Home;

class IndexControllerTest extends TestCase
{
    public function testIndex()
    {
        $this->get('/')->assertStatus(200);
    }

    public function testArticle()
    {
        $this->get('/article/1')->assertStatus(200);
    }

    public function testCategory()
    {
        $this->get('/category/1')->assertStatus(200);
    }

    public function testTag()
    {
        $this->get('/tag/1')->assertStatus(200);
    }

    public function testChat()
    {
        $this->get('/chat')->assertStatus(200);
    }

    public function testGit()
    {
        $this->get('/git')->assertStatus(200);
    }

    public function testComment()
    {
        $comment = [
            'article_id' => 1,
            'pid'        => 0,
            'content'    => '评论666',
        ];
        $response = $this->loginByUserId(1)->post('/comment', $comment);
        $response->assertStatus(200);
    }

    public function testCheckLogin()
    {
        $this->get('/checkLogin')->assertStatus(200);
    }

    public function testSearch()
    {
        $this->call('POST', '/search', [
            'wd' => '序言',
        ])->assertStatus(200);
    }

    public function testFeed()
    {
        $this->get('/feed')->assertStatus(200);
    }

    public function testTest()
    {
        $this->get('test')->assertStatus(200);
    }
}
