<html>
<title>Loading Page</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body onload="move()">
    <div class="w3-container w3-center w3-animate-zoom">
        &nbsp; <br>
        &nbsp; <br>


        <img src="{{asset('image/tfc.png')}}" width="500" alt=""><br>
       
    </div>
    &nbsp; <br>
    &nbsp; <br>
 
    <div>
        <div id="MyBar" class="w3-green w3-center w3-padding-large" style="width:20%">0%</div>
        <p><b><h5 style="text-align: center;"> We Are Taking You There . . .</h5></b></p>
    </div>
    <script>
    function move() {
        var elem=document.getElementById("MyBar");
        var width= 20;
        var id = setInterval(frame, 30);
        function frame(){
            if(width>=100){
                clearInterval(id);
                window.location.replace("{{url('successful')}}") //input the html of the page here
            }else{
                width++;
                elem.style.width=width+'%';
                elem.innerHTML=width*1+'%';
            }
        }
    }
    </script>
</body>

</html>