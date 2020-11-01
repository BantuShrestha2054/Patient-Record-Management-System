<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('resources/js/jquery-3.3.1.slim.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/bootstrap.bundle.min.js')}}"></script>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/a.css')}}">

  
</head>
<body style="background-image: url('{{ asset('/images/a.jpg')}}');  background-repeat: none; background-size: cover; height:100%;  width: 100%;">

<div class="container">
    <div class="d-flex justify-content-center h-120">
        <div class="card">
            <div class="card-header">
                <h2>Admin Login</h2>
            </div>

                <div class="card-body"">
                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <label for="email" class="control-label">Email</label>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} input-group">


                            
                            
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                 </div>
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                        <label for="password" class="control-label">Password</label>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} input-group">
                            
                           

                                <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-key"></i></span>
                                 </div>
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    
                        </div>

                        <div class="form-group">
                            
                                <div class="remember">
                                    
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    
                                </div>
                        
                        </div>
                
                    

                     <div class="form-group">
                        
                                <button type="submit" class="btn btn-warning control-label login_btn">
                                    Login
                                </button>
                         
                        </div>  
               </form>  
               </div> 
                       
                
                    
        
        </div>
    </div>
</div>
</body>
</html>
