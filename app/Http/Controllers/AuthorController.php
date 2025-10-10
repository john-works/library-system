<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $authors = Author::all(); 
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
         return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
          $request->validate([

'fname' =>'required',
'lname' =>'required',
'gender' =>'required',
'address' =>'required',
'email' =>'required',
'phone' =>'required',
'category' =>'required',




        ]);

        // Save supplier
        Author::create($request->all());

        return redirect()->route('authors.index')
                         ->with('success', 'Author created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //   $items = Item::all(); 
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        
        $request->validate([
'fname' =>'required',
'lname' =>'required',
'gender' =>'required',
'address' =>'required',
'email' =>'required',
'phone' =>'required',
'category' =>'required',




        ]);
        $author->update($request->all());
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
