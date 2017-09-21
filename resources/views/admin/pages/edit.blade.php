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
                            <!-- field -->
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Page Name</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="{{$page->name}}" required autofocus>
                                </div>
                            </div>
                            <!--end field -->
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
                        <form class="form-horizontal" action="/admin/pages/{{$page->id}}/fields" method="post" enctype='multipart/form-data'>
                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="put"/>
                            @foreach($page->fields as $field)
                            <!-- field -->
                                <div class="form-group">
                                    <label for="{{$field->name}}" class="col-md-2 control-label">{{$field->name}}</label>

                                    <div class="col-md-8">
                                        @if($field->type == 'string')
                                            <input id="{{$field->name}}" type="text" class="form-control" name="{{$field->name}}" value="{{$field->value}}" required autofocus>
                                        @else
                                            <textarea class="summernote" name="{{$field->name}}" value="{{$field->value}}" required autofocus>{{$field->value}}</textarea>
                                        @endif
                                    </div>
                                </div>
                                <!--end field -->
                            @endforeach
                            <button type="form-submit" class="btn btn-md btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection