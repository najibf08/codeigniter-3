<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body {
        background-image: url('https://down-id.img.susercontent.com/file/f9658399071713a391c74123d0ae3d3c');
    }
</style>
</head>
<body>
<div class="container py-5 "> 
<div class="card w-50 justify-content-center mx-auto bg-light   "> 
<div class="header"> 
<div class="jumbotron text-center">
         <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="image" height="200px" width="250px" >
        </div>
        <div style="text-align: center;">
        <h1>SMK Bina Nusantara</h1>
        </div>
    <h2 class="text-center pt-3 text-primary">LOGIN </h2> 
</div> 
   
<form action="<?php echo base_url(); ?>Auth/aksi_login" method="post" class="space-y-12"> 
    <div class="card-body"> 
    <div class="mb-3"> 
    <label for="exampleInputEmail1" class="form-label">Email </label> 
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"> 
  </div> 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Password</label> 
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"> 
    </div> 
  </div> 
 <div class="text-center pb-3"> 
 <button type="submit" class="btn btn-primary">LOGIN</button> 
 </div> 
 <br>  
          <p class="text-center"> belum punya akun? <a href="./auth">register akun</a></p> 
        <br>  
        </form> 
        </div> 
        </div>
</body>
</html>
