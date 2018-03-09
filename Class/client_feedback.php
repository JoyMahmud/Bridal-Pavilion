<?php
require_once ('database.php');

class Client_feedback extends Database
{
    protected $uploadFilePath;

    function __construct()
    {
        parent::__construct();
        $this->uploadFilePath = $_SERVER["DOCUMENT_ROOT"].'/TanvirPhotograpy/';
    }

    /*insert Client Feedback information into database*/
    public function save_client_feedback_info($data)
    {
        $img_url = $this->save_client_feedback_picture(); /*this line for calling a logo function*/
        $query = "INSERT INTO tbl_client_feedback (client_name, client_profession, feeadback_message, client_image, publication_status)" . "VALUES('$data[client_name]', '$data[client_profession]', '$data[feeadback_message]','$img_url', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Your Feedback Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }
    /*all client feedback view in admin panel*/
    public function all_client_feedback_for_admin(){
        $query = "SELECT * FROM tbl_client_feedback ORDER BY client_feedback_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit client feedback in admin panel*/
    public function edit_client_feedback_by_id($id){
        $query = "SELECT * FROM tbl_client_feedback WHERE client_feedback_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update Client Feedback*/
    public function update_client_feedback_info($data){
        if($_FILES['client_image']['name']) {
            //$this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_client_feedback_picture(); /*this code for calling a image function*/

            $query = "UPDATE tbl_client_feedback SET client_name='$data[client_name]', client_profession='$data[client_profession]', feeadback_message='$data[feeadback_message]', client_image='$img_url', publication_status='$data[publication_status]' WHERE client_feedback_id='$data[client_feedback_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Client Feedback Updated Successfully!";
                header('Location: manage_client_feedback.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_client_feedback SET client_name='$data[client_name]', client_profession='$data[client_profession]', feeadback_message='$data[feeadback_message]', publication_status='$data[publication_status]' WHERE client_feedback_id='$data[client_feedback_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Client Feedback Updated Successfully!";
                header('Location: manage_client_feedback.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }

    /*Delete Client Feedback*/
    public function delete_client_feedback_info($id){
        $query = "DELETE FROM tbl_client_feedback WHERE client_feedback_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Client Feedback Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*this function for image uploaded */
    public function save_client_feedback_picture(){
        $image_extensions_allowed = array("gif", "jpeg", "jpg", "png");
        $file_name = $_FILES["client_image"]["name"];
        $ext = strtolower(substr(strrchr($file_name, "."), 1));
        $directory = $this->uploadFilePath.'Frontend/assets/images/client-feedback/';
        $target = $directory . basename( $file_name) ;
        $image_name     = basename($file_name);
        $new_img_url    = $image_name;
        $image_size = $_FILES['client_image']['size'];
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
                if(move_uploaded_file($_FILES['client_image']['tmp_name'], $target))
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