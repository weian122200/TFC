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
  <body style="overflow-x: hidden">
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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div style="margin: 1% 1% 1% 1%;" class=" w3-animate-zoom">
       
        <style>
                ol.progtrckr {
                    margin: 0;
                    padding: 0;
                    list-style-type:none;
                }
                
                ol.progtrckr li {
                    display: inline-block;
                    text-align: center;
                    line-height: 3.5em;
                }
                
                ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
                ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
                ol.progtrckr[data-progtrckr-steps="4"] li { width: 25%; }
                ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
                ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
                ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
                ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
                ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }
                
                ol.progtrckr li.progtrckr-done {
                    color: black;
                    border-bottom: 4px solid yellowgreen;
                }
                ol.progtrckr li.progtrckr-todo {
                    color: silver; 
                    border-bottom: 4px solid silver;
                }
                
                ol.progtrckr li:after {
                    content: "\00a0\00a0";
                }
                ol.progtrckr li:before {
                    position: relative;
                    bottom: -2.5em;
                    float: left;
                    left: 50%;
                    line-height: 1em;
                }
                ol.progtrckr li.progtrckr-done:before {
                    content: "\2713";
                    color: white;
                    background-color: yellowgreen;
                    height: 2.2em;
                    width: 2.2em;
                    line-height: 2.2em;
                    border: none;
                    border-radius: 2.2em;
                }
                ol.progtrckr li.progtrckr-todo:before {
                    content: "\039F";
                    color: silver;
                    background-color: white;
                    font-size: 2.2em;
                    bottom: -1.2em;
                }
                
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
                
                </style>
                
                <ol class="progtrckr" data-progtrckr-steps="4">
                    <li class="progtrckr-done"><b>Checkout Product</b></li><!--
                 --><li class="progtrckr-done"> <b>Payment Pending </b></li><!--
                 --><li class="progtrckr-done"> <b>Shipped </b></li><!--
                 --><li class="progtrckr-todo">Delivered</li>
                </ol>  
</div>
<div class="row" style="margin-top: 2%;">
<div class="col-md-2"></div>
<div class="col-md-7" style="margin-left: 2%;">
    <div class=" w3-animate-zoom" >
        <div style="text-align: center;">  
            <br>
         <img src="{{asset('image/deliver.png')}}" width="50%"> <br>
         <h5><b> 
                Thank you for your purchasing.
                Your parcel tracking code is TFC 09090531 </b> </h5> <br>
        </div>
        
                <div class="rate" style="padding-left: 40%; margin-bottom: 10%;">
                        <b> &nbsp; &nbsp;  Rate For Us</b>  <br>
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                        <br>
                      </div>
                              
        </div>
        </div>
</div>
</div>
</body>

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</html>