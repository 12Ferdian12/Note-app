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
    public function index($id)
    {
        $Note = Note::join('category','category.CategoryID','=','note.IdCategory')->where('CategoryID',$id)->get();
        $category = Category::all();
        
        return view('Note.index', compact('Note','category'));
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
        return redirect()->route('Category.index');
        
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
        // dd($id);
        $Note = Note::where('NoteID',$id)->first();
        // $Note = Note::find($id);
        $Category = Category::all();

        return view('Note.edit', compact('Note','Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);
        Note::where('NoteID',$id)->update([
            'Name'=>$request->NoteName,
            'IdCategory'=>$request->IDCategory,
            'Content'=>$request->Description,
        ]);
        return redirect()->route('Note.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        try{
            Note::where('NoteID',$id)->delete();
        } catch(\Exception $e){
            dd($e->getMessage());
            return  $e->getMessage();
        }
        return redirect()->route('Category.index');
    }
}
