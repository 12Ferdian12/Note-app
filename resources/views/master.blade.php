<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-BG">
  <!-- <nav class="flex py-7 bg-blue border-b border-b-black">
    <h1 class="px-7 text-2xl cursor-default text-Text font-bold">No</h1>
    <ul class="flex mx-[550px]">
      <li class="border rounded-full  p-1 w-[75px] text-Text mx-1"><a href="" class="px-4">Note</a></li>
      <li class="border rounded-full p-1  text-Text mx-1"><a href="" class="px-2">To Do list</a></li>
    </ul>
  </nav> -->
  
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center">
        <h1 class="self-center border-b-2 border-b-white text-2xl font-semibold whitespace-nowrap dark:text-white">No<span class="text-Purp">Va</span></h1>
    </a>
   
    <div class="hidden w-full  md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col px-28 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{ route('Category.index') }}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Category</a>
        </li>
        <li>
          <a href="{{ route('Note.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Note</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">To Do list</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="">
    @yield('content')
  </div>
</body>
</html>