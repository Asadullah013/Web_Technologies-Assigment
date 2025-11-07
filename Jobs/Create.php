<?php require_once '../Templates/Header.php'; ?>

<?php
require_once '../Public/Jobs.php';
$j = new Jobs();

if (isset($_POST['submit'])) {
    $job_id     = $_POST['job_id'];
    $job_title  = $_POST['job_title'];
    $min_salary = (int)$_POST['min_salary'];
    $max_salary = (int)$_POST['max_salary'];

    $result = $j->create($job_id, $job_title, $min_salary, $max_salary);
    if ($result) {
        header('Location: ../Views/Job.php');
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
          <h4>Add Job</h4>
        </div>
        <div class="card-body bg-light">
          <form action="" method="post">
            
            <div class="mb-3">
              <label class="form-label">Job ID</label>
              <input type="text" class="form-control" name="job_id" required placeholder="Enter Job ID">
            </div>

            <div class="mb-3">
              <label class="form-label">Job Title</label>
              <input type="text" class="form-control" name="job_title" required placeholder="Enter Job Title">
            </div>

            <div class="mb-3">
              <label class="form-label">Minimum Salary</label>
              <input type="number" class="form-control" name="min_salary" placeholder="Enter Minimum Salary">
            </div>

            <div class="mb-3">
              <label class="form-label">Maximum Salary</label>
              <input type="number" class="form-control" name="max_salary" placeholder="Enter Maximum Salary">
            </div>

            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn btn-success px-4">Add Job</button>
              <a href="../Views/Job.php" class="btn btn-secondary px-4">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
