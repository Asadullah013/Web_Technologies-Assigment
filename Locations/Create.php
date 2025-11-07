<?php require_once '../Templates/Header.php'; ?>

<?php
require_once '../Public/Locations.php';
$l = new Locations();

if (isset($_POST['submit'])) {
    $street  = $_POST['street_address'];
    $postal  = $_POST['postal_code'];
    $city    = $_POST['city'];
    $state   = $_POST['state_province'];
    $country = $_POST['country_id'];

    $result = $l->create($street, $postal, $city, $state, $country);
    if ($result) {
        header('Location: ../Views/Location.php');
        exit;
    } else {
        echo '<p class="container bg-danger text-center text-light p-2">❌ Failed to store data</p>';
    }
}
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white text-center">
          <h4>Add Location</h4>
        </div>
        <div class="card-body bg-light">
          <form action="" method="post">
            <div class="mb-3">
              <label class="form-label">Street Address</label>
              <input type="text" class="form-control" name="street_address" placeholder="Enter Street Address">
            </div>

            <div class="mb-3">
              <label class="form-label">Postal Code</label>
              <input type="text" class="form-control" name="postal_code" placeholder="Enter Postal Code">
            </div>

            <div class="mb-3">
              <label class="form-label">City</label>
              <input type="text" class="form-control" name="city" required placeholder="Enter City">
            </div>

            <div class="mb-3">
              <label class="form-label">State / Province</label>
              <input type="text" class="form-control" name="state_province" placeholder="Enter State or Province">
            </div>

            <div class="mb-3">
              <label class="form-label">Country</label>
              <select class="form-select" name="country_id" required>
                <option value="">Select Country</option>
                <?php
                    require_once '../Public/Countries.php';
                    $c = new Countries();
                    $result = $c->read();
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['country_id']}'>{$row['country_name']}</option>";
                    }
                ?>
              </select>
            </div>

            <div class="text-center mt-4">
              <button type="submit" name="submit" class="btn btn-success px-4">Add Location</button>
              <a href="../Views/Location.php" class="btn btn-secondary px-4">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>
