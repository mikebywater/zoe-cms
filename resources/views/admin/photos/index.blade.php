@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Photos</div>

                    <div class="panel-body">

                        <a href="/admin/photos/create" class = "pull-right btn btn-success-filled"><i class="fa fa-upload"></i> Upload</a>

                        <table class="table table-striped table-responsive">
                            @foreach ($photos as $photo)
                                <tr>
                                    <td width="100"> <img height="100" src="{{$photo->url}}"/></td>
                                    <td align="right">
                                        <form action="/admin/photos/{{$photo->id}}/up"  method="post">
                                            {{csrf_field()}}
                                            <button class = "btn btn-primary"><i class="fa fa-arrow-up"></i></button>
                                        </form>
                                        <form action="/admin/photos/{{$photo->id}}/down"  method="post">
                                            {{csrf_field()}}
                                            <button class = "btn btn-primary"><i class="fa fa-arrow-down"></i></button>
                                        </form>
                                    </td>
                                    <td align="right">
                                        <form action="/admin/photos/{{$photo->id}}"  method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button class = "btn btn-danger-filled"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>



                    </div>

                    </div>
                </div>
            </div>

    </div>




@endsection