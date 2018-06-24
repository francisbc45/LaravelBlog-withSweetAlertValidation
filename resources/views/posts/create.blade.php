@extends('posts.main')
@section('title', '| Create New Post')
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="text-center">Add New Post Here</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" id="Title" name="Title">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <hr>
            <label>Content</label>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                
                <textarea rows="10" class="form-control" id="article-ckeditor" placeholder="Content" name="Content"></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="clearfix">
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              <a class="btn btn-primary float-right" href="/posts">Cancel</a>
            </div>
         {!! Form::close() !!}
        </div>
      </div>
    </div>




<!-- Sweet Alert Form Validation -->
<script type="text/javascript">

var has_errors =  {{ $errors->count() > 0 ? 'true' : 'false' }};

if( has_errors )
{
  swal({
  title: 'Error',
  type: 'warning',
  html: jQuery("#ERROR_COPY").html(),
  showCloseButton: true,
 });
}

</script>


@endsection