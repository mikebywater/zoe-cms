@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-2">
            <a href="/admin/photos/create" class = "btn btn-primary">Upload</a>
        </div>
    </div>
    <div class="row">
    @foreach ($photos as $photo)
            <div class="col-md-3">
                <img src="{{$photo->url}}"/>
                <form action="/admin/photos/{{$photo->id}}"  method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <button class = "btn btn-primary">Delete</button>
                </form>
            </div>

    @endforeach
    </div>




@endsection