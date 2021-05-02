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

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'list', 'detail']);
    }

    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * Display the specified resource.
     *
     * @param  \App\ifrojectlist  $projectlist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);

        $user_id = Post::where('id', $id)->pluck('user_id');
        $user_name = User::where('id', $user_id)->first();

        $comments = Comment::with(['author'])->where('post_id', $id)->get();

        $error_text = "コメントはありません";

        return view('detail', compact('post', 'comments', 'user_name', 'error_text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projectlist  $projectlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectlist = Projectlist::find($id);
        $creators = Creators::all()->where('id',$id);

        $users = \DB::table('users')->pluck('name');

        $categories = \DB::table('categories')->pluck('category_name');

        $departments = \DB::table('departments')->pluck('department_name');

        $status = \DB::table('status')->pluck('status_name');

        $clients = \DB::table('clients')->pluck('client_name');

        return view('edit', compact('projectlist', 'creators', 'users', 'categories', 'departments', 'status', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projectlist  $Projectlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Projectlist $projectlist)
    {
        $projectlist= Projectlist::find($id);
        $projectlist->project_name = request('project_name');
        $projectlist->department_name = request('department_name');
        $projectlist->sales_name = request('sales_name');
        $projectlist->client_name = request('client_name');
        $projectlist->price = request('price');
        $projectlist->status = request('status');
        $projectlist->accounting_date = request('accounting_date');
        $projectlist->save();

        $old_creators = Creators::find($id);
        $old_creators->delete();

        $data = [];

        for ($i=0; $i < count(request('creator_name')); $i++) {

          $data[]= array ('creator_name'=>$request['creator_name'][$i],
                          'id'=>$projectlist->id,
                          'creator_price'=>$request['creator_price'][$i],
                          'creator_category'=>$request['creator_category'][$i]);

        }

        DB::table('creators')->insert($data);

        return redirect()->route('projectlist.detail', ['id' => $projectlist->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projectlist  $projectlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projectlist = Projectlist::find($id);
        $creators = Creators::find($id);

        $projectlist->delete();
        $creators->delete();
        return redirect('/projectlist');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projectlist  $projectlist
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Projectlist  $projectlist
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
      return view('detail');
    }


        /**
     * コメント投稿
     * @param Illustration $illustration
     * @param AddComment $request
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->comment = request('add_comment');
        $comment->post_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        $new_comment = Comment::where('id', $comment->id)->with('author')->first();

        return redirect()->route('post.detail', ['id' => $comment->post_id]);
    }

}