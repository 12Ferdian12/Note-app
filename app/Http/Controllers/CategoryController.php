<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Console\View\Components\Alert;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categorys = Category::all();
        return view('Category.index', compact('Categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::insert([
            'CategoryName' =>$request->CategoryName,
            'CategoryAbout' =>$request->CategoryAbout
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
        $Category = Category::where('CategoryID',$id)->first();
        // dd($Category);
        return view('Category.edit', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);
        Category::where('CategoryID',$id)->update([
            'CategoryName'=>$request->CategoryName,
            'CategoryAbout'=>$request->Desc,
        ]);
        return redirect()->route('Category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            Category::where('CategoryID',$id)->delete();
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['msg' => 'Category has a value!']);
        }
        return redirect()->route('Category.index',);
    }
}
