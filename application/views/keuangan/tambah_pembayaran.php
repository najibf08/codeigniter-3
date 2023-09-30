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
    <form action="<?php echo base_url(
    'keuangan/aksi_tambah_pembayaran'
); ?>" enctype="multipart/form-data" method="post" class="w-full max-w-lg" style="margin-left: 500px;">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Siswa</label>
                <select name="nama" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Siswa</option>
                    <?php foreach ($siswa as $row): ?>
                    <option value="<?php echo $row->id_siswa; ?>">
                        <?php echo $row->nama_siswa; ?>
                    </option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class=" tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Total Pembayaran
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="text" name="total_pembayaran">
            </div>
            <label for="countries" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Pembayaran</label>
            <select id="countries" name="jenis_pembayaran"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Jenis Pembayaran</option>
                <option value="Pembayaran SPP">Pembayaran SPP</option>
                <option value="Pembayaran Uang Gedung">Pembayaran Uang Gedung</option>
                <option value="Pembayaran Seragam">Pembayaran Seragam</option>
            </select>
            <div class="w-full mt-5 px-3">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>