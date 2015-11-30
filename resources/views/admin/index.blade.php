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
      <p class="navbar-text navbar-right">Signed in as <a href="login.html">Admin</a></p>
  </nav>

</header>


<div class="row clearfix">
  <div class="col-lg-3">
    <div class="widget widget-list well">
        <a href="#" data-filter="*" class="selected"><i class="icon-refresh"></i> Users</a><br/><br/>
        <a href="#" data-filter="*" class="selected"><i class="icon-refresh"></i> Reviews</a>
        
    </div>
  </div>

  <div class="col-lg-9">

    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Facebook</th>
        <th>Gooogle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>john@example.com</td>
        <td>connected</td>
        <td>connected</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>mary@example.com</td>
        <td>connected</td>
        <td>connected</td>
      </tr>
      <tr>
        <td>July</td>
        <td>july@example.com</td>
        <td>connected</td>
        <td>connected</td>
      </tr>
    </tbody>
  </table>
  </div>
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