@extends('master')

@section('title')
    Note
@endsection

@section('content')
{{-- @dd($Note, $category) --}}
<a href="{{ route('Note.create') }}">
    <button class="mx-2 my-2 bg-green-500 border-2 border-black rounded-xl px-5 text-white">Create</button>
</a>
<div class="grid grid-cols-4">
    @foreach ($Note as $NT)
    {{-- @dd($NT) --}}
        <div class=" mx-2 my-2 border-2 w-[350px] h-[200px] rounded text-white bg-slate-700 border-black">
            <div class="px-5 py-2">
                <div class="flex">
                    <h1 class=" text-2xl font-semibold mb-2 border-b-[3px] border-b-white max-w-[200px]">Name: <br> <span class="text-xl">{{ $NT->Name }}</span> </h1>
                    <form action="{{ route('Note.delete',['id'=>$NT->NoteID]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="ml-5 mr-2 h-[30px] w-[60px] bg-red-600 border border-black rounded-xl px-1">Delete</button>
                    </form>
                    <a class="ml-5 mr-2 h-[30px] w-[60px] bg-cyan-600 border border-black rounded-xl px-1" href="{{ route('Note.edit',['id'=>$NT->NoteID]) }}">
                        <button class="h-[25px] w-[50px] px-1"> Open</button>
                    </a>
                </div>
                    <h1 class=" ">From: {{ $NT->CategoryName }}</h1>
                <h1 class="text-xl font-semibold">About:</h1>
                <p class="line-clamp-4 overflow-hidden">{{ $NT->Content }}</p>
            </div>
        </div>
@endforeach
</div>

@endsection