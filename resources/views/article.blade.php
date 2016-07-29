@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>
            {{ $article->title }}
        </h3>

        <p>
            {{ $article->content }}
        </p>

        <hr>

        <div class="col-md-12">

            @if(\Illuminate\Support\Facades\Auth::user())
                <form action="{{ url('post-comment/'.$article->id) }}" method="post" class="form-horizontal">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="comment">Post your comment</label>
                        <textarea rows="4" name="comment" type="text" class="form-control">{{ old('comment') }}</textarea>
                        <span>{{ $errors->first('comment') }}</span>

                    </div>

                    <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn btn-success">
                    </div>

                </form>
            @else
                <div>
                    ! please <a href="{{ url('login') }}">Login</a> to post the comment.
                </div>
            @endif




            <hr>

            @foreach($comments as $comment)
                <div><em>{{ $comment->comment }}</em></div>
                <div>
                    <small>By {{ $comment->user->name }}</small>
                    |
                    <small>Posted on {{ $comment->created_at }}</small>
                </div>
                <hr>
            @endforeach

        </div>

    </div>

@stop