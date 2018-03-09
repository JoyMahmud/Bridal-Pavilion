<?php
require_once ('database.php');

class Upload_logo extends Database
{
    protected $uploadFilePath;

    function __construct()
    {
        parent::__construct();
        $this->uploadFilePath = $_SERVER["DOCUMENT_ROOT"].'/TanvirPhotograpy/';
    }


    public function save_logo($data)
    {
        $img_url = $this->save_logo_info(); /*this line for calling a logo function*/
        $query = "INSERT INTO tbl_logo (logo, publication_status)" . "VALUES('$img_url', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Logo Information Save Successfully!";
            return $message;
        } else
            {
            die("Query Problem! " . mysqli_error($this->db_connect));
            }
    }

    /*all logo in admin panel*/
    public function all_logo_for_admin(){
        $query = "SELECT * FROM tbl_logo ORDER BY logo_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit logo in admin panel*/
    public function edit_logo_by_id($id){
        $query = "SELECT * FROM tbl_logo WHERE logo_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update Logo*/
    public function update_logo_info($data){
        if($_FILES['logo']['name']) {
            //$this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_logo_info(); /*this code for calling a image function*/

            $query = "UPDATE tbl_logo SET logo='$img_url', publication_status='$data[publication_status]' WHERE logo_id='$data[logo_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Logo Updated Successfully!";
                header('Location: manage_logo.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_logo SET publication_status='$data[publication_status]' WHERE logo_id='$data[logo_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Logo Information Updated Successfully!!";
                header('Location: manage_logo.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }


    /*Delete Logo*/
    public function delete_logo_info($id){
        $query = "DELETE FROM tbl_logo WHERE logo_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Logo Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*this function for image uploaded */
    public function save_logo_info(){
        $image_extensions_allowed = array("gif", "jpeg", "jpg", "png");
        $file_name = $_FILES["logo"]["name"];
        $ext = strtolower(substr(strrchr($file_name, "."), 1));
        $directory = $this->uploadFilePath.'Frontend/assets/images/logo/';
        $target = $directory . basename( $file_name) ;
        $image_name     = basename($file_name);
        $new_img_url    = $image_name;
        $image_size = $_FILES['logo']['size'];
        $new_logo_url    = $directory.$file_name;

        if (!empty($_FILES))
        {
            if ($image_size > 5000000)
            {
                die('File size is too large! Please upload Small file.');
            } elseif(!in_array($ext, $image_extensions_allowed))
            {
                die("You must upload a file with one of the following extensions: ".$ext);
            } elseif (file_exists($new_logo_url))
            {
                die("The file Already exit.Please Upload Another One");
            }
            else
                {
                //Now upload here
                if(move_uploaded_file($_FILES['logo']['tmp_name'], $target))
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

    /*this function for image unlink*/
    public function imageUnlink($imgdata){
        $logo_id = $imgdata['logo_id'];
        $sql = "SELECT logo FROM tbl_logo WHERE logo_id='$logo_id'";
        $query_result = mysqli_query($this->db_connect, $sql);
        $blog_post_image = mysqli_fetch_assoc($query_result);
        return unlink($blog_post_image['logo']);
    }





}