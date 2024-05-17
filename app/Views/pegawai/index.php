<?= $this->extend('tampilan') ?>
<?= $this->section('isi_content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-container {
            margin-bottom: 20px;
            text-align: right;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #218838;
            color: white;
        }

        .panel {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: black;
            color: white;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .panel-body {
            padding: 15px;
        }

        .table thead {
            background-color: #f8f9fa;
            color: black;
            font-weight: bold;
        }

        .btn-danger {
            color: white;
            background-color: #dc3545;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: white;
        }

        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="btn-container">
            <a href="<?= base_url('pegawai/create') ?>" class="btn btn-custom">+ Tambah Pegawai</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span style="font-weight: bold; color: white;">Tabel Pegawai</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Departemen</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pegawai as $item) : ?>
                                        <tr>
                                            <td><?= $item['nip'] ?></td>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['jenis_kelamin'] ?></td>
                                            <td><?= $item['departement'] ?></td>
                                            <td><?= $item['jabatan'] ?></td>
                                            <td><?= $item['email'] ?></td>
                                            <td><?= $item['telephone'] ?></td>
                                            <td>
                                                <a href="<?= base_url('pegawai/view/' . $item['id_pegawai']) ?>" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="<?= base_url('pegawai/edit/' . $item['id_pegawai']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('pegawai/delete/' . $item['id_pegawai']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?= $this->endSection() ?>