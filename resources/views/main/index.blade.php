@extends('layouts.master')

@section('content')
<div class="container-bi">
    <div class="container-full container-image">

      <div class="row">
       
        <div class="col-lg-12 text-center view-center">
          
          <h1>Welcome to Smart Compare</h1>
          <p >Your smart shopping guide</p>
          
          <br><br><br>
          
          
          <form class="col-lg-12"  action="search-result">
            <div class="input-group main-button" >
            <input class="form-control input-lg" title="" placeholder="Enter the product you want to price compare. (eg. iphone6, moto g)" type="text" name="search-keyword">
              <span class="input-group-btn"><button type="submit" class="btn btn-lg btn-info" type="button">Search</button></span>
            </div>
          </form>
        </div>
        
      </div> <!-- /row -->
  
  	  <div class="row">
       
        <div class="col-lg-12 text-center v-center" style="font-size:39pt;">
          <a href="#"><i class="icon-google-plus"></i></a> <a href="#"><i class="icon-facebook"></i></a>  <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-github"></i></a> <a href="#"><i class="icon-pinterest"></i></a>
        </div>
      
      </div>
  
  	<br><br><br><br><br>

</div> <!-- /container full -->

<div class="container">
  
  	<hr>
  
  	<div class="row">
    <div class="text-center">
      <h3>We fetch data from below service providers</h3>
    </div>
    <br/>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>eBay.</h3></div>
            <div class="panel-body">eBay Inc. is an American multinational corporation and e-commerce company, providing consumer to consumer & business to consumer sales services via Internet. It is headquartered in San Jose, California.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Best Buy</h3></div>
            <div class="panel-body">Best Buy Co., Inc. is an American multinational consumer electronics corporation headquartered in Richfield, Minnesota, a Minneapolis suburb. It operates in the United States, Mexico, and Canada. 
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Amazon.com</h3></div>
            <div class="panel-body">Amazon.com, Inc. is an American electronic commerce and cloud computing company with headquarters in Seattle, Washington. It is the largest Internet-based retailer in the United States
            </div>
          </div>
        </div>
    </div>
  
	<div class="row">
        <div class="col-lg-12">
        <br><br>
          <p class="pull-right"><a href="#">Built by A2D  </a> Copyright 2015 <sup>TM</sup>  </p>
        <br><br>
        </div>
    </div>
</div>
</div>
@endsection