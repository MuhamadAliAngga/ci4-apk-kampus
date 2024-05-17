<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Tambahkan warna kuning muda pada latar belakang */
            background-color: #ffffcc;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: calc(100% - 22px);
            /* Sesuaikan dengan lebar border */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: auto;
            /* Rata kanan */
            margin-left: auto;
            /* Rata kiri */
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
        }

        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Data Dosen</h1>
        <?php if (session()->has('errors')) : ?>
            <div class="message error">
                <?php foreach (session('errors') as $error) : ?>
                    <?= $error ?><br>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php if (session()->has('success')) : ?>
            <div class="message success">
                <?= session('success') ?>
            </div>
        <?php endif ?>

        <?php if (session()->has('error')) : ?>
            <div class="message error">
                <?= session('error') ?>
            </div>
        <?php endif ?>

        <form action="<?= base_url('dosen/update/' . $dosen['id_dosen']) ?>" method="post">
            <!-- Menambahkan ID dosen ke URL -->
            <label for="nidn">NIDN:</label>
            <input type="text" id="nidn" name="nidn" value="<?= $dosen['nidn'] ?>">
            <label for="nama_dosen">Nama:</label>
            <input type="text" id="nama_dosen" name="nama_dosen" value="<?= $dosen['nama_dosen'] ?>">
            <label for="mata_kuliah">Mata Kuliah:</label>
            <input type="text" id="mata_kuliah" name="mata_kuliah" value="<?= $dosen['mata_kuliah'] ?>">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $dosen['email'] ?>"><br><br>
            <label for="status_dosen">status dosen:</label>
            <select name="status_dosen">
                <option value="">--pilih--</option>
                <option value="Tetap">Tetap</option>
                <option value="Hybrid">Hybrid</option>
                <option value="Asisten Dosen">Asisten Dosen</option>
            </select>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>