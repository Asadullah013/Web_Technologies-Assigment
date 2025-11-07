<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
  <div class="table-responsive">
    <a href="../Employees/Create.php" class="btn btn-success m-3">Add Employee</a>
    <table class="table table-striped table-hover">
      <thead class="table-success">
        <tr>
          <th scope="col">Employee ID</th>
          <th scope="col">Employee Name</th>
          <th scope="col">Salary</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once '../Public/Employees.php';
          $e = new Employees();
          $result = $e->read();
          while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>{$row['employee_id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['salary']}</td>
              </tr>
            ";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
