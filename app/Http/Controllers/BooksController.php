<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Book;
use App\Author;
use App\Language;
use App\Series;
use App\Publisher;
use App\Genre;
use App\Setting;

class BooksController extends Controller
{
    public function index()
    {
        $setting     = Setting::first();
        $itemperpage = ($setting) ? (int)$setting['per_page'] : 10;

        // $languages  = Language::latest()->get();
        $books = Book::latest()->with(['genres','author','publisher','language'])
                               ->withCount(['issuedbooks' => function($query) { $query->where('status', '!=', 'returned'); }])
                               ->paginate($itemperpage);
        // $language = Language::find(1)->language;
        // dd($language);
        // return $books;

        return view('books.list', compact('books'));
    }

    public function create(){
        $authors    = Author::latest()->get();
        $languages  = Language::latest()->get();
        $allseries  = Series::latest()->get();
        $publishers = Publisher::latest()->get();
        $genres     = Genre::latest()->get();

        return view('books.add', compact('authors','languages','allseries','publishers','genres'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'title'           => 'required|unique:books',
            'ISBN'            => 'required|unique:books',
            'publisher_id'    => 'required',
            'author_id'       => 'required',
            'genre_id'        => 'required',
            'series_id'       => 'required',
            'published_year'  => 'required',
            'pages'           => 'required',
            'binding'         => 'required',
            'quantity'        => 'required',
            'price'           => 'required',
            'language_id'     => 'required',
            'description'     => 'required',
            'image'           => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $new_name = rand().'-'.$img->getClientOriginalName();
            $img->move(public_path('Upload/Books/'),$new_name);
            $imageName = $new_name;
          } else {
            $imageName = 'noimage.jpg';
          }
        // return $imageName;
        $book = Book::create([
          'title'           => $request->title,
          'slug'            => str_slug($request->title),
          'subtitle'        => $request->subtitle,
          'ISBN'            => $request->ISBN,
          'series_id'       => $request->series_id,
          'publisher_id'    => $request->publisher_id,
          'author_id'       => $request->author_id,
          'edition'         => $request->edition,
          'published_year'  => $request->published_year,
          'pages'           => $request->pages,
          'binding'         => $request->binding,
          'quantity'        => $request->quantity,
          'price'           => $request->price,
          'language_id'     => $request->language_id,
          'description'     => $request->description,
          'image'           => $imageName,
        ]);

        $book->genres()->attach($request->genre);

        return redirect(route('books.index'))->with('success', 'Book add successfully.');
    }


    public function show($id)
    {
      $book = Book::with(['genres','author','publisher','language'])->findOrFail($id);
      return response()->json(['book' => $book]);
    }


    public function edit($id)
    {
        $books = Book::findOrFail($id);

        // return $books->genres;
        $authors    = Author::latest()->get();
        $languages  = Language::latest()->get();
        $allseries  = Series::latest()->get();
        $publishers = Publisher::latest()->get();
        $genres     = Genre::latest()->get();

        // return response()->json(['book' => $book]);
        return view('books.edit', compact('books','authors','languages','allseries','publishers','genres'));
    }


    public function update(Request $request, $id)
    {
      $request->validate([
          'title'           => 'required',
          'ISBN'            => 'required',
          'publisher_id'    => 'required',
          'author_id'       => 'required',
          'genre_id'        => 'required',
          'published_year'  => 'required',
          'pages'           => 'required',
          'binding'         => 'required',
          'quantity'        => 'required',
          'price'           => 'required',
          'language_id'     => 'required',
          'description'     => 'required',
      ]);
        // return $request->all();
      $book = Book::findOrFail($id);
        // foreach($book->genres as $genre){
        //     echo $genre->name. '<br>';
        // }
      if ($request->hasFile('image')) {
        if(file_exists(public_path('Upload/Books/') . $book->image)){
          unlink(public_path('Upload/Books/') . $book->image);
        }
        $imageName = 'book-'.time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('Upload/Books'), $imageName);
      }else{
        $imageName = $book->image;
      }
      $book->title           = $request->title;
      $book->slug            = str_slug($request->title);
      $book->subtitle        = $request->subtitle;
      $book->ISBN            = $request->ISBN;
      $book->series_id       = $request->series_id;
      $book->publisher_id    = $request->publisher_id;
      $book->author_id       = $request->author_id;
      $book->edition         = $request->edition;
      $book->published_year  = $request->published_year;
      $book->pages           = $request->pages;
      $book->binding         = $request->binding;
      $book->quantity        = $request->quantity;
      $book->price           = $request->price;
      $book->language_id     = $request->language_id;
      $book->description     = $request->description;
      $book->image           = $imageName;
      $book->save();
    //   dd($request->all());
      $book->genres()->sync($request->genre_id);

    //   return back()->with('success', 'Book updated successfully.');
    return redirect(route('books.index'))->with('success', 'Book updated successfully.');

    }


    public function destroy(Book $id)
    {
      // $product->delete()
      $book = Book::findOrFail($id);

      if(file_exists(public_path('Upload/Books/') . $book->image)){
        unlink(public_path('Upload/Books/') . $book->image);
      }

      $book->genres()->detach();
      $book->delete();

      return redirect(route('books.index'))->with('success', 'Book updated successfully.');
    }
}
