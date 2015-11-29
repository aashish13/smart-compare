@extends('layouts.master')

@section('content')

<div class="container-full container-image">
      <div class="row">
        <div class="col-lg-12 text-center ">
          <h1>Signup</h1>
          <form class="col-lg-12" action="product-detail.html">
            <div class="input-group main-button" >
            <input class="form-control input-lg" title="" placeholder="Name" type="text">
            <p></p>
            <input class="form-control input-lg" title="" placeholder="Email" type="email">
            <p></p>
            <input class="form-control input-lg" title="" placeholder="Password" type="password">
            <p></p>
            <input class="form-control input-lg" title="" placeholder="Retype Password" type="password">
            <p></p>
            
              <button type="submit" class="btn btn-default btn-block">Signup</button>
              <button type="submit" class="btn btn-primary btn-block">Facebook</button>
              <button type="submit" class="btn btn-danger btn-block">Google</button>
            </div>
          </form>
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
	
@endsection