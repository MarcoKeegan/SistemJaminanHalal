<div class="container">
    <div class="title">Detail Usaha</div><br>
    <form action="" method="POST">
        <div class="user-details">
            <div class="mb-3">
                <label for="form" class="form-label">ID</label>
                <input type="number" class="form-control" id="form" aria-describedby="emailHelp" placeholder="Masukkan ID">
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Nama Usaha</label>
                <input type="text" class="form-control" id="form" aria-describedby="emailHelp" placeholder="Masukkan Nama Usaha">
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Alamat Usaha</label>
                <textarea class="form-control" placeholder="Masukkan Alamat Usaha" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Bidang Usaha</label>
                <input type="text" class="form-control" id="form" aria-describedby="emailHelp" placeholder="Masukkan Bidang Usaha">
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Nama Pengisi</label>
                <input type="text" class="form-control" id="form" aria-describedby="emailHelp" placeholder="Masukkan Nama Pengisi">
            </div>
            <div class="mb-3"> 
                <span class="gender-title">Jenis Kelamin</span>
                <div class="category">
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Laki-laki</span>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Perempuan</span>
                    </label>
                </div>
            </div>
            <div class="col-auto">
                <label for="inputState" class="form-label">Jabatan</label>
                <select id="inputState" class="form-select">
                <option>Pemilik usaha</option>
                <option>Karyawan tetap</option>
                <option>Bukan pemilik usaha atau karyawan tetap</option>
                </select>
            </div><br>
            <div class="mb-3"> 
                <div class="tgl">
                    <span class="details">Tanggal Pengisian</span><br>
                    <input type="date">
                </div>
            </div>
            <div class="d-grid gap-2">  
                <a class="btn btn-primary" href="#" role="button">Back</a>
                <a class="btn btn-primary" href="<?= BASEURL; ?>/pertanyaan1" role="button">Save</a>
            </div>
        </div>
    </form>
</div>
