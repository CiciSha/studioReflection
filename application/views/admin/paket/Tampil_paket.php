<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
<span >Data Paket</span>
    </div>
  </div>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th class="col10">No</th>
			<th>Paket</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($paket as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['nama_paket'] ?></td>
				<td><?php echo $value ['foto_paket']; ?></td>
				<td>
					<a href="<?php echo base_url("admin/paket/tampil_detail_paket/$value[id_paket]")?>" class="btn btn-info btn-xs">Detail</a>
					<a href="<?php echo base_url("admin/paket/tampil_edit_paket/$value[id_paket]")?>" class="btn btn-warning btn-xs">Edit</a>
					<a href="" class="btn btn-danger btn-xs">Hapus</a>
				</td>
			</tr>
			
		<?php endforeach ?>
	</tbody>
</table>

<a href="<?php echo base_url("admin/paket/tambah_paket")?>" class="btn btn-primary">Tambah</a>

</div>


