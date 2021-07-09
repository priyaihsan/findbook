<?php
include './config.php';
$id = $_GET['id_buku'];
$buku = mysqli_query($koneksi, "select * from rakbuku where id_buku='$id'");
while ($data = mysqli_fetch_assoc($buku)){
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- Bootstrap CSS -->
            <!-- priyaihsan_20190140050 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

            <!-- priyaihsan_20190140050 -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $data['nama_buku'] ?></title>
        </head>
        <body onload="window.print();">
            <div class="container mt-5">
                <p class="fw-bold">Detail Pembelian</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Kategori Buku</th>
                            <th scope="col">Penerbit Buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Diskon</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><?php echo $data['id_buku'] ?></td>
                        <td><?php echo $data['nama_buku'] ?></td>
						<td><?php echo $data['kategori_buku'] ?></td>
						<td><?php echo $data['penerbit_buku'] ?></td>
						<td>Rp.<?php echo $data['harga'] ?></td>
						<td><?php echo $data['diskon'] ?>%</td>
                        <?php $total = $data['harga']/$data['diskon'] ?>
                        <td><?php echo $total ?></td>
                    </tbody>
                </table>
                <p class="text-end me-3" style="font-weight: bold;font-size: 16px;">Total : <?php echo $total ?></p>
            </div>
<?php
}
?>
        <!-- priyaihsan_20190140050 -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- priyaihsan_20190140050 -->
        </body>
    </html>