<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Dashboard</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    <style> 
    .card { 
        background-color: #20B2AA; 
        border: 1px solid #ccc; 
        border-radius: 2px; 
        padding: 10px; 
        margin: 5px; 
        width: 150px; 
        display: inline-block; 
        color: white; 
        margin-left: 0; 
        transition: margin-left 0.5s; 
    } 
 
 
    body { 
        font-family: Arial, sans-serif; 
        margin: 0; 
        padding: 0; 
    } 
 
    .login-button { 
        display: inline-block; 
        padding: 10px 20px; 
        background-color: #008B8B; 
        color: #fff; 
 
        text-decoration: none; 
        text-align: center; 
        font-size: 10px; 
        border: none; 
 
        width: 100px; 
    } 
 
    .navbar { 
        background-color: #333; 
        color: #fff; 
        padding: 10px; 
        position: fixed; 
        top: 0; 
        width: 100%; 
        z-index: 1; 
    } 
 
    /* CSS Untuk Side Navbar (Samping) */ 
    .sidenav { 
        height: 100%; 
        width: 0; 
        position: fixed; 
        z-index: 2; 
        top: 0; 
        left: 0; 
        background-color: #333; 
        overflow-x: hidden; 
        transition: 0.5s; 
        padding-top: 0px; 
    } 
 
    .sidenav a { 
        padding: 5px 10px; 
        text-decoration: none; 
        font-size: 18px; 
        color: #fff; 
        display: block; 
        transition: 0.3s; 
    } 
 
    .sidenav a:hover { 
        background-color: #555; 
    } 
 
    /* CSS Untuk Konten */ 
    .content { 
        margin-left: 0; 
        padding: 20px; 
        transition: margin-left 0.5s; 
    } 
 
    /* CSS Umum */ 
    body { 
        font-family: Arial, sans-serif; 
        margin: 0; 
        padding: 0; 
    } 
 
    /* Tombol untuk membuka side navbar */ 
    .openbtn { 
        background-color: #333; 
        color: #fff; 
        padding: 10px 15px; 
        border: none; 
        cursor: pointer; 
        margin-left: 0; 
        transition: margin-left 0.5s; 
    } 
 
    .openbtn:hover { 
        background-color: #555; 
    } 
 
    .search-container { 
        float: right; 
    } 
 
    .search-box { 
        padding: 2px; 
        border: none; 
        border-radius: 5px; 
    } 
 
    .navbar h1 { 
        margin: 0; 
    } 
 
    .table-container { 
        margin-top: 80px; 
        /* Membuat ruang antara navbar dan tabel */ 
        padding: 20px; 
    } 
    </style> 
</head> 
 
<body> 
 
    <div class="navbar"> 
        <span class="openbtn" onclick="openNav()">&#9776;</span> 
        <h3 class="text-center text-white">Data Siswa</h3> 
        <div class="search-container"> 
            <input type="text" class="search-box" placeholder="Cari..."> 
            <button type="submit">Cari</button> 
        </div> 
    </div> 
 
    <!-- Side Navbar (Samping) --> 
    <div class="sidenav" id="mySidenav"> 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; tutup</a> 
        <a href="<?php echo base_url('admin') ?>">Beranda</a> 
        <a href="<?php echo base_url('admin/siswa') ?>">Siswa</a> 
    </div> 
 
    <!-- Konten --> 
    <!-- Tabel --> 
    <div class="content"> 
        <div class="container table-container"> 
            <table class="table table-striped"> 
 
                <thead> 
                    <tr> 
                    <th class="text-left border border-black">No</th>
                                <th class="text-left border border-black">Foto Siswa</th>
                                <th class="text-left border border-black">Nama Siswa</th>
                                <th class="text-left border border-black">NISN</th>
                                <th class="text-left border border-black">Gender</th>
                                <th class="text-left border border-black">Kelas</th>
                                <th class="text-left border border-black">Aksi</th>

                    </tr> 
                </thead> 
                <tbody> 
                    <?php $no = 0;
                    foreach ($siswa as $row): 
                        $no++ ?> 
        <tr> 
            <td> 
                <?php echo $no ?> 
            </td> 
            <td> 
                <img src="<?php echo base_url('images/siswa/' .$row->foto) ?>" alt="" width='50'>
            </td> 
            <td> 
                <?php echo $row->nama_siswa ?> 
            </td> 
            <td> 
                <?php echo $row->nisn ?> 
            </td> 
            <td> 
                <?php echo $row->gender ?> 
            </td>
            <td> 
                <?php echo tampil_full_kelas_by_id($row->id_kelas) ?> 

            </td> 
            <td class="text-center"> 
                <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa; ?>" class="btn btn-primary btn-sm">Update</a> 
                <button onClick="hapus(<?php echo $row->id_siswa; ?>)" class="btn btn-sm btn-danger">Hapus</button>
        </tr> 
        <?php endforeach ?> 
    </tbody> 
</table> 
</table> 
<button class="btn btn-warning"><a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-sm text-primary">Tambah</a> 
</button> 
<script> 
function hapus(id) { 
    var yes = confirm('Yakin Di Hapus?'); 
    if (yes == true) { 
        window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id; 
    } 
} 
</script> 
</div> 

</div> 
<script> 
function openNav() { 
document.getElementById("mySidenav").style.width = "250px"; 
document.getElementsByClassName("content")[0].style.marginLeft = "250px"; 
} 

function closeNav() { 
document.getElementById("mySidenav").style.width = "0"; 
document.getElementsByClassName("content")[0].style.marginLeft = "0"; 
} 
</script> 
</div> 

</body> 

</html>