<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Tambah Pasien
                        <a href="<?= base_url('patients') ?>" class="btn btn-danger btn-sm float-end">
                            Kembali
                        </a>
                    </h5>
                    <div class="card-body">
                        <form action="<?=base_url('patients/add') ?>" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="form-label">No Hp</label>
                                <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Masukkan No Hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="pendaftaran" class="form-label">Pendaftaran</label>
                                <input type="text" name="pendaftaran" class="form-control" id="pendaftaran" placeholder="Masukkan Tipe Pendaftaran" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipe_pasien" class="form-label">Tipe Pasien</label>
                                <input type="text" name="tipe_pasien" class="form-control" id="tipe_pasien" placeholder="Masukkan Tipe Pasien" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kunjungan" class="form-label">Jenis Kunjungan</label>
                                <input type="text" name="jenis_kunjungan" class="form-control" id="jenis_kunjungan" placeholder="Masukkan Jenis Kunjungan" required>
                            </div>
                            <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Agree with the term</label>
                            </div> -->
                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>