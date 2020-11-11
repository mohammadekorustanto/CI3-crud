<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
          <?= $this->session->flashdata('pesan') ?>
            <a href="<?= base_url('home/tambah') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col md-6">
            <table class="table">
              <thead class="text-center">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <?php
              $no=1;
              foreach($mhs as $m) : ?>
              <tbody>
                <tr>
                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $m['nama'] ?></td>
                  <td><?= $m['ttl'] ?></td>
                  <td><?= $m['jk'] ?></td>
                  <td><?= $m['alamat'] ?></td>
                  <td><?= $m['jurusan'] ?></td>
                  <td>
                    <a href="<?= base_url('home/ubah/') ?><?= $m['id'] ?>" class="btn btn-danger">Ubah</a>
                    <a href="<?= base_url('home/hapus/') ?><?= $m['id'] ?>" onclick="return confirm('Anda yakin dihapus')" class="btn btn-dark">Hapus</a>
                  </td>
                </tr>
              </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>