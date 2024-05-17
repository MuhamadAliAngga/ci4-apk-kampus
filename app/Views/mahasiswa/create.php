<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin-top: 50px;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #e0f7fa;
            /* Light blue background */
        }

        .btn-custom {
            background-color: #28a745;
            /* Green button color */
            color: white;
        }

        .btn-custom:hover {
            background-color: #218838;
            /* Darker green on hover */
            color: white;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-6 form-container">
            <h1 class="text-center">Tambah Mahasiswa</h1>
            <form action="<?= base_url('mahasiswa/store') ?>" method="post" class="mt-4">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <select name="jurusan" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Kimia Syariah">Kimia Syariah</option>
                        <option value="Sastra Mesin">Sastra Mesin</option>
                        <option value="Ilmu Alam Ghaib">Ilmu Alam Ghaib</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon:</label>
                    <input type="text" id="telepon" name="telepon" class="form-control">
                </div>

                <button type="submit" class="btn btn-custom btn-block">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>