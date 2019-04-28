<div class="container">

  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-info">
          Form Ubah Data Mahasiswa
        </div>
        <div class="card-body bg-white">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
            <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Write Your Name Here" value="<?= $mhs['nama']; ?>">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="nim">Nim</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Write Your Nim Here" value="<?= $mhs['nim']; ?>">
              <small class="form-text text-danger"><?= form_error('nim'); ?></small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Write Your Email Here" value="<?= $mhs['email']; ?>">
              <small class="form-text text-danger"><?= form_error('email'); ?></small>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                  <?php foreach ($jurusan as $j) : ?>
                    <?php if ($j == $mhs['jurusan']) : ?>
                      <option value="<?= $j; ?>" selected><?= $j; ?></option>
                    <?php else : ?>
                      <option value="<?= $j; ?>"><?= $j; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
              <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
              <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>