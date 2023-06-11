@extends('master')

@section('title')
    
@endsection

@section('content')

    {{-- <h1>Ini Edit/view</h1> --}}
    <form action="" method="post">
    @csrf
        <label for="Name">Note Name</label>
        <input id="Name" value="{{ $Note->Name }}" type="text">
    </form>
@endsection