<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Fotoland!';
        //return view ('pages.index', compact('title'));
        return view ('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view ('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array (
           'title' => 'Services',
           'services' => ['Web Design', 'Programming', 'SEO'] 
        );
        return view ('pages.services')->with($data);
    }
    
     /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('dropzone-view');
    }


    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);
    }

}
