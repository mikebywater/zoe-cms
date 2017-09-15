@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Templates</div>

                    <div class="panel-body">
                        <table class="table table-striped table-responsive">
                            @foreach ($templates as $templates)
                                <tr>
                                    <td>{{$templates->name}}</td>
                                </tr>
                            @endforeach
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection