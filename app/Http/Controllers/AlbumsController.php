<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Album;
use Illuminate\Http\Request;
use App\photo;
class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('photos')->get();
        return view ('albums.index')->with('albums', $albums);
    }

    public function create(){
        return view ('albums.create');
    }
    public function store(Request $request){
       $this->validate($request,[
        'name' => 'required',
        'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1999',
        'description' => 'required'
       ]);

       $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
       $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
       $ext = $request->file('cover_image')->getClientOriginalExtension();
       $fileNameToStore = $fileName.'_'.time().'.'.$ext;
       $path = $request->file('cover_image')->storeAs('public/albums/covers', $fileNameToStore);
      
       $album = new Album;
       $album->name = $request->name;
       $album->description = $request->description;
       $album->cover_image = $fileNameToStore;
       $album->save();

       return redirect('/')->with('success','Album Added');
    }

    public function show($id)
    {
        $album = Album::with('photos')->find($id);
        $photos = Photo::where('album_id',$id)->get();
        return view ('albums.show',compact(['album', 'photos']));
    }

    public function edit($id)
    {
        return view ('albums.edit')->with('album', Album::find($id));
    }

    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect('/')->with('success', 'Album deleted');
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'cover_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:1999',
            'description' => 'required'
           ]);

        $album = Album::find($id);
        if(request('cover_image') != ''){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;
            $path = $request->file('cover_image')->storeAs('public/albums/covers', $fileNameToStore);
            $album->cover_image = $fileNameToStore;
            
        }
        $album->name = $request->name;
        $album->description = $request->description;
        $album->save();
        return redirect('/')->with('success','Album updated');
     }
}
