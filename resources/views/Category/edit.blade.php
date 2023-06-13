@extends('master')

@section('title')
    Edit Category
@endsection

@section('content')
    
<form class="mx-auto my-24 border shadow-lg rounded-lg border-black w-[300px] h-[300px] bg-slate-900" action="{{ route('Category.update', ['id'=>$Category->CategoryID])}}" method="POST">
    @csrf
      <div class="px-8">
        <div class="mt-10 mb-6">
          <label for="Category" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Name:</label>
          <input type="text" name="CategoryName" value="{{ $Category->CategoryName }}" id="Category" class="border mb-2 border-black text-white rounded bg-slate-600 "  required>
          <label for="About" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Description:</label>
          <textarea type="text" name="Desc" id="About" class="border border-black w-[200px] resize-none rounded text-white bg-slate-600 "  required>
                {{ $Category->CategoryAbout }}
          </textarea>
         </div>
        <button type="submit" class="text-white bg-slate-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Submit
        </button>
      </div>
    </form>
@endsection