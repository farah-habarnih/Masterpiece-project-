<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::with('category')->get();
        // $categories = Category::all();
        return view('layouts.admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('layouts.admin.book.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'name' => 'required|min:2',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:8',
        //     'mobile_number' => 'max:10',
        // ]);


        Book::create([
            'book_name' => $request->book_name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'image' => $request->image,
        ]);
        return redirect()->back()->with(['message' => 'Book added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = Book::find($id);
        $categories = Category::all();
        return view('layouts.admin.book.edit', compact('book','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);
        $book->update([
            'book_name' => $request->book_name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'image' => $request->image,
        ]);
        return redirect()->back()->with(['message' => 'edit was successful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd($id);
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with(['message' => 'delete was successful']);
    }
}
