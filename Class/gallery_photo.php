<?php
require_once ('database.php');

class Gallery_photo extends Database
{
    protected $uploadFilePath;

    function __construct()
    {
        parent::__construct();
        $this->uploadFilePath = $_SERVER["DOCUMENT_ROOT"].'/TanvirPhotograpy/';
    }

    public function save_Gallery_info($data)
    {
        $img_url = $this->save_gallery_picture(); /*this line for calling a logo function*/
        $query = "INSERT INTO tbl_gallery_photo (gallery_photo, publication_status)" . "VALUES('$img_url', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Gallery Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }


    /*all gallery photo in admin panel*/
    public function all_gallery_photo_for_admin(){
        $query = "SELECT * FROM tbl_gallery_photo ORDER BY gallery_photo_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit gallery photo in admin panel*/
    public function edit_gallery_photo_by_id($id){
        $query = "SELECT * FROM tbl_gallery_photo WHERE gallery_photo_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }
    /*update Gallery photo*/
    public function update_gallery_photo_info($data){
        if($_FILES['gallery_photo']['name']) {
            //$this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_gallery_picture(); /*this code for calling a image function*/

            $query = "UPDATE tbl_gallery_photo SET gallery_photo='$img_url', publication_status='$data[publication_status]' WHERE gallery_photo_id='$data[gallery_photo_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Gallery Photo Updated Successfully!";
                header('Location: manage_photo.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_gallery_photo SET publication_status='$data[publication_status]' WHERE gallery_photo_id='$data[gallery_photo_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Gallery Photo Updated Successfully!!";
                header('Location: manage_photo.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }

    /*Delete Gallery Photo*/
    public function delete_gallery_photo_info($id){
        $query = "DELETE FROM tbl_gallery_photo WHERE gallery_photo_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Gallery Photo Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }


    /*this function for image uploaded */
    public function save_gallery_picture(){
        $image_extensions_allowed = array("gif", "jpeg", "jpg", "png");
        $file_name = $_FILES["gallery_photo"]["name"];
        $ext = strtolower(substr(strrchr($file_name, "."), 1));
        $directory = $this->uploadFilePath.'Frontend/assets/images/gallery-photo/';
        $target = $directory . basename( $file_name) ;
        $image_name     = basename($file_name);
        $new_img_url    = $image_name;
        $image_size = $_FILES['gallery_photo']['size'];
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
                if(move_uploaded_file($_FILES['gallery_photo']['tmp_name'], $target))
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