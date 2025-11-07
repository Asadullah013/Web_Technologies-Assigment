<?php 
    require_once '../Config/Database.php';
    class Countries extends Database
    {
        public function read()
        {
            return $this->con->query("Select * from countries");
        }
        public function create($c_id,$c_name,$r_id)
        {
            $sql = "insert into countries(country_id,country_name,region_id) values (?,?,?)";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('ssi',$c_id,$c_name,$r_id);
            return $stmt->execute();
        }
    }

?>