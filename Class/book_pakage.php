<?php
require_once ('database.php');

class Book_pakage extends Database
{
    public function save_book_pakage_info($data)
    {
        /*echo "<pre>";
        print_r($data);
        exit();*/
        $query = "INSERT INTO tbl_book_pakage(name, email, mobile, event_venu, event_name, event_date, event_start_time, message)" . "VALUES('$data[name]', '$data[email]', '$data[mobile]', '$data[event_venu]', '$data[event_name]', '$data[event_date]', '$data[event_start_time]', '$data[message]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Booking Pakage Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*all book pakage in admin panel*/
    public function all_book_pakage_for_admin(){
        $query = "SELECT * FROM tbl_book_pakage ORDER BY pakage_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*Delete Satisfaction*/
    public function delete_book_pakage_info($id){
        $query = "DELETE FROM tbl_book_pakage WHERE pakage_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Booked Pakage Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


}