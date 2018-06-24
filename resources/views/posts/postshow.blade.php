@extends('posts.main')
@section('title', '| ShowPost')
@section('content')
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="section-heading">{{$posts->Title}}</h2>
            <p>{!! $posts->Content !!}</p>
            <hr>
            <p class="post-meta">Posted by
              <a href="#">{{ $posts->user->name }}</a>
              on {{ $posts->created_at }}</p>


            <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-left" href="/posts">&larr; Go Back</a>
            <a class="btn btn-primary float-right" href="/posts/{{ $posts->id }}/edit">| Edit |</a>
            {!! Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'POST']) !!}
            <button class="btn btn-primary float-right" type="submit">| Delete |</button>
            {{Form::hidden('_method', 'DELETE')}}
            {!! Form::close() !!}
          </div>

          </div>
        </div>
      </div>
    </article>
@endsection