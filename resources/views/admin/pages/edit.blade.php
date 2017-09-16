@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Page</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="/admin/pages/{{$page->id}}" method="post" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="put"/>
                            <input type="text" name="name" class="form-control" placeholder="Enter Page Name" value="{{$page->name}}" required/>

                            <button type="form-submit" class="btn btn-md btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Fields</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="/admin/pages/{{$page->id}}" method="post" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="put"/>
                            @foreach($page->fields as $field)
                                <input type="text" name="{{$field->name}}" class="form-control" placeholder="Enter Page Name" value="{{$field->value}}" required/>
                            @endforeach

                            <button type="form-submit" class="btn btn-md btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection