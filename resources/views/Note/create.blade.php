@extends('master')

@section('title')
    Create Note
@endsection

@section('content')
    
<form class="" action="{{ route('Note.store') }}" method="POST">
@csrf
<div class=" flex mb-6 mx-[50px] w-[500px] h-[100px] bg-gray-600 rounded-xl border-black border-2 ">
  <div class="">
    <label for="Name" class="block mb-2 px-[20px] text-xl font-medium text-white">Note Name:</label>
    <input type="text" name="NoteName" id="Name" class="mx-5 rounded-lg" required>
  </div>
  <div class="">
    <label for="NameC" class="block mb-2 text- font-medium text-gray-900 dark:text-white">Category:</label>
    <select  name="IDCategory" id="NameC" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      @foreach ($Categorys as $CT)
        <option value="{{ $CT->CategoryID }}"> {{ $CT->CategoryName }} </option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="text-white bg-slate-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Submit
  </button>
</div>

<div class="mb-6 mx-auto rounded-lg w-[1440px] h-[470px] bg-gray-600 border-black border-2">
  <label for="Description" class="block mb-2 ml-10 text-lg font-medium text-white">Description:</label>
  <textarea type="text" name="Description" id="Description" class="ml-10  bg-gray-50 resize-none border border-gray-300 text-gray-900 text-sm rounded-lg w-[1300px] h-[400px] " required>
  </textarea>
</div>
  {{-- <div class="mb-6">
  </div>
  <div class="mb-6">
    <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category:</label>
    <select  name="IDCategory" id="Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      @foreach ($Categorys as $CT)
        <option value="{{ $CT->CategoryID }}"> {{ $CT->CategoryName }} </option>
      @endforeach
    </select>
    </div>
  <div class="mb-6">
    <label for="Description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description:</label>
    <textarea type="text" name="Description" id="Description" class="bg-gray-50 resize-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </textarea>
  </div>
  <button type="submit" class="text-white bg-slate-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Submit
  </button> --}}
</form>

@endsection