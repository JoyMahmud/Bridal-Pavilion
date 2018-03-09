<?php
require_once ('database.php');

class Satisfaction extends Database
{
    public function save_satisfaction_info($data)
    {
        $query = "INSERT INTO tbl_satisfaction (satisfaction_title, satisfaction_number, publication_status)" . "VALUES('$data[satisfaction_title]', '$data[satisfaction_number]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Satisfaction Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*all satisfaction in admin panel*/
    public function all_satisfaction_for_admin(){
        $query = "SELECT * FROM tbl_satisfaction ORDER BY satisfaction_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit satisfaction in admin panel*/
    public function edit_satisfaction_by_id($id){
        $query = "SELECT * FROM tbl_satisfaction WHERE satisfaction_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
    /*update Satisfaction*/
    public function update_satisfaction_info($data){
        $query = "UPDATE tbl_satisfaction SET satisfaction_title='$data[satisfaction_title]', satisfaction_number='$data[satisfaction_number]', publication_status='$data[publication_status]' WHERE satisfaction_id='$data[satisfaction_id]'";
        if (mysqli_query($this->db_connect, $query)) {
            session_start();
            $_SESSION['message'] = "Satisfaction Updated Successfully!";
            header('Location: manage_satisfaction.php');
        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*Delete Satisfaction*/
    public function delete_satisfaction_info($id){
        $query = "DELETE FROM tbl_satisfaction WHERE satisfaction_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Satisfaction Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }



}