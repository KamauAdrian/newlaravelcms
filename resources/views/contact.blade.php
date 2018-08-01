@extends('layouts.master.php')
@section('navbar')
  <nav class="nav navbar-default">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-target="#mynav" data-toggle="collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">BLOG POST</a>
          </div>
          <div class="collapse navbar-collapse" id="mynav">
              <!--            <ul class="nav navbar-nav">-->
              <!--                <li class="active"><a href="#">Home</a></li>-->
              <!--                <li><a href="#">About Blog</a> </li>-->
              <!--                <li><a href="#">Blog</a> </li>-->
              <!--            </ul>-->
              <form method="post" class="navbar-form navbar-right">
                  <div class="form-group">
                      <label for="user_log">Email Address:</label>
                      <input type="text" name="log_name" class="form-control" id="user_log" placeholder="Email Address"/>
                  </div>
                  <div class="form-group">
                      <label for="user_pass">Password :</label>
                      <input type="password" name="log_pass" class="form-control" id="user_pass" placeholder="password"/>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-success" name="log_in" value="Sign-in"/>
                  </div><br />
                  <div class="form-group">

                  </div><br>
                  <div class="form-group">
                      <a href="#">forgot password</a>
                  </div>
              </form>
          </div>
      </div>
  </nav>

@endsection
@section('content')
    <center>
        <h1>Contact page 2</h1>
    </center>

@endsection
@section('footer')
    <h6>page ends here</h6>
@endsection
