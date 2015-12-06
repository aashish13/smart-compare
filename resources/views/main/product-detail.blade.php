@extends('layouts.master')

@section('content')
    
<div class="container" style="margin:auto;">
<header>
  <nav class="navbar navbar-default">
    
      <a class="navbar-brand" href="index.html">Smart Compare</a>
    
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li > <a href="index.html">Home</a> </li>
          <li > <a href="index.html">About</a> </li>
          <li > <a href="index.html">Contact</a> </li>
          <li > <a href="admin.html">Admin(shown if logged in as Admin)</a> </li>
        </ul>
      </div>
      <p class="navbar-text navbar-right">Logged in as - <a href="#">Aashish Singh</a></p>
  </nav>

</header>

<div class="row" style="height:30px"></div>
<div class="row clearfix">
  <div class="col-lg-3" style="border:0px solid red">
  
  <strong>  Product Description  </strong>

  <p>{!!$product['longDescription']!!}<p>
  
    
  </div>

  <div class="col-lg-6" style="border:0px solid black">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{$product['largeFrontImage']}}" alt="" width="460" height="345">
      </div>

      <div class="item">
        <img src="{{$product['largeImage']}}" alt="" width="460" height="345">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-menu-left" ></span>
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-menu-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div style="border:0px solid red">
    <br/>
    <div class="form-group">
      <label for="comment">Review:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
      <input  type="button" value="submit" / >
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        Dummy Review 1
      </div>
      <div class="panel-body">
        Dummy Review 2
      </div>
      <div class="panel-body">
        Dummy Review 3
      </div>
    </div>
  </div>
  </div>


  <div class="col-lg-3" style="border:0px solid black">
    <div class="row">
        <img src="images/bestbuy.jpg" style="width:50px;height:50px;float:left"> <p class="text-right"><a target="_blank" href="{{$product['addToCartUrl']}}">CAD {{$product['salePrice']}}</a></p>
    </div>
    <div class="row">
      <img src="images/amazon.png" style="width:50px;height:50px;float:left"> <p class="text-right"><a href="http://www.amazon.ca">CAD 224</a></p>
    </div>
    <div class="row">
      <img src="images/ebay.jpg" style="width:50px;height:50px;float:left"> <p class="text-right"><a href="http://www.ebay.ca">CAD 224</a></p>
    </div>

  </div>
</div>

<footer class="footer">
  <div class="text-right">
   Built by A2D - 
   Copyright 2015
  </div>
  
</footer>
 
</div>
@endsection