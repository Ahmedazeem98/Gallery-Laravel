<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Phar;

class PhotosController extends Controller
{
    public function create($album_id){
        return view ('photos.create')->with('album_id',$album_id);
    }
    public function store(Request $request, $id){
       $this->validate($request,[
           'title' => 'required',
           'description' => 'required',
           'photo' => 'required|mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg|max:5000'
       ]);

       $fileNameWithExt = $request->file('photo')->getClientOriginalName();
       $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
       $ext = $request->file('photo')->getClientOriginalExtension();
       $fileNameToStore = $fileName.'_'.time().'.'.$ext;
       $path = $request->file('photo')->storeAs('public/albums/photos', $fileNameToStore);
      
       $photo = new Photo;
       $photo->title = $request->title;
       $photo->description = $request->description;
       $photo->photo = $fileNameToStore;
       $photo->size = $request->file('photo')->getClientSize();
       $photo->album_id = $id;
       $photo->save();
       return redirect('/albums/'.$id)->with('success','photo Added');

    }

    public function show($id){
        $photo = Photo::find($id);
        return view ('photos.show')->with('photo', $photo);
    }
    

    public function destroy($id){
        $photo = Photo::find($id);
        $photo->delete();
        return back()->with('success','photo deleted');
    }
}
