<?php

class Interior {

    private $db;

    public function __construct() {

        $this->db = new Database;
       
    }

    public function insertContactDetailsOfUser($first_name,$last_name,$email,$phone,$address,$createdTs,$createdBy,$lastUpdatedBy,$lastUpdatedTs){
        $this->db->query('INSERT INTO user_contact_details(id, first_name, last_name, email, phone, address, created_ts, created_by, last_updated_ts, last_updated_by) VALUES (0,:first_name,:last_name,:email,:phone,:address,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy)');
        $this->db->bind(':first_name',$first_name);
        $this->db->bind(':last_name',$last_name);
        $this->db->bind(':email',$email);
        $this->db->bind(':address',$address);
        $this->db->bind(':phone',$phone);
        $this->db->bind(':createdTs', $createdTs);
        $this->db->bind(':createdBy', $createdBy);
        $this->db->bind(':lastUpdatedTs', $lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);
        if($this->db->execute()){
            $userId = $this->db->insertId();
            return $userId;

        }
        else {
            return false;
        }     
    }




}

?>