<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
  <div class="table-responsive">
    <a href="../Job_History/Create.php" class="btn btn-success m-3">Add Job History</a>
    <table class="table table-striped table-hover">
      <thead class="table-success">
        <tr>
          <th scope="col">Employee ID</th>
          <th scope="col">Start Date</th>
          <th scope="col">Job ID</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once '../Public/JobHistory.php';
          $jh = new JobHistory();
          $result = $jh->read();
          while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>{$row['employee_id']}</td>
                <td>{$row['start_date']}</td>
                <td>{$row['job_id']}</td>
              </tr>
            ";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
