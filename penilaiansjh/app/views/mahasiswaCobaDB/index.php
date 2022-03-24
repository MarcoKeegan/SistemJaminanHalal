<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data</button>
            <br></br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">      
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswaCobaDB/detail/<?= $mhs['id'] ?>" class="badge bg-primary">detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswaCobaDB/ubah/<?= $mhs['id'] ?>" class="badge bg-success tampilModalUbah"  data-bs-toggle="modal" data-bs-target="#formModal">update BLM JLN XXX!!!</a>
                        <a href="<?= BASEURL; ?>/mahasiswaCobaDB/hapus/<?= $mhs['id'] ?>" class="badge bg-danger" onclick="return confirm('anda yakin ingin menghapus data tersebut?');">delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>      
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?= BASEURL; ?>/mahasiswaCobaDB/tambah" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>   
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Informatika">Informatika</option>
                        <option value="Mesin">Mesin</option>
                        <option value="Industri">Industri</option>
                        <option value="Informasi">Informasi</option>
                        <option value="Desain">Desain</option>
                    </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>