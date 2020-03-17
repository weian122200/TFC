<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>TFC Company</title>
  </head>
  <body style="overflow-x: hidden;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E2F2FF;padding-bottom: 1%;">
      <img src="{{asset('image/tfc2.png')}}" alt="" style="margin-right: 1%" >
        <a class="navbar-brand"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
              </a>
              <div class="dropdown-menu" style="background-color: #e3f2fd" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('viewlist')}}">PHONE</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
          </ul>
                        @guest
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</div>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</div>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
    
        </div>
    </nav>
   
    <div class="container-fluid" style="margin-top: 10px" >
        <div class="row">
        <div class="col-md-2" style="margin: 1% 0 2% 0;">
            <ul class="list-group">
                <li class="list-group-item active"> Phone List</li>
                <li class="list-group-item"> APPLE</li>
                <li class="list-group-item"> HUAWEI</li>
                <li class="list-group-item"> SONY</li>
            </ul>
            <br>
           <img src="image/mcp.png" alt="" class="img-fluid">  
        </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="row">

                    @yield('content')
                    </div>

                    </div>
                    
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>





        <footer class="pt-4 my-md-5 pt-md-5 border-top">
     <div class="row">
        <div class="col-md-3" style="padding-left: 3%;">
          <img src="{{asset('image/tfc.png')}}" alt="" width="70%" height="70%">
          <P> &nbsp; &copy; 2017-2020 </P>
        </div>
        <div class="col-3 col-md">
          <h5> Contact Us</h5>
          <br>
          <img src="{{asset('image/wechat.png')}}" width="30%">
          <img src="{{asset('image/whatsapp.png')}}" width="30%">

        </div>
        <div class="col-3 col-md">
          <h5> Follow Us</h5>
          <br>
          <img src="{{asset('image/insta.png')}}"width="30%">
          <img src="{{asset('image/twitter.png')}}"width="30%">
        
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
          <br>
            <li><a class="text-muted" href="{{url('cart')}}">Cart</a></li>
            <li><a class="text-muted" href="{{url('contact')}}">Contract us</a></li>
          </ul>
        </div>
      </div>
    </footer>
</html>

  

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>