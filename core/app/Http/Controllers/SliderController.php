<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class SliderController extends Controller
{
    public function slider(){
        $images=slider::all();
        return view("admin.slider")->with("images",$images);
    }
    public function slider_add_image(Request $request){
        $slider=new slider();
        $slider->title=$request->input("title");
        $slider->desc=$request->input("desc");
        $slider->save();
        $LastImage=slider::orderBy('id', 'desc')->first();
        $file = $request->file('image');
        if(isset($file))
            if ($file->isValid()) {
                $fileName="slider-".$LastImage->id."-".$file->getClientOriginalName();
                $file->move('upload/slider', $fileName);
                slider::where('id',$LastImage->id)
                    ->update(['image' =>$fileName]);
            }
        return redirect()->back();
    }

    public function slider_delete_image($id){
        slider::destroy($id);
        return redirect()->back();
    }
}
