<?php
require_once '../Config/Database.php';

class Locations extends Database
{
    public function read()
    {
        return $this->con->query("SELECT location_id, street_address, postal_code, city, state_province, country_id FROM locations");
    }

    public function create($street, $postal, $city, $state, $country)
    {
        $sql = "INSERT INTO locations (street_address, postal_code, city, state_province, country_id) VALUES (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('sssss', $street, $postal, $city, $state, $country);
        return $stmt->execute();
    }
}
?>
