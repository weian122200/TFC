@extends('layouts.app')

@section('content')
<script>
    function move() {
        var elem=document.getElementById("MyBar");
        var width= 20;
        var id = setInterval(frame, 30);
        function frame(){
            if(width>=100){
                clearInterval(id);
                window.location.replace("{{url('/main')}}") //input the html of the page here
            }else{
                width++;
                elem.style.width=width+'%';
                elem.innerHTML=width*1+'%';
            }
        }
    }
    </script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div>
        <div id="MyBar" class="w3-green w3-center w3-padding-large" style="width:20%;margin-top:35%">0%</div>
        <p><b><h5 style="text-align: center;color:white"> We Are Taking You There . . .</h5></b></p>
    </div>
@endsection
