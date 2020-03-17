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

<div style="background-color: white;padding-bottom: 0%;">    

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <style>
          body {
            font-family: Arial, Helvetica, sans-serif;
          }
          
          .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
          }
          
          .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          }
          
          .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
          }
          
          .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
          }
          
          .flip-card-front {
            background-color: white;
            color: black;
          }
          
          .flip-card-back {
            background-image: linear-gradient(#3B5998,#ccddff,#f2ccff);
            color: white;
            transform: rotateY(180deg);
          }
          .carousel-item img{
            max-height: 700px;
            height: 50%;

          }

          </style>
      <body>
          <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="{{asset('image/sl1 (13).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>SONY</h5>
                  <p>BE MOVED</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('image/sl1 (5).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>SONY</h5>
                  <p>BE MOVED</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('image/sl1 (16).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>APPLE</h5>  
                  <p>Think Different</p>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('image/sl1 (7).jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                  <h5>APPLE</h5>  
                  <p>Think Different</p>
                  </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/sl1 (8).jpg')}}" class="d-block w-100" alt="..." >
                    <div class="carousel-caption">
                      <h5>HUAWEI</h5>
                      <p>Make It Possible</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                      <img src="{{asset('image/sl1 (1).jpg')}}" class="d-block w-100" alt="...">
                      <div class="carousel-caption">
                      <h5>HUAWEI</h5>
                      <p>Make It Possible</p>
                      </div>
                    </div>
            </div>
      
  
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
         
  
</div>
 </body>   
 <div class="container-fluid">
    <div class="row" style="background-image: linear-gradient(#333333,#666666,#a6a6a6,#e6e6e6);padding: 2% 0 2% 0;" >
      <div class="col-md-4" style="padding-left: 7%; " > 
          <div class="flip-card" style=" box-shadow: 10px 10px 5px  ; margin-bottom: 2%;">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('image/Sony logo 1.png')}}" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                  <h1>Sony Xperia</h1> 
                  <h5>Japan</h5> 
                  <font color="black"> Sony Mobile Communications Inc is a multinational telecommunications company founded on October 1, 2001 as a joint venture between Sony and Ericsson, headquartered in Tokyo, Japan and wholly owned by Sony</font>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-4" style="padding-left: 7%;">
          <div class="flip-card" style=" box-shadow: 10px 10px 5px ; margin-bottom: 2%;">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('image/apple logo 2.png')}}" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                  <h1>Apple</h1> 
                  <h5>American</h5> 
                  <font color="black">Apple Inc is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.</font>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-4" style="padding-left: 7%;">
          <div class="flip-card" style=" box-shadow: 10px 10px 5px ; margin-bottom: 2%;">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('image/huawei logo 1.png')}}" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                  <h1>Huawei</h1> 
                  <h5>China</h5>
                  <font color="black">Huawei Technologies Co  is a Chinese multinational technology company that provides telecommunications equipment and sells consumer electronics, including smartphones and is headquartered in Shenzhen, Guangdong.</font>
                </div>
              </div>
            </div>
           </div>
    </div>
  </div>



<div class="container-fluid">
    <div class="row" style="text-align: center;background-color: white;padding: 1% 0 0 0;" >
      <div class="col-md-4" ><img src="{{asset('image/indexsony.png')}}" class="img-fluid" width="100%" alt="" style="padding-top: 2%;"></div>
      <div class="col-md-4" ><img src="{{asset('image/indexip.png')}}" class="img-fluid" width="50%" alt=""style="padding-top: 2%;" ></div>
      <div class="col-md-4" ><img src="{{asset('image/indexhwm30pro.png')}}" class="img-fluid" width="90%" alt=""></div>
    </div>
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