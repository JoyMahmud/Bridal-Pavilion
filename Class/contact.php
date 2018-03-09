<?php

require_once ('database.php');
class Contact extends Database
{
    public function save_contact_info($data)
    {
        $query = "INSERT INTO tbl_contact (address, mobile, email, publication_status)" . "VALUES('$data[address]', '$data[mobile]', '$data[email]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Contact Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }
    /*all contact in admin panel*/
    public function all_contact_for_admin(){
        $query = "SELECT * FROM tbl_contact ORDER BY contact_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit contact in admin panel*/
    public function edit_contact_by_id($id){
        $query = "SELECT * FROM tbl_contact WHERE contact_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /*update Contact*/
    public function update_contact_info($data){
        $query = "UPDATE tbl_contact SET address='$data[address]', mobile='$data[mobile]', email='$data[email]', publication_status='$data[publication_status]' WHERE contact_id='$data[contact_id]'";
        if (mysqli_query($this->db_connect, $query)) {
            session_start();
            $_SESSION['message'] = "Contact Information Updated Successfully!";
            header('Location: manage_contact.php');
        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*Delete Contact*/
    public function delete_contact_info($id){
        $query = "DELETE FROM tbl_contact WHERE contact_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Contact Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


}