<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreate;
use App\Http\Requests\CommentCreate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'list', 'detail']);
    }

    /**
     * トップページ
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $posts = Post::latest()->limit(4)->get();
        $categories = Category::all();

        return view('index', compact('posts', 'categories'));
    }

    /**
     * 投稿作成
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;

        $categories = Category::all();


        return view('new', compact('post', 'categories'));

    }

    /**
     * 投稿追加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreate $request)
    {
        $post = new Post;
        $user_id = Auth::id();

        $inputs=request()->validate([
          'detail_img'=>'image'
        ]);

        if($file = $request->detail_img){
          $detail_img = time().'.'.$file->getClientOriginalExtension();
          $target_path = public_path('/uploads/');
          $file->move($target_path,$detail_img);
        }else{
        $detail_img = "no_image.jpg";
        }

        $post->user_id = $user_id;
        $post->category_id = request('category_id'); 
        $post->detail_name = request('detail_name');
        $post->detail_maker = request('detail_maker');
        $post->detail_detail = request('detail_detail');
        $post->detail_comment = request('detail_comment');
        $post->detail_img = $detail_img;
        $post->save();

        return redirect()->route('post.detail', ['id' => $post->id]);
    }

    /**
     * 投稿詳細
     *
     * @param  \App\post  $projectlist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);

        /*$user_id = Post::where('id', $id)->pluck('user_id');
        $user_name = User::where('id', $user_id)->first();*/

        $comments = Comment::with(['author'])->where('post_id', $id)->get();

        $error_text = "コメントはありません";

        return view('detail', compact('post', 'comments', 'error_text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $projectlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Post $post)
    {
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $comment = Comment::find($id);

        $post->delete();

        if ($comment != null) {
          $comment->delete();
        }

        return redirect('/posts');
    }


    /**
     * 投稿一覧
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {

      $categories = Category::all();
      $error_text = "該当する投稿がありません";

      if ($request->filled('keyword')) {

        $key = $request->input('keyword');

        $key = str_replace('　', ' ', $key);
        $key = preg_replace('/\s(?=\s)/', '', $key);
        $key = trim($key);
        $key = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $key);
        $keywords = array_unique(explode(' ', $key));

        $query = Post::query();
        foreach($keywords as $keyword) {
            $query->where(function($_query) use($keyword){
                $_query->where('detail_name', 'LIKE', '%'.$keyword.'%')
                        ->orwhere('detail_maker', 'LIKE', '%'.$keyword.'%')
                        ->orwhere('detail_detail', 'LIKE', '%'.$keyword.'%')
                        ->orwhere('detail_comment', 'LIKE', '%'.$keyword.'%');
            });
        }
        $posts = $query->paginate(12);

      } elseif ($request->filled('category_id')) {
        $keyword2 = $request->input('category_id');
        $posts = Post::where('category_id', $keyword2)->orderBy('created_at', 'desc')->get();
      } else {
        $posts = Post::orderBy('created_at', 'desc')->get();
      }

      return view('list', compact('posts', 'categories', 'error_text'));
    }

        /**
     * コメント投稿
     * @param Comment $comment
     * @param CommentCreate $request
     * @return \Illuminate\Http\Response
     */
    public function addComment(CommentCreate $request, $id)
    {
        $comment = new Comment();
        $comment->comment = request('add_comment');
        $comment->post_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        $new_comment = Comment::where('id', $comment->id)->with('author')->first();

        return redirect()->route('post.detail', ['id' => $comment->post_id]);
    }

    /**
     * いいね機能
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request)
    {

    $user_id = Auth::user()->id; //ログインユーザーのid取得
    $post_id = $request->post_id; //投稿idの取得
    $already_liked = Like::where('user_id', $user_id)->where('post_id', $post_id)->first(); //3.

    if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
        $like = new Like; //Likeクラスのインスタンスを作成
        $like->post_id = $post_id; //Likeインスタンスにpost_id,user_idをセット
        $like->user_id = $user_id;
        $like->save();
    } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
        Like::where('post_id', $post_id)->where('user_id', $user_id)->delete();
    }
    //この投稿の最新の総いいね数を取得
    $post_likes_count = Post::withCount('likes')->findOrFail($post_id)->likes_count;
    $param = [
        'post_likes_count' => $post_likes_count
    ];

    return response()->json($param); //JSONデータをjQueryに返す

    }

}