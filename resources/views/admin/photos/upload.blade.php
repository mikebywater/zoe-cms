@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Photo</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="/admin/photos" method="post" enctype='multipart/form-data'>
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="photo" class="col-md-4 control-label">Photo</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="photo" required autofocus/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="custom-select form-control" name="title" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Category" class="col-md-4 control-label">Category</label>

                                <div class="col-md-6">
                                    <select id="category" class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button class = "btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection