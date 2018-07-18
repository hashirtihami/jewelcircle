<?php
if(isset($_POST['submit']))
{
	$file = $_FILES['file'];

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileApart = explode('.', $fileName);
	$fileExt = strtolower(end($fileApart));

	$allowed = array('jpg', 'jpeg' , 'png');

	if(in_array($fileExt, $allowed))
	{
		if($fileError===0)
		{
			if($fileSize > 3000)
			{
				$fileNameNew=uniqid('',true).".".$fileExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			}else echo" file size too big";

		} else echo "there was an error while uploading";

	} else 
		echo "Cant upload of this type";



}


?>