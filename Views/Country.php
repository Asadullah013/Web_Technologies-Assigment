<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <table class="table table-primary">
            <a href="../Countries/Create.php" class="btn btn-success m-3">Add Country</a>
            <thead>
                <tr>
                    <th scope="col">Country ID</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Region ID</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/Countries.php';
                            $c = new Countries();
                            $result = $c->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['country_id'].'</td>
                                        <td>'.$row['country_name'].'</td>
                                        <td>'.$row['region_id'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>