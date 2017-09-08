@extends('layouts.master')



@section('content')
    <br/>
    <!-- content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$fields->title}}</div>

                    <div class="panel-body">

                    {{$fields->content}}


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
