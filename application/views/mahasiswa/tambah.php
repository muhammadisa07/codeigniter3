<div class="container">
    <div class="row mt-3">
    <div class="col-md-6">
    <div class="card">
            <div class="card-header">
                Form Tambah Mahasiswa
            </div>
            <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
            <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" >
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                 </div>
                <div class="form-group">
            <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim">
                <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                 </div>
                <div class="form-group">
            <label for="email">E-Mail</label>
                <input type="text" class="form-control" id="email" name="email">
                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                 </div>
                 <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Elektronika">Teknik Elektronika</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
            <option value="Perhotelan">Perhotelan</option>
            <option value="Kebidanan">Kebidanan</option>
            </select>
                 </div>
                 <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    
        </form>
            </div>
            </div>
        
    </div>
    </div>
</div>