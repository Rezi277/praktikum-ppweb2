<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Belanja Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Belanja Online</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Customer</label>
                <input type="text" class="form-control" name="customer" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Produk Pilihan</label>
                <div>
                    <input type="radio" name="produk" value="TV" required> TV
                    <input type="radio" name="produk" value="Kulkas"> Kulkas
                    <input type="radio" name="produk" value="Mesin Cuci"> Mesin Cuci
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Beli</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary" name="proses" value="Simpan">Simpan</button>
        </form>

        <?php
        
        $customer = $produk = $jumlah = $total_harga = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses'])) {
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            
            $harga_produk = [
                "TV" => 3000000,
                "Kulkas" => 4000000,
                "Mesin Cuci" => 3500000
            ];

            
            $total_harga = $harga_produk[$produk] * $jumlah;
        }
        ?>

        <?php if (!empty($customer)) : ?>
            <h3 class="mt-4">Hasil Belanja</h3>
            <table class="table table-bordered">
                <tr><th>Customer</th><td><?php echo htmlspecialchars($customer); ?></td></tr>
                <tr><th>Produk</th><td><?php echo htmlspecialchars($produk); ?></td></tr>
                <tr><th>Jumlah Beli</th><td><?php echo htmlspecialchars($jumlah); ?></td></tr>
                <tr><th>Total Harga</th><td>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></td></tr>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>