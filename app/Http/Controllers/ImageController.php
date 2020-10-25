<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultiImg;

class ImageController extends Controller
{
    public function index(){
        
    	return view('multiImg.image.image');
    }

    public function create(Request $request)

    {
 
        // request()->validate([
 
        //     'image' => 'required',
        //     'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        // ]);
 
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'public/image/'; 
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }
       
        $check = MultiImg::insert($insert);
 
                return back()->with('message', 'Create Successfully');
        
 
    }

}
