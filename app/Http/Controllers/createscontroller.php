<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class createscontroller extends Controller
{
    public function home(){
    	$articles=Article::all();
    	return view('home',['articles'=> $articles]);
    }

/*
    public function add(){
    	return 'add';
    }

    
*/
public function add(Request $request){
	$this->validate($request,[
		'title'=> 'required',
		'description'=>'required']);

	$articles=new Article;
	$articles->title=$request->input('title');
	$articles->description=$request->input('description');
	$articles->save();
	return redirect('/')->with('info','Article saved successfully');
}


/*
public function update($id){ 

	 return $id;
}
*/
public function update($id){

	 $articles=Article::find($id);
    	return view('update',['articles'=> $articles]);
}


public function edit(Request $request,$id){

	 $this->validate($request,[
		'title'=> 'required',
		'description'=>'required']);

	 $data=array(
	 	'title'=> $request->input('title'),
	 	'description'=>$request->input('description')
	 	);
  Article::where('id',$id)
  ->update($data);
	
	return redirect('/')->with('info','Article update successfully');
}

/*
public function delete($id){ 

	 return $id;
}
*/
public function delete($id){ 

	 
  Article::where('id',$id)
  ->delete();
	
	return redirect('/')->with('info','Article deleted successfully');
}

}
