<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div class="table-responsive">
        <a href="../Departments/Create.php" class="btn btn-success m-3">Add Department</a>
        <table class="table table-striped table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">Department ID</th>
                    <th scope="col">Department Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../Public/Departments.php';
                    $d = new Departments();
                    $result = $d->read();
                    while($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>{$row['department_id']}</td>
                                <td>{$row['department_name']}</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
