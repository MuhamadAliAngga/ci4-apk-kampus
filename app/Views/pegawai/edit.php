<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
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
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: auto;
            margin-left: auto;
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
        <h1>Edit Data Pegawai</h1>
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

        <form action="<?= base_url('pegawai/update/' . $pegawai['id_pegawai']) ?>" method="post">
            <!-- Menambahkan ID pegawai ke URL -->
            <label for="nip">NIP:</label>
            <input type="text" id="nip" name="nip" value="<?= $pegawai['nip'] ?>">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= $pegawai['nama'] ?>">

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="">-- Pilih --</option>
                <option value="Laki-laki" <?= $pegawai['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="Perempuan" <?= $pegawai['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>

            <label for="departement">Departemen:</label>
            <input type="text" id="departement" name="departement" value="<?= $pegawai['departement'] ?>">

            <label for="jabatan">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" value="<?= $pegawai['jabatan'] ?>">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $pegawai['email'] ?>">

            <label for="telephone">Telephone:</label>
            <input type="text" id="telephone" name="telephone" value="<?= $pegawai['telephone'] ?>">

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>