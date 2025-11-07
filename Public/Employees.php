<?php
require_once '../Config/Database.php';

class Employees extends Database
{
    public function read()
    {
        return $this->con->query("SELECT employee_id, first_name, salary FROM employees");
    }

    public function create($emp_id, $first_name, $salary)
    {
        // Default values that exist in your HR database
        $default_job_id   = 'IT_PROG';   // must exist in jobs table
        $default_dept_id  = 80;          // must exist in departments table
        $hire_date        = date('Y-m-d'); // today's date

        // ✅ we’ll fill the NOT NULL columns with safe defaults
        $last_name        = 'Temp';
        $email            = 'temp' . rand(100,999) . '@example.com';
        $phone_number     = '000-000-0000';
        $commission_pct   = NULL;
        $manager_id       = NULL;

        $sql = "INSERT INTO employees 
            (employee_id, first_name, last_name, email, phone_number, hire_date, job_id, salary, commission_pct, manager_id, department_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->con->prepare($sql);

        // 👇 11 columns = 11 placeholders, so 11 bind types
        $stmt->bind_param(
            'issssssddii',
            $emp_id,
            $first_name,
            $last_name,
            $email,
            $phone_number,
            $hire_date,
            $default_job_id,
            $salary,
            $commission_pct,
            $manager_id,
            $default_dept_id
        );

        return $stmt->execute();
    }
}
?>
