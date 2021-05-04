<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MypageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auths = Auth::user();
        $auth_id = Auth::id();

        $posts = Post::where('user_id', $auth_id)->get();

        $error_text = '投稿したレビューはありません。';

        return view('mypage', compact('auths', 'posts', 'error_text'));
    }

    public function edit()
    {
        $auth = Auth::user();

        return view('mypage_edit', compact('auth'));
    }

    public function update(Request $request)
    {
        $auth_id = Auth::id();
        $user= User::find($auth_id);

        $user->name = request('user_name');
        $user->email = request('user_email');
        $user->save();

        return redirect('/users/mypage');
    }

    public function delete_check(Request $request)
    {

        return view('mypage_delete_check');

    }

    public function delete(Request $request)
    {
        
        $auth_id = Auth::id();
        $user = User::find($auth_id);
        $post = Post::where('user_id', $auth_id);
        $comment = Comment::where('user_id', $auth_id);

        if ($post != null) {
            $post->delete();
        }
        
        if ($comment != null) {
            $comment->delete();
        }

        $user->delete();

        Auth::logout();
    
        return redirect('/');

    }

}
