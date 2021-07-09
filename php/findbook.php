<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<!-- priyaihsan_20190140050 -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- my CSS -->
		<link rel="stylesheet" href="../css/style.css" />

		<!-- CDN dataTable -->
		<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<title>FindBook</title>
	</head>
	<body>
		<!-- home -->
		<section id="home">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-1">
								<img src="../icon/books.png" alt="" width="70px" />
							</div>
							<div class="col align-self-center">
								<!-- priyaihsan_20190140050 -->
								<h4 style="color: #424562">Priya Ihsan Amirullah</h4>
								<p>20190140050</p>
							</div>
							<div class="col-2 align-self-center">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBuku" style="color: #fbfbfb; background-color: #367aba">Tambah Data</button>
							</div>
						   <!-- Modal -->
							<div class="modal fade" id="tambahBuku" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<!-- membuat form dengan method post untuk memanggil file store.php -->
										<form method="post" action="../php/create.php" name="form">
										<div class="modal-header">
											<!-- priyaihsan_20190140050 -->
												<h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
										<div class="modal-body">
											<!-- form control -->
											<div class="mb-3">
												<!-- input nama buku -->
												<label for="nama_buku" class="form-label">Nama Buku</label>
												<input type="text" class="form-control" id="nama_buku" placeholder="Masukkan Nama Buku" name="nama_buku" required>
											</div>
											<div class="mb-3">
												<!-- input kategori buku -->
												<label for="kategori_buku" class="form-label">Kategori Buku</label>
												<input type="text" class="form-control" id="kategori_buku" placeholder="Masukkan Kategori Buku" name="kategori_buku" required>
											</div>
											<div class="mb-3">
												<!-- priyaihsan_20190140050 -->
												<!-- input penerbit buku -->
												<label for="penerbit_buku" class="form-label">Penerbit Buku</label>
												<input type="text" class="form-control" id="penerbit_buku" placeholder="Masukkan Penerbit Buku" name="penerbit_buku" required>
											</div>
											<div class="mb-3">
												<!-- input harga -->
												<label for="harga" class="form-label">Harga</label>
												<!-- priyaihsan_20190140050 -->
												<input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" required>
											</div>
											<div class="mb-3">
												<!-- input diskon -->
												<label for="diskon" class="form-label">Diskon</label>
												<!-- priyaihsan_20190140050 -->
												<input type="text" class="form-control" id="diskon" placeholder="Masukkan Diskon" name="diskon" required>
											</div>
											<div class="mb-3">
												<!-- input gambar buku -->
												<label for="gambar_buku" class="form-label">Url Gambar</label>
												<!-- priyaihsan_20190140050 -->
												<input type="text" class="form-control" id="gambar_buku" placeholder="Masukkan Url Gambar Buku" name="gambar_buku" required>
											</div>
											<!-- akhir form control -->
										</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<!-- priyaihsan_20190140050 -->
												<button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- akhir modal -->		     
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- akhir home -->
		<!-- lihat data -->
		<section id="lihatdata">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<p>Selamat datang, Priya Ihsan.</p>
						<!-- view data tabel -->
						<div class="card">
							<div class="card-body">
								<!-- priyaihsan_20190140050 -->
								<table class="table table-striped" id="tabelTokoBuku">
									<thead>
										<tr>
											<th scope="col">No.</th>
											<th scope="col">Nama Buku</th>
											<th scope="col">Kategori Buku</th>
											<!-- priyaihsan_20190140050 -->
											<th scope="col">Penerbit Buku</th>
											<th scope="col">Harga</th>
											<th scope="col">Diskon</th>
											<!-- priyaihsan_20190140050 -->
											<th scope="col">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										//priyaihsan_20190140050
										// memanggil config.php 
										include 'config.php';
										//priyaihsan_20190140050
										// membuat variabel untuk nomor mahasiswa yang akan diincrement
										$no = 1;

										// melakukan query
										$tokobuku = mysqli_query($koneksi,"select * from rakbuku");
										//priyaihsan_20190140050
										// looping data tokobuku
										while($data = mysqli_fetch_array($tokobuku)){
										?>
											<!-- menampilkan data tokobuku ke dalam tabel -->
											<tr>
												<!-- increment nomor baris $no++ -->
												<td><?php echo $no++ ?></td>

												<!-- menampilkan data -->
												<!-- priyaihsan_20190140050 -->
												<td><?php echo $data['nama_buku'] ?></td>
												<td><?php echo $data['kategori_buku'] ?></td>
												<td><?php echo $data['penerbit_buku'] ?></td>
												<td>Rp.<?php echo $data['harga'] ?></td>
												<td><?php echo $data['diskon'] ?>%</td>

												<!-- kolom ini untuk aksi data tokobuku -->
												<!-- priyaihsan_20190140050 -->

												<td>
													<div class="dropdown">
														<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fbfbfb; background-color: #1abb65">
															Pilihan
														</button>
														<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
															<li><a class="dropdown-item" href="./detail.php?id_buku=<?php echo $data['id_buku']; ?>">Detail</a></li>
															<!-- priyaihsan_20190140050 -->
															<li><a class="dropdown-item" href="./edit.php?id_buku=<?php echo $data['id_buku']; ?>">Edit</a></li>
															<!-- priyaihsan_20190140050 -->
															<li><a class="dropdown-item" href="./delete.php?id_buku=<?php echo $data['id_buku']; ?>" onclick="return confirm('anda yakin akan menghapus data mahasiswa ini?')">Hapus</a></li>
														</ul>
													</div>
												</td>
											</tr>			

										<?php
										}
										?>
										
									</tbody>
								</table>
							</div>
						</div>
						<!--akhir view data tabel -->
					</div>
				</div>
			</div>
		</section>
		<!-- priyaihsan_20190140050 -->
		<!-- akhir lihat data -->

		<!-- dataTable js -->
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
		<!-- priyaihsan_20190140050 -->
		<script>
			$(document).ready(function () {
				$('#tabelTokoBuku').DataTable();
			});
			console.log("priya ihsan | 20190140050")
			console.log("priya ihsan | 20190140050")
			console.log("priya ihsan | 20190140050")
			console.log("priya ihsan | 20190140050")

		</script>
		<!-- priyaihsan_20190140050 -->
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
