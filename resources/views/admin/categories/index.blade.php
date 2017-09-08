@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>

                    <div class="panel-body">
                        <table class="table table-striped table-responsive">
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td >
                                        <form class="pull-right" action="/admin/categories/{{$category->id}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button class = "btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <form class="form-horizontal" action="/admin/categories" method="post" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="text" name="name" class="form-control" placeholder="Enter New Category" required/>
                            <button class = "btn btn-success">Add</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection