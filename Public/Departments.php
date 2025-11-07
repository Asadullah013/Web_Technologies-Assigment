<?php 
require_once '../Config/Database.php';

class Departments extends Database
{
    public function read()
    {
        return $this->con->query("SELECT department_id, department_name FROM departments");
    }

    public function create($dept_id, $dept_name)
    {
        $sql = "INSERT INTO departments (department_id, department_name) VALUES (?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('is', $dept_id, $dept_name);
        return $stmt->execute();
    }
}
?>
