@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <form class = "pull-right" action="/admin/categories" method="post" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="text" name="name" placeholder="Enter New Category" required/>
                            <button class = "btn btn-primary">Add</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection