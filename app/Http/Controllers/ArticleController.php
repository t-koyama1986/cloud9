<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Sample;
use App\Http\Requests;
use Auth;

class ArticleController extends Controller
{
  public function home()
  {
        $Article = Article::all();
        $Article = Article::where('userid', Auth::id())->get();
        // $Article = Article::where('userid', '2')->get();

        // ここで、ユーザーIDの記事だけ表示させる処理を作る
        // $Article = Article::orderBy('id', 'DESC')->take(7)->get();
        $Sample = Sample::all();

        $UID = Auth::id();

        return view('/article', compact('Article','Sample','UID'));
  }

  public function list()
  {
        $Article = Article::all();
        $Article = Article::where('userid', Auth::id())->get();
        return view('article-list', compact('Article'));
  }


  public function create(Request $request)
  {
        $Article = new Article;
        $Article->id = $request->id;
        $Article->userid = $request->userid;
        $Article->category = $request->category;
        $Article->article = $request->article;
        $Article->save();
        return redirect('/user/article');
  }

    public function edit($id)
    {
        $Article = Article::find($id);
        return view('/article-edit', ['Article'=>$Article ,'id'=>$id]);
    }

     public function update(Request $request)
    {
        $Article = Article::find($request->id);
        $Article->userid = $request->userid;
        $Article->category = $request->category;
        $Article->article = $request->article;
        $Article->update();
        
        return redirect('/user/article-list');
    }


    public function delete($id)
    {
        $Article = Article::find($id);
        return view('/article-delete', ['Article'=>$Article ,'id'=>$id]);
    }
     public function deletepost(Request $request)
    {
        $Article = Article::find($request->id);
        $Article->userid = $request->userid;
        $Article->category = $request->category;
        $Article->article = $request->article;
        $Article->delete();
        
        return redirect('/user/article-list');
    }


    
}
