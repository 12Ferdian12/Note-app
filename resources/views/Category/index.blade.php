@extends('master')

@section('title')
    Category
@endsection

@section('content')
  
    <a href="{{ route('Category.create') }}">
        <button class="mx-2 my-2 bg-green-500 border-2 border-black rounded px-5 text-white">Create</button>
    </a>
    <div class="grid grid-cols-4 ">
        @foreach ($Categorys as $CT)
        <div class=" mx-2 my-2 shadow  border-2 w-[350px] h-[200px] rounded text-white bg-slate-700 border-black">
            <div class="px-5 py-2">
                @if($errors->any())
                    <h4 class="text-red-600 border-b mb-2 border-b-red-600 font-bold">{{$errors->first()}}</h4>
                @endif
                <div class="flex">
                    <h1 class=" text-2xl font-semibold mb-2 border-b border-b-white max-w-[100px]">{{ $CT->CategoryName }}</h1>
                    <form action="{{ route('Category.delete',['id'=>$CT->CategoryID]) }}" method="post">
                        @csrf
                        @method('DELETE')
                            <button class="ml-5 mr-2 h-[30px] w-[60px] bg-red-600 border border-black rounded px-1" type="submit" > Delete </button>
                    </form>                   
                    <a class="mr-5 h-[30px] w-[50px] bg-yellow-500 border border-black rounded px-2" href="{{ route('Category.edit',['id'=>$CT->CategoryID]) }}">
                        <button > Edit </button>
                    </a>
                    <a href="{{ route('Category.note') }}" class="py-1">
                        <i class="fa-regular fa-folder-open fa-lg"></i>
                    </a>
                </div>
                <h1 class="text-xl font-semibold">About:</h1>
                <p class="line-clamp-4">{{ $CT->CategoryAbout }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection