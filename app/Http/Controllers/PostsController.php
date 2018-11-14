<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Post;
 
class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
 
        return view('welcome', ['posts' => $posts]);
    }
}