<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<main class="flex-1 overflow-x-hidden overflow-y-auto ">
            <div class="container mx-auto px-6 py-8">
                <!-- Table -->
                <div class="bg-white p-6 rounded-lg" style="margin-left: 300px;">
                  <a href="<?php echo base_url(
                      'keuangan/tambah_pembayaran'
                  ); ?>"  class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded">
                  <i class="fa-solid fa-plus"></i>
                  </a>
                    <table class="min-w-full mt-3">
                        <thead>
                            <tr>
                                <th class="text-left border border-black">No</th>
                                <th class="text-left border border-black">Nama Siswa</th>
                                <th class="text-left border border-black">Jenis Pembayaran</th>
                                <th class="text-left border border-black">Total Pembayaran</th>
                                <th class="text-left border border-black">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 0;
                          foreach ($pembayaran as $row):
                              $no++; ?>
                            <tr>
                            <td class="border border-black"><?php echo $no; ?></td>
                            <td class="border border-black"><?php echo nama_siswa(
                                $row->id_siswa
                            ); ?></td>
                                <td class="border border-black"><?php echo $row->jenis_pembayaran; ?></td>
                                <td class="border border-black"><?php echo convRupiah($row->total_pembayaran); ?></td>
                                <td class="text-center border border-black">
                                  <button onclick="hapus(<?php echo $row->id_siswa; ?>)"
                                   class="bg-red-700   hover:bg-red-900   text-white font-bold py-2 px-4 rounded">
                                  <i class="fa-solid fa-trash"></i> 
                                  </button>
                                  <a href="<?php echo base_url(
                                      'Keuangan/ubah_pembayaran/'
                                  ) .
                                      $row->id; ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                  <i class="fa-solid fa-pen-to-square"></i>
                                  </a>
                                </td>
                            </tr>
                            <?php
                          endforeach;
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <script>
        function hapus(id) {
        var yes = confirm('Yakin Dex?');
        if (yes == true) {
        window.location.href = "<?php echo base_url(
            'keuangan/hapus_pembayaran/'
        ); ?>" + id;
    }
  }
        </script>
</body>

</html>