@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <ul>
                @foreach ($categories as $category)

                        <li>{{$category->name}}</li>

                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form action="/admin/categories" method="post" enctype='multipart/form-data'>
                {{csrf_field()}}
                <input type="text" name="name" />
                <button class = "btn btn-primary">Add</button>
            </form>
        </div>
    </div>






@endsection