<?php
require_once ('database.php');

class Team_member extends Database
{
    protected $uploadFilePath;

    function __construct()
    {
        parent::__construct();
        $this->uploadFilePath = $_SERVER["DOCUMENT_ROOT"].'/TanvirPhotograpy/';
    }

    /*insert team member information into database*/
    public function save_team_member_info($data)
    {
        $img_url = $this->save_team_member_picture(); /*this line for calling a team member function*/
        $query = "INSERT INTO tbl_team_member (member_name, member_designation, short_description, member_picture, facebook, publication_status)" . "VALUES('$data[member_name]', '$data[member_designation]', '$data[short_description]', '$img_url', '$data[facebook]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Team Member Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*all team member view in admin panel*/
    public function all_team_member_for_admin(){
        $query = "SELECT * FROM tbl_team_member ORDER BY member_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit Team Member in admin panel*/
    public function edit_team_member_by_id($id){
        $query = "SELECT * FROM tbl_team_member WHERE member_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /*update Team Member*/
    public function update_team_member_info($data){
        if($_FILES['member_picture']['name']) {
            //$this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_team_member_picture(); /*this code for calling a image function*/

            $query = "UPDATE tbl_team_member SET member_name='$data[member_name]', member_designation='$data[member_designation]', 
                short_description='$data[short_description]', member_picture='$img_url', facebook='$data[facebook]', publication_status='$data[publication_status]' WHERE member_id='$data[member_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Team Member Information Updated Successfully!";
                header('Location: manage_team_member.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_team_member SET member_name='$data[member_name]', member_designation='$data[member_designation]', 
                short_description='$data[short_description]', facebook='$data[facebook]', publication_status='$data[publication_status]' WHERE member_id='$data[member_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Team Member Information Updated Successfully!!";
                header('Location: manage_team_member.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }

    /*Delete Team Member*/
    public function delete_team_member_info($id){
        $query = "DELETE FROM tbl_team_member WHERE member_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Team Member Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /*this function for image uploaded */
    public function save_team_member_picture(){
        $image_extensions_allowed = array("gif", "jpeg", "jpg", "png");
        $file_name = $_FILES["member_picture"]["name"];
        $ext = strtolower(substr(strrchr($file_name, "."), 1));
        $directory = $this->uploadFilePath.'Frontend/assets/images/team-member/';
        $target = $directory . basename( $file_name) ;
        $image_name     = basename($file_name);
        $new_img_url    = $image_name;
        $image_size = $_FILES['member_picture']['size'];
        $new_member_picture_url    = $directory.$file_name;

        if (!empty($_FILES))
        {
            if ($image_size > 5000000)
            {
                die('File size is too large! Please upload Small file.');
            } elseif(!in_array($ext, $image_extensions_allowed))
            {
                die("You must upload a file with one of the following extensions: ".$ext);
            } elseif (file_exists($new_member_picture_url))
            {
                die("The file Already exit.Please Upload Another One");
            }
            else
            {
                //Now upload here
                if(move_uploaded_file($_FILES['member_picture']['tmp_name'], $target))
                {
                    return $new_img_url;
                }
                else
                {
                    die('Sorry, there was a problem uploading your file.');
                }
            }
        } else
        {
            die('The file you Upload is not an image! Please upload a Valid Image.');
        }

    }







}