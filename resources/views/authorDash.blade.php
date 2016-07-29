@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-sm-4">
                @include('partials.articleForm')
            </div>

            <div class="col-md-8 col-sm-8">
                @include('partials.articlesList')
            </div>

        </div>

    </div>



@stop