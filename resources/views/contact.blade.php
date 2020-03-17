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
              <a class="nav-link" href="{{url('/main')}}">Main <span class="sr-only">(current)</span></a>
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
          <form class="form-inline my-2 my-lg-0">
          <div>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

          </form>
        </div>
    </nav>

      <div class="container-fluid" >
          <div class="row" style="background-color: lightgray;">
              <div class="col-md-6" style="padding-top: 1%">
                  <h1 style="text-align: center" > Contact Us </h1>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Contact Nunber" pattern="[0-9]*"/ aria-label="Username" aria-describedby="basic-addon1" onkeypress="return isNumber(event)" minlength="10" maxlength="11" >
                        </div>
                        <script>
                          function isNumber(event){
                            var keycode=event.keyCode;
                            if(keycode>47 && keycode<59)
                            {
                              return true;
                            }
                            return false;
                          }
                          </script>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01"> REASONS</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                  <option selected value="">Choose...</option>
                                  <option value="1"> Damaged </option>
                                  <option value="2"> Defective </option>
                                  <option value="3"> Wrong Item </option>
                                  <option value="4"> Missing Part </option>
                                  <option value="5"> Change of Mind </option>
                            </select>
                            </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"> MESSAGE </span>
                        </div>
                        <textarea class="form-control" aria-label="Leave Your Message"></textarea>
                        </div>
                        <br>
                        
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin: 1% 0 1% 0;background-image: linear-gradient(#9999ff,#CC99ff,#ff99dd)"> 
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Submit Successfully !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center;background-image: linear-gradient(#9999ff,#CC99ff,#ff99dd)">
        <img src="image/customer service log.png" alt="Avatar" style="width:200px"><br>
        <H5>Thank you for your feedback</H5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              </div>
              
              <div class="col-md-6" >
                    <div style="float: left;width: 100%;padding-top: 1%;height: 100%">
                            <h1 style="text-align: center">Location</h1>
                            <div style="text-align: center;width:100%;margin-bottom: 1%;" >
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.183229483684!2d103.624455!3d1.640389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe27fabf2aa6743dd!2sNSIT%20Academy!5e0!3m2!1sen!2smy!4v1569297015715!5m2!1sen!2smy" width="600" height="440" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
</html>

  

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>