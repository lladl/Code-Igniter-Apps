<div class="container">

  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-info">
          Form Data Mahasiswa
        </div>
        <div class="card-body bg-white">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Write Your Name Here">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="nim">Nim</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Write Your Nim Here">
              <small class="form-text text-danger"><?= form_error('nim'); ?></small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Write Your Email Here">
              <small class="form-text text-danger"><?= form_error('email'); ?></small>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                  <option>Tehnik Informatika</option>
                  <option>Tehnik Mesin</option>
                  <option>Tehnik Elektro</option>
                  <option>Teknik Industri</option>
                  <option>Sistem Informasi</option>
                </select>
              </div>
              <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>