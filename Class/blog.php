<?php

require_once ('database.php');
class Blog extends Database
{
    protected $uploadFilePath;

    function __construct()
    {
        parent::__construct();
        $this->uploadFilePath = $_SERVER["DOCUMENT_ROOT"].'/TanvirPhotograpy/';
    }

    /*insert Blog information into database*/
    public function save_blog_info($data)
    {
        $img_url = $this->save_blog_picture(); /*this line for calling a blog function*/
        $query = "INSERT INTO tbl_blog (blog_title, blog_description, blog_picture, created_at, publication_status)" . "VALUES('$data[blog_title]', '$data[blog_description]', '$img_url', '$data[created_at]', '$data[publication_status]')";
        if (mysqli_query($this->db_connect, $query))
        {
            $message = "Blog Information Save Successfully!";
            return $message;
        } else
        {
            die("Query Problem! " . mysqli_error($this->db_connect));
        }
    }

    /*all Blog post view in admin panel*/
    public function all_blog_for_admin(){
        $query = "SELECT * FROM tbl_blog ORDER BY blog_id DESC ";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*edit Blog in admin panel*/
    public function edit_blog_by_id($id){
        $query = "SELECT * FROM tbl_blog WHERE blog_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $query_result = mysqli_query($this->db_connect, $query);
            return $query_result;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*update Blog*/
    public function update_blog_info($data){
        if($_FILES['blog_picture']['name']) {
            //$this->imageUnlink($data);/*this code for image delete(unlink) from the folder*/
            $img_url = $this->save_blog_picture(); /*this code for calling a image function*/

            $query = "UPDATE tbl_blog SET blog_title='$data[blog_title]', blog_description='$data[blog_description]', blog_picture='$img_url', publication_status='$data[publication_status]' WHERE blog_id='$data[blog_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Blog Post Updated Successfully!";
                header('Location: manage_blog.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }else{
            $query = "UPDATE tbl_blog SET blog_title='$data[blog_title]', blog_description='$data[blog_description]', publication_status='$data[publication_status]' WHERE blog_id='$data[blog_id]'";
            if (mysqli_query($this->db_connect, $query)) {
                session_start();
                $_SESSION['message'] = "Blog Post Updated Successfully!";
                header('Location: manage_blog.php');
            } else {
                die("Query Problem! " . mysqli_error($this->db_connect));
            }
        }
    }

    /*Delete Blog Post*/
    public function delete_blog_info($id){
        $query = "DELETE FROM tbl_blog WHERE blog_id='$id'";
        if(mysqli_query($this->db_connect, $query)){
            $message = "Blog Post Information Deleted Successfully!";
            return $message;
        }else{
            die("Query Problem! ".mysqli_error($this->db_connect));
        }
    }

    /*this function for image uploaded */
    public function save_blog_picture(){
        $image_extensions_allowed = array("gif", "jpeg", "jpg", "png");
        $file_name = $_FILES["blog_picture"]["name"];
        $ext = strtolower(substr(strrchr($file_name, "."), 1));
        $directory = $this->uploadFilePath.'Frontend/assets/images/blog-post/';
        $target = $directory . basename( $file_name) ;
        $image_name     = basename($file_name);
        $new_img_url    = $image_name;
        $image_size = $_FILES['blog_picture']['size'];
        $new_blog_post_url    = $directory.$file_name;

        if (!empty($_FILES))
        {
            if ($image_size > 5000000)
            {
                die('File size is too large! Please upload Small file.');
            } elseif(!in_array($ext, $image_extensions_allowed))
            {
                die("You must upload a file with one of the following extensions: ".$ext);
            } elseif (file_exists($new_blog_post_url))
            {
                die("The file Already exit.Please Upload Another One");
            }
            else
            {
                //Now upload here
                if(move_uploaded_file($_FILES['blog_picture']['tmp_name'], $target))
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