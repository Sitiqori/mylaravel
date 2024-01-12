<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
     <style>
          body{
               
          }
          .main{
               height: 100vh;
               box-sizing: border-box;
     
          }
          .login-box{
               width:500px;
               padding: 20px;
               border-radius: 10px;
               background-color:white;
       
          }
          .judul{
               text-align: center;
          }
     </style>
     <body>
      <div class="main d-flex flex-column justify-content-center align-items-center bg-secondary p-2 text-black bg-opacity-75">
          @if (session('status'))
               <div class="alert alert-danger">
                    {{session('message')}}
               </div>
          @endif
          <div class="login-box ">
                    <form class="" method="POST">
                    @csrf
                    
                         <div class="judul ">
                              <h2 class="">Login</h2>
                              <p class="text-black-50">Login with your account</p>
                         </div>
                         <div class="mb-3">
                         <label for="username" class="form-label">Username</label>
                         <input type="text" class="form-control " name="username" id="username" required>
                         </div>
                         <div class="mb-3">
                         <label for="password" class="form-label">Password</label>
                         <input type="password" class="form-control" name="password" id="password" required>
                         </div>
                         <button type="submit" class="btn btn-secondary form-control">Login</button>
                    </form>
          </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>