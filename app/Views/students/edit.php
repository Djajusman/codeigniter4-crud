<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Edit Students
                        <a href="<?= base_url('students') ?>" class="btn btn-danger btn-sm float-end">
                            Back
                        </a>
                    </h5>
                    <div class="card-body">
                        <form action="<?= base_url('students/update/' . $students['id']) ?>" method="POST">
                            <input type="hidden" name="_method" value="PUT" />
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" value="<?= $students['name']; ?>" class="form-control" id="name" placeholder="Enter Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" name="email" value="<?= $students['email']; ?>" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" value="<?= $students['phone']; ?>" class="form-control" id="phone" placeholder="Enter Phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="course" class="form-label">Course</label>
                                <input type="text" name="course" value="<?= $students['course']; ?>" class="form-control" id="course" placeholder="Enter Course" required>
                            </div>
                            <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Agree with the term</label>
                            </div> -->
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>