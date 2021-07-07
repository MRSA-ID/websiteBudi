<?php 
	include_once('header.inc.php');
	require 'function.php';
	
	$conn = mysqli_connect("localhost", "root", "", "user");

	$user = query("SELECT * FROM data_user");

	
	
 	if(isset($_GET['hal'])){
 		switch ($_GET['hal']) {
 			case 'home':
 				
 					echo"
 					<script>
 						document.location.href = 'index.php';
 					</script>
 					";
 				
 				break;
 			case 'profile':
 				?>
 					<div class="profile_section">
				 		<h2>Halo semua</h2>
				 		<p>Saat ini Saya adalah seorang mahasiswa Indonesia di Universitas Mercubuana 
						kranggan Semester 4 Jurusan Teknik Informatika dan Juga saya bekerja disalah satu Sekolah Swasta Sandikta di Kota Bekasi sebagai TU dan Tim IT, bertepat di jakarta pada saat tanggal 27 oktober tahun 2001 saya 
						pun lahir.</p>
						<p>
							Saya sangat menyukai sekali berenang
						karena selain menyehatkan juga menyenangkan
						apalagi ketika saya berenang dengan teman-teman
						mungkin bisa dibilang saya adalah manusia air
						karena  dalam seminggu saya jadwalkan
						seminggu berenang 5X, apalagi ketika waktu SMK
						dalam seminggu bisa 6X berenang dan terutama
						saat pelajaran olahraga praktek berenang
						sudah pasti saya yang sangat anstusias
						</p>
				 	</div>
 				<?php
 				break;
 			case 'buku_tamu':
 				if (isset($_POST["submit"]) ) {
					if (tambah($_POST) > 0) {
						echo "
							<script>
								alert('data berhasil ditambahkan!');
								document.location.href = 'halaman.php?hal=buku_tamu';
							</script>
						";
					} else{
						echo "
							<script>
								alert('data gagal ditambahkan!');
								document.location.href = 'halaman.php?hal=buku_tamu';
							</script>
						";
					}
				}
 				?>
 				<div id="tamu" class="buku_tamu_section">
			 		<h2>Pesan & Kesan</h2>
			 		<form action="" method="post">
			 			<div class="input">
			 				<label for="nama_input">Nama</label>
			 				<input type="text" id="nama_input" name="nama_input">
			 			</div>
			 			<div class="input">
			 				<label for="email_input">Email</label>
			 				<input type="email" id="email_input" name="email_input">
			 			</div>
			 			<div class="input">
			 				<label for="pesan">Pesan</label>
			 				<textarea id="pesan" rows="5" cols="40" name="pesan"></textarea>
			 			</div>
			 			<div class="input_inline"> 				
			 				<button type="submit" id="submitPesan" name="submit">Submit</button>
			 			</div>
			 		</form>
			 	</div>
			 	<div class="hasil">
			 		<table>
			 			<tr>
			 				<th>no</th>
			 				<th>nama</th>
			 				<th>Email</th>
			 				<th>Pesan</th>
			 				<th>tgl</th>
			 			</tr>
			 			<?php $i = 1; ?>
			 			<?php foreach ($user as $row):?>
			 			<tr>
			 				<td><?= $i ?></td>
			 				<td><?= $row["nama"] ?></td>
			 				<td><?= $row["email"] ?></td>
			 				<td><?= $row["pesan"] ?></td>
			 				<td><?= $row["tgl"] ?></td>
			 			</tr>
			 			<?php $i++; ?>
			 			<?php endforeach; ?>
			 		</table>
			 	</div>
 				<?php
 				break;
 			case 'kontak':
 			if (isset($_POST["submit"]) ) {
				if (tambah($_POST) > 0) {
					echo "
						<script>
							alert('data berhasil ditambahkan!');
							document.location.href = 'halaman.php?hal=kontak';
						</script>
					";
				} else{
					echo "
						<script>
							alert('data gagal ditambahkan!');
							document.location.href = 'halaman.php?hal=kontak';
						</script>
					";
				}
			}
 				?>
 				<div class="buku_tamu_section">
			 		<h2>UAS pemrograman</h2>
			 		<form action="" method="post">
			 			<div class="input">
			 				<label for="nama_input">Nama</label>
			 				<input type="text" id="nama_input" name="nama_input">
			 			</div>
			 			<div class="input">
			 				<label for="email_input">Email</label>
			 				<input type="email" id="email_input" name="email_input">
			 			</div>
			 			<div class="input">
			 				<select name="perihal">
			 					<option >--Perihal--</option>
			 					<option value="keluhan" name="perihal" id="perihal">Keluhan</option>
			 					<option value="project" name="perihal" id="perihal">Project</option>
			 				</select>
			 			</div>
			 			<div class="input">
			 				<label for="pesan">Pesan</label>
			 				<textarea id="pesan" rows="5" cols="40" name="pesan"></textarea>
			 			</div>
			 			<div class="input">
			 				<label for="tgl">Tanggal</label>
			 				<input type="date" id="tgl" name="tgl">
			 			</div>
			 			<div class="input_inline"> 				
			 				<button type="submit" id="submitPesan" name="submit">Submit</button>
			 			</div>
			 		</form>
			 	</div>
 				<?php
 				break;
 		}
 	}
 	

include_once('footer.inc.php');

?>