<?php
require_once ('database.php');

class Pakage extends Database
{
    public function save_pakage_info($data)
    {
        $query = "INSERT INTO tbl_pakage (pakage_type, pakage_rate, provide_one, provide_two, provide_three, provide_four, provide_five, provide_six, provide_seven, provide_eight, provide_nine, provide_ten, publication_status)" .
            "VALUES('$data[pakage_type]', '$data[pakage_rate]', '$data[provide_one]', '$data[provide_two]', '$data[provide_three]', '$data[provide_four]', '$data[provide_five]', '$data[provide_six]', '$data[provide_seven]', '$data[provide_eight]', '$data[provide_nine]', '$data[provide_ten]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Pakage Information Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*all pakage in admin panel*/
    public function all_pakage_for_admin(){
        $query = "SELECT * FROM tbl_pakage ORDER BY pakage_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit Pakage in admin panel*/
    public function edit_pakage_by_id($id){
        $query = "SELECT * FROM tbl_pakage WHERE pakage_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update Pakage*/
    public function update_pakage_info($data){
        $query = "UPDATE tbl_pakage SET pakage_type='$data[pakage_type]', pakage_rate='$data[pakage_rate]', provide_one='$data[provide_one]',
                  provide_two='$data[provide_two]', provide_three='$data[provide_three]', provide_four='$data[provide_four]',provide_five='$data[provide_five]',
                   provide_six='$data[provide_six]', provide_seven='$data[provide_seven]', provide_eight='$data[provide_eight]', provide_nine='$data[provide_nine]',
                   provide_ten='$data[provide_ten]', publication_status='$data[publication_status]' WHERE pakage_id='$data[pakage_id]'";
        if (mysqli_query($this->db_connect, $query)) {
            session_start();
            $_SESSION['message'] = "Pakage Updated Successfully!";
            header('Location: manage_pakage.php');
        } else {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*Delete Pakage*/
    public function delete_pakage_info($id){
        $query = "DELETE FROM tbl_pakage WHERE pakage_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Pakage Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }



}