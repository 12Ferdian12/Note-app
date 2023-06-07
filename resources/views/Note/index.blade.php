@extends('master')

@section('title')
    Note
@endsection

@section('content')
<a href="{{ route('Note.create') }}">
    <button class="mx-2 my-2 bg-green-500 border-2 border-black rounded px-5 text-white">Create</button>
</a>
<div class="grid grid-cols-4">
    @foreach ($Note as $NT)
    {{-- @dd($NT) --}}
    <a href="#">
        <div class=" mx-2 my-2 border-2 w-[350px] h-[200px] rounded text-white bg-slate-700 border-black">
            <div class="px-5 py-2">
                <h1 class=" text-2xl font-semibold mb-2 border-b border-b-white max-w-[200px]">Name: {{ $NT->Name }}</h1>
                <h1 class=" ">From: {{ $NT->CategoryName }}</h1>
                <h1 class="text-xl font-semibold">About:</h1>
                <p class="line-clamp-4">{{ $NT->Content }}</p>
            </div>
        </div>
    </a>
@endforeach
</div>

@endsection