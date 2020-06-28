@extends('layouts.app')

@section('content')
     
        
    <div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <p> This is the ACT's personal page. </p>  

    @if(auth()->user() != NULL)  
        You have already login.
        @else
        <p><a class="btn btn-primary btn-lg" href="/login" role="button"> Login </a> <a class="btn btn-success btn-lg" href="/register" role="button"> Register </a></p>
        @endif
    </div>

    
    
    <div class="slider">
        <div class="w3-content w3-section" style="width: 80%;max-width: 1600px;height: 300px;">
          <img class="mySlides" src="{{asset('css')}}/a.jpg" style="width:100%;height: 100%">
          <img class="mySlides" src="{{asset('css')}}/b.jpg" style="width:100%;height: 100%">
          <img class="mySlides" src="{{asset('css')}}/c.jpg" style="width:100%;height: 100%">
        </div>
        <div class="temizle"></div>
        <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 3000); // Change image every 3 seconds
        }
        </script>
        </div>
        
    @endsection 

