<?php
require_once ('database.php');

class Frontend_view extends Database
{
    /*all logo for frontend*/
    public function all_logo_info(){
        $query = "SELECT * FROM tbl_logo WHERE publication_status = 1 ORDER BY logo_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all service for frontend*/
    public function all_service_info(){
        $query = "SELECT * FROM tbl_service WHERE publication_status = 1 ORDER BY service_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all gallery photo for frontend*/
    public function all_photo_info(){
        $query = "SELECT * FROM tbl_gallery_photo WHERE publication_status = 1 ORDER BY gallery_photo_id DESC LIMIT 9";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all gallery photo for More PHoto*/
    public function all_more_photo_info(){
        $query = "SELECT * FROM tbl_gallery_photo WHERE publication_status = 1 ORDER BY gallery_photo_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all gallery Video for frontend*/
    public function all_video_info(){
        $query = "SELECT * FROM tbl_gallery_video WHERE publication_status = 1 ORDER BY gallery_video_id DESC LIMIT 6";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all gallery Video for More Video*/
    public function all_more_video_info(){
        $query = "SELECT * FROM tbl_gallery_video WHERE publication_status = 1 ORDER BY gallery_video_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all satisfaction for frontend*/
    public function all_satisfaction_info(){
        $query = "SELECT * FROM tbl_satisfaction WHERE publication_status = 1 ORDER BY 	satisfaction_id DESC LIMIT 4";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

 /*all satisfaction for frontend*/
    public function all_team_info(){
        $query = "SELECT * FROM tbl_team_member WHERE publication_status = 1 ORDER BY member_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all Pakage for frontend*/
    public function all_pakage_info(){
        $query = "SELECT * FROM tbl_pakage WHERE publication_status = 1 ORDER BY pakage_id DESC";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all Blog for frontend*/
    public function all_blog_info(){
        $query = "SELECT * FROM tbl_blog WHERE publication_status = 1 ORDER BY blog_id DESC LIMIT 3";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all Blog for feedback*/
    public function all_feedback_info(){
        $query = "SELECT * FROM tbl_client_feedback WHERE publication_status = 1 ORDER BY client_feedback_id DESC LIMIT 10";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
    /*all Blog for Footer up gallery photo*/
    public function all_footer_up_photo_info(){
        $query = "SELECT * FROM tbl_gallery_photo WHERE publication_status = 1 ORDER BY gallery_photo_id DESC LIMIT 20";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all Blog for Contact Us*/
    public function all_contact_us_info(){
        $query = "SELECT * FROM tbl_contact WHERE publication_status = 1 ORDER BY contact_id DESC LIMIT 1";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*all Blog for Footer gallery photo*/
    public function all_footer_photo_info(){
        $query = "SELECT * FROM tbl_gallery_photo WHERE publication_status = 1 ORDER BY gallery_photo_id DESC LIMIT 6";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
}