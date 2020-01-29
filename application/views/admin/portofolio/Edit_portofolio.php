
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
<span >Edit Portofolio</span>
    </div>
  </div>
</nav>

<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Foto</label>
		<br>
		<img src="<?php echo base_url("assets/image/portofolio/$portofolio[foto]") ?>" width="250">
		<input type="file" name="foto" class="form-control" >
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" rows="5"><?php echo $portofolio['keterangan']; ?></textarea>
	</div>
	<button class="btn btn-primary">Simpan</button>
	
</form>

</div>




