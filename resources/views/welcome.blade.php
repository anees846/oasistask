<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            {{-- <p>Login or register from here to access.</p> --}}
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <img width="100px" src="{{ asset('img/delivery-truck.png') }}">
               <form>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <br>
                  Dont have any account &nbsp;<a href="{{url('/register')}}">Register</a>
                  {{-- <a href="{{url('/register')}}">Register</a> --}}
               </form>
            </div>
         </div>
      </div>


      <style>
        body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;

}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 20px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%;
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
        </style>
