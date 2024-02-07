<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::get(); 

        return view('Admin.gallery_management.index',compact('gallery'));   
    }

    public function create()
    {
       return view('Admin.gallery_management.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
    
            'image' => 'required|image|mimes:jpeg,png|max:20000',
        ]);

        $data = [
             'image'=>$request['image'],
             'title' => $request['title'],

        ];
   
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Gallery', 'public');
            $data['image'] = $imagePath;
        }

        Gallery::create($data);

        return redirect()->route('gallery.list')
            ->with('success', 'Gallery create successfully');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('Admin.gallery_management.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:20000', 
        ]);
    
        $record = Gallery::find($id);
    
        if ($record->image_path) {
            Storage::delete($record->image);
        }
    
        $record->title = $data['title'];
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Gallery', 'public');
            $record->image = $imagePath;
        }
    
        $record->save();
    
        return redirect()->route('gallery.list')->with('success', 'Gallery updated successfully');
    }

    
    public function delete($id)
    {
        $galleryItem = Gallery::find($id);

        if (!$galleryItem) {
            return redirect()->route('gallery.list')->with('error', 'Gallery item not found.');
        }
        
        $galleryItem->delete();
        
        return redirect()->route('gallery.list')->with('success', 'Gallery item deleted successfully.');
    }
 
    
    
    

    
  

}
