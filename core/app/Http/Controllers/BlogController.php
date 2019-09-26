<?php

namespace App\Http\Controllers;

use App\Blog;
use App\blogs_category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs(){
        $blogs=Blog::all();
        $categories=blogs_category::orderBy('id','DESC')->get()->toArray();
        return view("admin.blog")->with("blogs",$blogs)->with("categories",$categories);
    }
    public function blog_add(Request $request){
        $blog=new Blog();
        $blog->title=$request->input("title");
        $blog->desc=$request->input("desc");
        $blog->category=$request->input("category");
        $blog->save();
        $LastBlog=Blog::orderBy('created_at', 'desc')->first();
        $file = $request->file('image');
        if(isset($file))
            if ($file->isValid()) {
                $fileName="blog-".$LastBlog->id."-".$file->getClientOriginalName();
                $file->move('upload/blog', $fileName);
                Blog::where('id',$LastBlog->id)
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }
    public function blog_update_view($id){
        $blogs=Blog::all();
        $blog =Blog::find($id);
        $categories=blogs_category::orderBy('id','DESC')->get()->toArray();
        return view("admin.blog" ,['blogs'=>$blogs,'blog'=>$blog,'id'=>$id])->with("categories",$categories);

    }
    public function blog_update(Request $request){
        Blog::where('id',$request->input("id"))
            ->update([
                'title' =>$request->input("title"),
                'desc' =>$request->input("desc"),
                'category' =>$request->input("category")
            ]);
        $file = $request->file('image');

        if(isset($file))
            if ($file->isValid()) {
                $fileName="blog-".$request->input("id")."-".$file->getClientOriginalName();
                $file->move('upload/blog', $fileName);
                Blog::where('id',$request->input("id"))
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }
    public function blog_delete($id){
        Blog::find($id)->delete();
        return redirect()->back();
    }
    public function blog_category(){
        $categories=blogs_category::orderBy('id','DESC')->get();
        return view("admin.blogCat")->with("categories",$categories);
    }
    public function blog_category_add(Request $request){
        $blog=new blogs_category();
        $blog->name=$request->input("title");
        $blog->save();
        return redirect()->back();
    }
    public function blog_category_delete($id){
        blogs_category::find($id)->delete();
        return redirect()->back();
    }
}
