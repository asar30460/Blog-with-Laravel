<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('Home.index');
    }

    public function test() {

        /*----UPDATE----
        $post=Post::find(1);
        $post->update([
           'title'=>'中文標題',
        ]);
        */

        /*----READ----
        // SELECT * FROM posts
        $posts=Post::all();

        // SELECT * FROM posts WHERE id = 1
        $post=Post::find(1);
        //dd($post->title);

        // SELECT * FROM posts WHERE id = 1 OR id = 3 OR id = 5
        $posts=Post::find(1, 3, 5);

        // SELECT * FROM posts WHERE title = "...." AND id > 10 ORDER BY id DESC
        $posts=Post::where('id', '>=', '2')->orderBy('id', 'DESC')->get();
        dd($posts);
        */

        /*----DELETE-----
        $post=Post::find(1);
        $post->delete();

        Post::destroy(2);
        */



        /*----web create----
        Post::Create([
           'title'=>'testTitle',
           'content'=>'testContent',
        ]);
        return 'Creation successed';
        */
    }
}
