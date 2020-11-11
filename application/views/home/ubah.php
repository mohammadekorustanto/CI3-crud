<div class="container">
	<div class="row mt-3">
		<div class="col-md-8">
			<div class="card">
			  <div class="card-header">
			    <h4>Tambah Data Mahasiswa</h4>
			  </div>
			  <div class="card-body">
			    <form action="" method="post">
					<div class="form-group row">
						<input type="hidden" class="form-control" id="inputEmail3" name="id" value="<?= $mhs['id'] ?>">
					  <label for="inputEmail3" class="col-sm-5 col-form-label">Nama</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="inputEmail3" name="nama" autofocus="" autocomplete="off" value="<?= $mhs['nama'] ?>">
					    <?= form_error('nama','<small class="text-danger">','</small>') ?>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputEmail3" class="col-sm-5 col-form-label">Tempat Tanggal Lahir</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="inputEmail3" name="ttl" autocomplete="off" value="<?= $mhs['ttl'] ?>">
					    <?= form_error('ttl','<small class="text-danger">','</small>') ?>
					  </div>
					</div>
					<div class="form-group row">
					<label for="inputEmail3" class="col-sm-5 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-7">
					  <select class="form-control" id="inlineFormCustomSelectPref" name="jk">
					    <?php foreach($jk as $j) : ?>
					    	<?php if($j == $mhs['jk']) : ?>
					    		<option value="<?= $j ?>" selected><?= $j ?></option>
					    	<?php else : ?>
					    		<option value="<?= $j ?>"><?= $j ?></option>
					    	<?php endif; ?>
					    <?php endforeach; ?>
					  </select>
					</div>
					</div>
					<div class="form-group row">
					  <label for="inputEmail3" class="col-sm-5 col-form-label">Alamat</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="inputEmail3" name="alamat" autocomplete="off" value="<?= $mhs['alamat'] ?>">
					    <?= form_error('alamat','<small class="text-danger">','</small>') ?>
					  </div>
					</div>
					<div class="form-group row">
					<label for="inputEmail3" class="col-sm-5 col-form-label">Jurusan</label>
					<div class="col-sm-7">
					  <select class="form-control" id="inlineFormCustomSelectPref" name="jurusan">
					    <?php foreach($jurusan as $j) : ?>
					    	<?php if($j == $mhs['jurusan']) : ?>
					    		<option value="<?= $j ?>" selected><?= $j ?></option>
					    	<?php else : ?>
					    		<option value="<?= $j ?>"><?= $j ?></option>
					    	<?php endif; ?>
					    <?php endforeach; ?>
					  </select>
					</div>
					</div>
					<button class="btn btn-primary float-right ml-3">Simpan</button>
					<a href="<?= base_url('home') ?>" class="btn btn-danger float-right">Batal</a>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>