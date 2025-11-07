<?php require_once '../Templates/Header.php'; ?>

<div class="container my-3">
    <div class="table-responsive">
        <a href="../Locations/Create.php" class="btn btn-success m-3">Add Location</a>
        <table class="table table-striped table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">Location ID</th>
                    <th scope="col">Street Address</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">City</th>
                    <th scope="col">State / Province</th>
                    <th scope="col">Country ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../Public/Locations.php';
                    $l = new Locations();
                    $result = $l->read();
                    while($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>{$row['location_id']}</td>
                                <td>{$row['street_address']}</td>
                                <td>{$row['postal_code']}</td>
                                <td>{$row['city']}</td>
                                <td>{$row['state_province']}</td>
                                <td>{$row['country_id']}</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
