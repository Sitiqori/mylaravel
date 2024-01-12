<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Dashboard | Admin @yield('title')</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
     body{

     }
     .main{
          height: 100vh;
     }
     .body-content{
          height: 100vh;
     }
     .sidebar{
          color:white;
     }
     .sidebar a{
          color: white;
          text-decoration: none;
          display:block;
          padding: 15px;
          margin-left: 10px;

     }
     .sidebar a:hover{
          background: rgb(73, 73, 73);
     }
     .content{

     }
</style>
<body>
     <div class="main d-flex flex-column justyfy-content-between">
          <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="container-fluid">
                    <a class="navbar-brand m-2" href="#">Data Pegawai</a>
               </div>
               
          </nav>
          <div class="body-content h-100">
               <div class="row g-0 h-100">
                    <div class="sidebar col-lg-2 bg-secondary collapse d-lg-block" id="navbarTogglerDemo03">
                              @if (Auth::user()->role_id == 1)
                                   <a href="dashboard">Dashboard</a>
                                   <a href="data pegawai">Data Pegawai</a>
                                   <a href="logout">Logout</a>
                              @else
                                   <a href="dashboard">Dashboard</a>
                                   <a href="profile">Profile</a>
                                   <a href="logout">Logout</a>
                              @endif
                    </div>
                    <div class="content col-lg-10 p-3">
                         @yield('content')
                    </div>
               </div>
          </div>
     </div>






     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>