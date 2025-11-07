<?php require_once '../Templates/Header.php'; ?>


<?php 
    require_once '../Public/Regions.php';

    $region = new Regions();

    if(isset($_POST['submit']))
    {
        $ri =  (int)$_POST['region_id'];
        $rn = $_POST['region_name'];
        $result = $region->create($ri,$rn);
        if($result)
        {
            header('location:../Views/Index.php');
        }
        else{
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
                    <label for="" class="form-label">Region ID</label>
                    <input
                        type="number"
                        class="form-control"
                        name="region_id"
                        require
                        aria-describedby="helpId"
                        placeholder="Enter ID" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Region Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="region_name"
                        require
                        aria-describedby="helpId"
                        placeholder="Enter Region name" />
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