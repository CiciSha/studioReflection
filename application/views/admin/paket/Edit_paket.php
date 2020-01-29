
<div class="collapse navbar-collapse"
id="navbarSupportedContent" 
style="text-align: right !important;">
<span >Edit Paket</span>
    </div>
  </div>
</nav>
<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Paket</label>
		<input type="text" name="nama_paket" required="" class="form-control" value="<?php echo $paket['nama_paket'] ?>"> 
	</div>
	<div class="form-group">
		<label>Foto</label>
		<br>
		<img src="<?php echo base_url("assets/image/paket/$paket[foto_paket]") ?>" width="250"> 
		<input type="file" name="foto_paket" class="form-control"> 
	</div>
	<button class="btn btn-primary">Simpan</button>
	
</form>

</div>




