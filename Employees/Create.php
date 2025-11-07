<?php require_once '../Templates/Header.php'; ?>
<?php
require_once '../Public/Employees.php';
$e = new Employees();

if (isset($_POST['submit'])) {
    $emp_id   = (int)$_POST['employee_id'];
    $name     = $_POST['first_name'];
    $salary   = (float)$_POST['salary'];

    $result = $e->create($emp_id, $name, $salary);
    if ($result) {
        header('Location: ../Views/Employee.php');
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
          <h4>Add Employee</h4>
        </div>
        <div class="card-body bg-light">
          <form action="" method="post">
            <div class="mb-3">
              <label class="form-label">Employee ID</label>
              <input type="number" class="form-control" name="employee_id" required placeholder="Enter Employee ID">
            </div>
            <div class="mb-3">
              <label class="form-label">Employee Name</label>
              <input type="text" class="form-control" name="first_name" required placeholder="Enter Employee Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Salary</label>
              <input type="number" class="form-control" name="salary" required placeholder="Enter Salary">
            </div>

            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn btn-success px-4">Add Employee</button>
              <a href="../Views/Employee.php" class="btn btn-secondary px-4">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
