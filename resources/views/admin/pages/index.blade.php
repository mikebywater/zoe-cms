@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Pages</div>

                    <div class="panel-body">
                        <table class="table table-striped table-responsive">
                            @foreach ($pages as $page)
                                <tr>
                                    <td>{{$page->name}}</td>
                                    <td >
                                        <form class="pull-right" action="/admin/pages/{{$page->id}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button class = "btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>



                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">New Page</div>

                        <div class="panel-body">
                            <form class="form-horizontal" action="/admin/pages" method="post" enctype='multipart/form-data'>
                                {{csrf_field()}}
                                <input type="text" name="name" class="form-control" placeholder="Enter Page Name" required/>
                                <input type="text" name="template" class="form-control" placeholder="Select Template" required/>
                                <button type="form-submit" class = "btn btn-md btn-success">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection