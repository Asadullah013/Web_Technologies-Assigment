<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div
        class="table-responsive">
        <table class="table table-primary">
            <a href="../Regions/Create.php" class="btn btn-success m-3">Add Region</a>
            <thead>
                <tr>
                    <th scope="col">Region ID</th>
                    <th scope="col">Region Name</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            require_once '../Public/Regions.php';
                            $reg = new Regions();
                            $result = $reg->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                    <tr class="">
                                        <td>'.$row['region_id'].'</td>
                                        <td>'.$row['region_name'].'</td>
                                    </tr>
                                
                                ';
                            }

                    ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once '../Templates/Footer.php'; ?>