@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">


            <div class="col-md-4 col-sm-4">
                @include('partials.authorForm')
            </div>

            <div class="col-md-8 col-sm-8">
                @include('partials.authorsList')
            </div>

        </div>

    </div>

@stop