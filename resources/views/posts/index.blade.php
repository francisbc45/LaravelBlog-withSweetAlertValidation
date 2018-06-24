@extends('posts.main')
@section('content')
 <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach ($posts as $post)
          <div class="post-preview">
            <a href="/posts/{{$post->id}}">
              <h2 class="post-title">
                {{ $post->Title }}
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{ $post->user->name }}</a>
              on {{ $post->created_at }}</p>
          </div>
          @endforeach
         
          
        </div>
      </div>
    </div>


   
@endsection