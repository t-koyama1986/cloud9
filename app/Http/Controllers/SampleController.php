<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;
use App\User;
use App\Http\Requests;


class SampleController extends Controller
{
  public function top()
  {
        // $Sample = Sample::all();
        // $Sample = Sample::orderBy('id', 'DESC')->take(7)->get();
        // return view('top', compact('Sample'));
        return view('top');
  }



    //
    public function add()
    {
        return view('sample');
    }

    public function create(Request $request)
    {
        $Sample = new Sample;
        $Sample->id = $request->id;
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->save();

        return redirect()->route('sample_edit', ['id' => $Sample->id]);
    }


    public function sample()
    {
        $Sample = Sample::find(2);
        return view('article', compact('Sample'));
    }

  public function list()
  {
        $Sample = Sample::all();
        return view('sample-list', compact('Sample'));
  }



    public function edit($id)
    {
        $Sample = Sample::find($id);
        //テーブルの中にある、変数IDの中の数字を、持ってきて
        return view('sample-edit', ['Sample'=>$Sample ,'id'=>$id]);
        //ブレードでの表示名：矢印左(今回はid）が呼び出されたら、$idを使って、となる。
        // 例えば['sampleid'=>$id]だったら、ブレードでsampleidとなっているものに、$idの値を渡して、となる。
    }
 


    // postのときは(Request $request)を使う。　　(Request $request)はpostのときに使う。全部じゃなく、必要なデータのみ送付するためにリクエストしている。
    // formを使うと、formの中身を$requestに入れる
    // ($request->id);は、idをリクエストする、という処理
    // $Sample->category = $request->category;　は、右の処理「飛んできた情報をカテゴリーに入れる」、のあと、左の処理「categoryをテーブルに入れる」をやる


     public function update(Request $request)
    {
        $Sample = Sample::find($request->id);
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->update();
        
        // var_dump($Sample,$request);
        return redirect('/sample-list');
    }
 


    public function delete($id)
    {
        $Sample = Sample::find($id);
        return view('sample-delete', ['Sample'=>$Sample ,'id'=>$id]);
    }

     public function deletepost(Request $request)
    {
        $Sample = Sample::find($request->id);
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->delete();
        return redirect('/sample-list');
    }


 
 
     public function get_user(){
        $Sample = Sample::find(1);  //Userのテーブルから、IDの1番をfindしなさい、という命令
        return view('sample-edit',['user'=>$user]);  //userの中のshowのページを表示してね、という命令
        // return view('users.show',['user'=>$user,'shop'=>$shop]);  //複数やるときは、こういう表現する
    }
        public function get_edit(){
            $user = User::find(1);  //Userのテーブルから、IDの1番をfindしなさい、という命令
            return view('users.edit',['user'=>$user]);  //userの中のshowのページを表示してね、という命令
        }



  public function home()
  {
        $Article = Article::all();
        $Article = Article::where('userid', Auth::id())->get();

        // $Article = Article::orderBy('id', 'DESC')->take(7)->get();
        $Sample = Sample::all();

        $UID = Auth::id();

        return view('/admin/home', compact('Article','Sample','UID'));
  }




    public function adminlist()
    {
        $User = User::all();
        return view('admin-list', compact('User'));
    }

    public function adminedit($id)
    {
        $User = User::find($id);
        return view('admin-edit', ['User'=>$User ,'id'=>$id]);
    }
     public function adminupdate(Request $request)
    {
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->email = $request->email;
        $User->update();
        
        return redirect('admin-list');
    }
    public function admindelete($id)
    {
        $User = User::find($id);
        return view('admin-delete', ['User'=>$User ,'id'=>$id]);
    }
     public function admindeletepost(Request $request)
    {
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->email = $request->email;
        $User->delete();
        return redirect('admin-list');
    }




        public function ajax()
    {
        return view('ajax');
    }
    
    
}





