
<div
class="collapse navbar-collapse"
id="navbarSupportedContent"
style="text-align: right !important;">
<span >Edit Detail Paket</span>
</div>
</div>
</nav>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Paket</label>
		<input type="text" name="" readonly="" class="form-control" value="<?php echo $tipe_paket['nama_paket'] ?>">	
	</div>

	<div class="form-group">
		<label>Tipe Paket</label>
		<input type="text" name="nama_tipe_paket" class="form-control" value="<?php echo $tipe_paket['nama_tipe_paket'] ?>">
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga_tipe_paket" class="form-control" placeholder="Example:150000" value="<?php echo $tipe_paket['harga_tipe_paket'] ?>">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi_tipe_paket"><?php echo $tipe_paket['deskripsi_tipe_paket'] ?></textarea>
	</div>

	<div class="form-group">
		<label>Minimal DP</label>
		<input type="number" name="min_dp_tipe_paket" class="form-control" placeholder="Example:150000" value="<?php echo $tipe_paket['min_dp_tipe_paket'] ?>">
	</div>

	<div class="form-group">
		<label>Foto</label>
		<br><br>
		<img src="<?php echo base_url("./assets/image/tipe/$tipe_paket[foto_tipe_paket]") ?>" width="250"> 
		<br><br>
		<input type="file" name="foto_tipe_paket" class="form-control">	
	</div>

	<button class="btn btn-primary">Simpan</button>

</form>

</div> 