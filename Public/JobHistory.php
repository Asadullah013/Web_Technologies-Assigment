<?php
require_once '../Config/Database.php';

class JobHistory extends Database
{
    public function read()
    {
        // Only show a few columns
        return $this->con->query("SELECT employee_id, start_date, job_id FROM job_history");
    }

    public function create($emp_id, $start_date, $job_id)
    {
        // Valid defaults that exist in HR DB
        $end_date = date('Y-m-d'); // example end date
        $dept_id  = 80;            // department 80 exists in HR

        // Insert query for HR schema
        $sql = "INSERT INTO job_history 
                (employee_id, start_date, end_date, job_id, department_id)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('isssi', $emp_id, $start_date, $end_date, $job_id, $dept_id);

        return $stmt->execute();
    }
}
?>
