<?php require_once '../Templates/Header.php'; ?>

<?php
require_once '../Public/Departments.php';
$d = new Departments();

if (isset($_POST['submit'])) {
    $dept_id   = (int)$_POST['department_id'];
    $dept_name = $_POST['department_name'];

    $result = $d->create($dept_id, $dept_name);
    if ($result) {
        header('Location: ../Views/Department.php');
        exit;
    } else {
        echo '<p class="container bg-danger text-center text-light p-2">❌ Failed to store data</p>';
    }
}
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white text-center">
          <h4>Add Department</h4>
        </div>
        <div class="card-body bg-light">
          <form action="" method="post">
            <div class="mb-3">
              <label class="form-label">Department ID</label>
              <input type="number" class="form-control" name="department_id" required placeholder="Enter Department ID">
            </div>

            <div class="mb-3">
              <label class="form-label">Department Name</label>
              <input type="text" class="form-control" name="department_name" required placeholder="Enter Department Name">
            </div>

            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn btn-success px-4">Add Department</button>
              <a href="../Views/Department.php" class="btn btn-secondary px-4">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
