<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Category;    
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Note = Note::join('category','category.CategoryID','=','note.IdCategory')->get();

        // return view('Note.index', compact('Note'));

        return view('Note.index', compact('Note'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categorys = Category::all();
        return view('Note.create', compact('Categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        Note::insert([
            'Name' =>$request->NoteName,
            'IdCategory' =>$request->IDCategory,
            'Content' =>$request->Description,
        ]);
        return view('Note.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}