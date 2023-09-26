<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head>
<body>
    <?php foreach($user as $users) :?>
    <div class="d-flex align-items-center bg-dark">
        <div class="card w-75 m-auto p-3 bg-dark text-light">
            <h3 class="text-center p-3">Akun</h3>
            <form action="<?php echo base_url('admin/aksi_ubah_akun')?>" method="post" class="row" enctype="multipart/form-data">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" value="<?php echo $users->email ?>" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3 col-6">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" value="<?php echo $users->username?>" id="username" name="username">
                </div>
                <div class="mb-3 col-6">
                    <label for="password_baru" class="form-label">Password Baru</label>
                    <input type="text" class="form-control" id="password_baru" name="password_baru">
                </div>
                <div class="mb-3 col-6">
                    <label for="konfirmasi_password" class="form-label">Konfirmasi Password Baru</label>
                    <input type="text" class="form-control" id="konfirmasi_password" name="konfirmasi_password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php endforeach?>; 
</body> 
</html>
