<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadingComponent
 *
 * @author db2admin
 */
App::uses('Component', 'Controller');
class UploadingComponent extends Component {
    public function uploadImage($files,$imagePath)
    {
        $imagePath=$this->webroot.$imagePath;
        $image=$files['image_url']['tmp_name'];
        $fileName='';
            if ($image!='')
            {

 		$filename = stripslashes($files['image_url']['name']);
               $arrFile=preg_split('/\./', $filename);
  		$extension = $arrFile[count($arrFile)-1];
 		$extension = strtolower($extension);
 		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
 		{
 			//echo '<script>window.location="item.php?ext_error"</script>';
			exit;
 		}
 		else
 		{
 			if(($extension == "jpg") || ($extension == "jpeg"))
			{
				$src = imagecreatefromjpeg($image);
			}
			if($extension == "png")
			{
				$src = imagecreatefrompng($image);
			}
			if($extension == "gif")
			{
				$src = imagecreatefromgif($image);
			}

			$size=filesize($files['image_url']['tmp_name']);
			if ($size > 100*1024*1024)
			{
				echo '<script>window.location="?size_error"</script>';
				exit;
			}

			$image_name=time().'.'.$extension;
			list($width,$height)=getimagesize($image);
			/*================== Large Image =================*/

			$image_name=time().'.'.$extension;
			
			$filename = $imagePath.$image_name;
                        move_uploaded_file($_FILES["image_url"]["tmp_name"],$filename);
                    }
            }
            return $filename;
    }
}

?>
