<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Author;
use App\Country;
use App\Language;
use App\Setting;

class AuthorsController extends Controller
{

    public function index()
    {
        $setting        = Setting::first();
        $itemperpage    = ($setting) ? (int)$setting['per_page'] : 10;

        $authors        = Author::latest()->with(['country','language'])->paginate($itemperpage);
        $countries      = Country::latest()->get();
        $languages      = Language::latest()->get();
        return view('authors.index', compact('authors','countries','languages'));
    }

    public function create(){
        $author   = Author::latest()->with(['country','language']);
        $countries = Country::latest()->get();
        $languages = Language::latest()->get();

        return view('authors.add', compact('author','countries','languages'));
    }


    public function store(Request $request)
    {
      $request->validate([
          'name'        => 'required',
          'country_id'  => 'required',
          'language_id' => 'required',
          'dateofbirth' => 'required',
          'bio'         => 'required',
          'image'       => 'required|image'
      ]);

      if ($request->hasFile('image')) {
        $img = $request->file('image');
        $new_name = rand().'-'.$img->getClientOriginalName();
        $img->move(public_path('Upload/authors/'),$new_name);
        $imageName = $new_name;
      } else {
        $imageName = 'noimage.png';
      }

      Author::create([
        'name'        => $request->name,
        'slug'        => str_slug($request->name),
        'country_id'  => $request->country_id,
        'language_id' => $request->language_id,
        'dateofbirth' => $request->dateofbirth,
        'bio'         => $request->bio,
        'image'       => $imageName
      ]);

      return redirect(route('authors.index'))->with('success', 'Author Add successfully.');
    }


    public function show($id)
    {
      $author = Author::with(['country','language'])->findOrFail($id);
      return response()->json(['author' => $author]);
    }


    public function edit($id)
    {
        $languages  = Language::latest()->get();
        $countries  = Country::latest()->get();
        $author     = Author::findOrFail($id);
        // return response()->json(['author' => $author]);

        return view('authors.edit', compact('author','languages','countries'));
    }


    public function update(Request $request, $id)
    {
      $request->validate([
          'name'        => 'required',
          'country_id'  => 'required',
          'language_id' => 'required',
          'dateofbirth' => 'required',
          'bio'         => 'required',
        //   'image'       => 'image'
      ]);

      $author = Author::findOrFail($id);

      if ($request->hasFile('image')) {

        if(file_exists(public_path('Upload/authors/') . $author->image)){
          unlink(public_path('Upload/author/') . $author->image);
        }

        $imageName = 'author-'.time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('Upload/authors/'), $imageName);

      }else{
        $imageName = $author->image;
      }

      $author->name         = $request->name;
      $author->slug         = str_slug($request->name);
      $author->country_id   = $request->country_id;
      $author->language_id  = $request->language_id;
      $author->dateofbirth  = $request->dateofbirth;
      $author->bio          = $request->bio;
      $author->image        = $imageName;
      $author->save();

      return redirect(route('authors.index'))->with('success', 'Author updated successfully.');
    }

    public function destroy($id)
    {
      $author    = Author::findOrFail($id);
      $countries = Country::findOrFail($id);
      $languages = Language::findOrFail($id);

      if(file_exists(public_path('upload/authors/') . $author->image)){
        unlink(public_path('upload/authors/') . $author->image);
      }

      $author->delete();
      $countries->genres()->detach();
      $languages->genres()->detach();

      return redirect()->route('authors.index')
                        ->with('success','Author deleted successfully');
    }
}
