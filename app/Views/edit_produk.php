<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Produk</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Form Edit Data Produk</h1>
        <form action="/edit_produk/<?= $product['id_produk']; ?>" method="POST">
            <div class="form-group">
                <label for="id_produk">ID Produk:</label>
                <input type="number" id="id_produk" name="id_produk" class="form-control"
                    value="<?= $product['id_produk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                    value="<?= $product['nama_produk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" class="form-control"
                    value="<?= $product['kategori']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" class="form-control" value="<?= $product['harga']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="Dijual" <?= ($product['status'] == 'Dijual') ? 'selected' : ''; ?>>Dijual</option>
                    <option value="Tidak dapat Dijual" <?= ($product['status'] == 'Tidak dapat Dijual') ? 'selected' : ''; ?>>Tidak dapat Dijual</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>

    <!-- Tautan ke Bootstrap JS (opsional, tergantung kebutuhan Anda) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>