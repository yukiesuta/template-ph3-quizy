@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>大問追加</h2>
        <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title">
            <input type="submit" value="追加">
        </form>
    </div>
@endsection
