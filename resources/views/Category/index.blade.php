@extends('master')

@section('title')
    Category
@endsection

@section('content')
    <a href="{{ route('Category.create') }}">
        <button class="mx-2 my-2 bg-green-500 border-2 border-black rounded px-5 text-white">Create</button>
    </a>
    <div class="grid grid-cols-4">
         @foreach ($Category as $category)
        <a href="#">
            <div class=" mx-2 my-2 border-2 w-[350px] h-[200px] rounded text-white bg-slate-700 border-black">
                <div class="px-5 py-2">
                    <h1 class=" text-2xl font-semibold mb-2 border-b border-b-white max-w-[100px]">{{ $category->CategoryName }}</h1>
                    <h1 class="text-xl font-semibold">About:</h1>
                    <p class="line-clamp-4">{{ $category->CategoryAbout }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection