<div class="contain mt-3 ">
    <div class="row ">
        <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn     btn-sm " data-bs-toggle="modal" data-bs-target="#formModal">
        Tambahkan data Mahasiswa 
        </button>
        <br><br>
        <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <li class="list-group-item active">Nama</li>
            <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs["nama"]?>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill bg-success ">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

    <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulmodal">Tambah data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL;  ?>/mahasiswa/tambah" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">Nrp</label>
                    <input type="number" class="form-control" id="nrp" name="nrp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select id="jurusan" class="form-select" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>
