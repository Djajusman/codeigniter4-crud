<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Alert -->
        <?php
        if (session()->getFlashdata('status')) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Congrats!</strong> <?= session()->getFlashdata('status') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <div class="card">
            <div class="card-body bg-white">
                <table class="table caption-top">
                    <caption>
                        <strong>
                            Daftar Pasien
                        </strong>
                        <a href="<?= base_url('patients/create') ?>" class="btn btn-success btn-sm float-end">
                            Tambah
                        </a>
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Tipe Pasien</th>
                            <th scope="col">Jenis Kunjungan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($patients) : ?>
                            <?php foreach ($patients as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['nohp']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['pendaftaran']; ?></td>
                                    <td><?php echo $row['tipe_pasien']; ?></td>
                                    <td><?php echo $row['jenis_kunjungan']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td>
                                        <a href="<?= base_url('patients/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm">
                                            Ubah
                                        </a>
                                        <a href="<?= base_url('patients/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>