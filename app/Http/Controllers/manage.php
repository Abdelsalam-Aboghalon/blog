<?php

namespace App\Http\Controllers;

use App\Article;
use App\comment;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;
use Illuminate\Support\Facades\Auth;

class manage extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public  function AddArticle(Request $request){

        if ($request->isMethod('post')){
            $ar= new Article();
            $ar->title=$request->input('title');
            $ar->body=$request->input('body');
            $ar->user_id=Auth::user()->id;
            $ar->name=Auth::user()->name;
            $ar->save();
            return redirect('view');
        }
        return view('manage.AddArticle');
    }

    public  function  view(){

        $articles= Article::all();

        $ar=Array('articles'=>$articles);

        return view('manage.view',$ar);
    }
    public  function  myView(){
        $articles= Article::all();

        $ar=Array('articles'=>$articles-> where('user_id','=',Auth::user()->id));

        return view('manage.myView',$ar);
    }

    public function edit(Article $art){

        return view('manage.edit',compact('art'));

    }

    public function update(Request $request,Article $art){
                $art->update($request->all());
                    return back();


    }

    public  function  Delete_Article(Article $art){
      $art->delete();
      return back();
    }

    public  function  read(Request $request ,$id){
        if ($request->isMethod('post')){
            $ar= new Comment();
            $ar->comment=$request->input('body');
            $ar->article_id= $id;
            $ar->user_id=Auth::user()->id;
            $ar->name=Auth::user()->name;
            $ar->save();
            // return redirect("view");
        }

        $article=Article::find($id);
        $ar=Array('article'=>$article);
        return view("manage.read",$ar );
    }





    public  function  updateC($id)
    {
        $comment=comment::find($id);
        $arC=Array('comment'=>$comment);
        return view("manage.editComment",$arC );
    }

    public  function  updateBtC(Request $request,comment $id)
    {
        $id->update($request->all());
        return back();

    }

}
