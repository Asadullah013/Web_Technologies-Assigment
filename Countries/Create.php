<?php require_once '../Templates/Header.php'; ?>


<?php
require_once '../Public/Countries.php';

$c = new Countries();

if (isset($_POST['submit'])) {
    $ri =  (int)$_POST['region_id'];
    $cn = $_POST['country_name'];
    $ci = $_POST['country_id'];
    $result = $c->create($ci,$cn,$ri);
    if ($result) {
        header('location:../Views/Country.php');
    } else {
        echo '<p class="container bg-danger text-center text-light">Failed TO Store<p>';
    }
}

?>

<div class="container-fluid my-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Country ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="country_id"
                        require
                        aria-describedby="helpId"
                        placeholder="Enter ID" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Country Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="country_name"
                        require
                        aria-describedby="helpId"
                        placeholder="Enter Region name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Region ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="region_id"
                        id="">
                        <option selected>Select one</option>

                        <?php
                                require_once '../Public/Regions.php';
                                $reg = new Regions();
                            $result = $reg->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                        <option value='.$row['region_id'].'>'.$row['region_name'].'</option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>


                <div>
                    <input type="submit" name="submit" value="Add Region" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>