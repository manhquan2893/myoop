<?php 
/**
 * 
 */
class FileController extends BaseController
{
	function upload(){
		 if (isset($_FILES['file']))
        {
            if ($_FILES['file']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                move_uploaded_file($_FILES['file']['tmp_name'], BASE_PATH . './upload/'.$_FILES['file']['name']);
                echo 'File Uploaded';
                return $_FILES['file']['name'];
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
	}
}

 ?>
