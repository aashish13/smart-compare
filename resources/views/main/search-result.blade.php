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
        </ul>
      </div>
      <p class="navbar-text navbar-right"><a href="login.html">Sign in</a></p>
  </nav>

</header>
<div class="row clearfix">
  <div class="col-lg-3">
    <div class="widget widget-list well">
        <!-- start filter -->
        <ul id="filters" class="nav nav-list clearfix">
        <li><a href="#" data-filter="*" class="selected"><i class="icon-refresh"></i> All</a></li>
        <li><a href="#" data-filter=".SmartPhone"><i class="icon-check"></i> Smart Phone</a></li>
        <li><a href="#" data-filter=".iphone"><i class="icon-check"></i> Iphone</a></li>
        <li><a href="#" data-filter=".apple"><i class="icon-check"></i> Apple</a></li>
        <li><a href="#" data-filter=".samsung"><i class="icon-check"></i> Samsung</a></li>
        </ul>
        <!-- end filter -->
    </div><!-- widget widget-list well -->
  </div>
  <div class="col-lg-9">
  
  <div  class="row">
    @foreach ($bestbuy as $product)
        <a href='product-details?id={{$product['productId']}}'>
            <div class="item-box iphone">
            <img src="{{$product['image']}}" />
              <p class="text-center"><a href='product-details?id={{$product['productId']}}'>{{$product['name']}}</a></p>
            </div>
        </a
    @endforeach
    
    
  </div>
  
  

<!--  <nav>
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li>...</li>
    <li><a href="#">10</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</nav>-->
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