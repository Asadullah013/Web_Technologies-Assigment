<?php require_once '../Templates/Header.php'; ?>

<?php
require_once '../Public/JobHistory.php';
$jh = new JobHistory();

if (isset($_POST['submit'])) {
    $emp_id     = (int)$_POST['employee_id'];
    $start_date = $_POST['start_date'];
    $job_id     = $_POST['job_id'];

    $result = $jh->create($emp_id, $start_date, $job_id);
    if ($result) {
        header('Location: ../Views/JobHistory.php');
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
          <h4>Add Job History</h4>
        </div>
        <div class="card-body bg-light">
          <form action="" method="post">

            <!-- Employee Dropdown -->
            <div class="mb-3">
              <label class="form-label">Employee</label>
              <select class="form-select" name="employee_id" required>
                <option value="">Select Employee</option>
                <?php
                  require_once '../Public/Employees.php';
                  $emp = new Employees();
                  $result = $emp->read();
                  while ($row = $result->fetch_assoc()) {
                      echo "<option value='{$row['employee_id']}'>{$row['first_name']}</option>";
                  }
                ?>
              </select>
            </div>

            <!-- Start Date -->
            <div class="mb-3">
              <label class="form-label">Start Date</label>
              <input type="date" class="form-control" name="start_date" required>
            </div>

            <!-- Job Dropdown -->
            <div class="mb-3">
              <label class="form-label">Job</label>
              <select class="form-select" name="job_id" required>
                <option value="">Select Job</option>
                <?php
                  require_once '../Public/Jobs.php';
                  $job = new Jobs();
                  $result = $job->read();
                  while ($row = $result->fetch_assoc()) {
                      echo "<option value='{$row['job_id']}'>{$row['job_title']}</option>";
                  }
                ?>
              </select>
            </div>

            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn btn-success px-4">Add History</button>
              <a href="../Views/JobHistory.php" class="btn btn-secondary px-4">Cancel</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
