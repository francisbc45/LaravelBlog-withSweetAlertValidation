 <header class="masthead" style="background-image: url({{ URL::asset('img/home-bg.jpg') }}">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Hello {{ Auth::user()->name }}</h1>
              <span class="subheading">A Blog made by {{ Auth::user()->name }}</span>
            </div>
          </div>
        </div>
      </div>
    </header>
