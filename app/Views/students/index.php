<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Alert -->
        <?php
        if (session()->getFlashdata('status')) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy!</strong> <?= session()->getFlashdata('status') ?>
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
                            List of students
                        </strong>
                        <a href="<?= base_url('students/create') ?>" class="btn btn-success btn-sm float-end">
                            Add
                        </a>
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Course</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($students) : ?>
                            <?php foreach ($students as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td>
                                        <a href="<?= base_url('students/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <a href="<?= base_url('students/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">
                                            Delete
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