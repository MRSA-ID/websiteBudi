<?php 
	include_once('header.inc.php');
	require 'function.php';
	
	
 	if(isset($_GET['hal'])){
 		switch ($_GET['hal']) {
 			case 'home':
 				?>
 					<p>SELAMAT DATANG BAPAK DAN IBU</p>
 				<?php
 				break;
 			case 'profile':
 				?>
 					<div class="profile_section">
				 		<h2>Halo semua</h2>
				 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				 		quis nostrud consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				 	</div>
 				<?php
 				break;
 			case 'buku_tamu':
 				$conn = mysqli_connect("localhost", "root", "", "user");

					$user = query("SELECT * FROM data_user");

					
					if (isset($_POST["submit"]) ) {
						if (tambah($_POST) > 0) {
							echo "data berhasil ditambahkan!";
						} else{
							echo "data gagal ditambahkan!";
						}
					}
 				?>
 				<div class="buku_tamu_section">
			 		<h2>Pesan & Kesan</h2>
			 		<form action="" method="_POST">
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
			 			<?php $i++ ?>
			 			<?php endforeach; ?>
			 		</table>
			 	</div>
 				<?php
 				break;
 			case 'kontak':
 				?>
 				<div class="profile_section">
			 		<table></table>
			 	</div>
 				<?php
 				break;
 		}
 	}
 	

include_once('footer.inc.php');

 ?>