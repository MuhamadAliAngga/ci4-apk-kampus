<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
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
            <h1 class="text-center">Tambah Dosen</h1>
            <form action="<?= base_url('dosen/store') ?>" method="post" class="mt-4">
                <div class="form-group">
                    <label for="nidn">NIDN:</label>
                    <input type="text" id="nidn" name="nidn" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama_dosen">Nama:</label>
                    <input type="text" id="nama_dosen" name="nama_dosen" class="form-control">
                </div>

                <div class="form-group">
                    <label for="mata_kuliah">Mata Kuliah:</label>
                    <input type="text" id="mata_kuliah" name="mata_kuliah" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="status_dosen">Status Dosen:</label>
                    <select name="status_dosen" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Hybrid">Hybrid</option>
                        <option value="Asisten Dosen">Asisten Dosen</option>
                    </select>
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