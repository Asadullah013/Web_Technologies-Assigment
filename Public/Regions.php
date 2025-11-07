<?php 
    require_once '../Config/Database.php';
    class Regions extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from regions");
        }
        public function create($region_id,$region_name)
        {
            $sql = "insert into regions(region_id,region_name) values (?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('is',$region_id,$region_name);
            return $stmt->execute();
        }
    }

?>