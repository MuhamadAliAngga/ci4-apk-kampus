<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
            background-color: #ffffcc;
            /* Light yellow background */
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
            /* Adjust width for border */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: auto;
            /* Align right */
            margin-left: auto;
            /* Align left */
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
        <h1>Edit Data Mahasiswa</h1>
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

        <form action="<?= base_url('mahasiswa/update/' . $mahasiswa['id_mahasiswa']) ?>" method="post">
            <!-- Menambahkan ID mahasiswa ke URL -->
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
            <label for="jurusan">Jurusan:</label>
            <select name="jurusan" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="Kimia Syariah">Kimia Syariah</option>
                <option value="Sastra Mesin">Sastra Mesin</option>
                <option value="Ilmu Alam Ghaib">Ilmu Alam Ghaib</option>
            </select>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" value="<?= $mahasiswa['telepon'] ?>">
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>