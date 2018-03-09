<?php
require_once ('database.php');

class Gallery_video extends Database
{
    public function save_Gallery_video_info($data)
    {
        $query = "INSERT INTO tbl_gallery_video (gallery_video, publication_status)" . "VALUES('$data[gallery_video]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Gallery Video Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }


    /*all gallery video in admin panel*/
    public function all_gallery_video_for_admin(){
        $query = "SELECT * FROM tbl_gallery_video ORDER BY gallery_video_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
    /*edit gallery video in admin panel*/
    public function edit_gallery_video_by_id($id){
        $query = "SELECT * FROM tbl_gallery_video WHERE gallery_video_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update Gallery photo*/
    public function update_gallery_video_info($data){
            $query = "UPDATE tbl_gallery_video SET gallery_video='$data[gallery_video]', publication_status='$data[publication_status]' WHERE gallery_video_id='$data[gallery_video_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Gallery Video Updated Successfully!";
                header('Location: manage_video.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }

    /*Delete Gallery Video*/
    public function delete_gallery_video_info($id){
        $query = "DELETE FROM tbl_gallery_video WHERE gallery_video_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Gallery Video Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

}