@extends('layouts.admin')

@section('content')

    <form action="/admin/photos" method="post" enctype='multipart/form-data'>
        {{csrf_field()}}
        <input type="file" name="photo" />
        <input type="text" name="title" />
        <button class = "btn btn-primary">Upload</button>
    </form>

@endsection