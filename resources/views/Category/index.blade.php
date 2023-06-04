@extends('master')

@section('title')
    Category
@endsection

@section('content')
    <a href="{{ route('Category.create') }}">
        <button class="bg-slate-700 border rounded px-5 text-white">Create</button>
    </a>
@endsection