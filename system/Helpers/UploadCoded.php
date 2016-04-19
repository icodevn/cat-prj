<?php

namespace Helpers;

class UploadCoded {
	
	function upload($element,$filter){
		$message = '';
		$reName = '';
		$valid_file = true;
		$valid_type = false;
		if($_FILES[$element]['name'])
		{
			//if no errors...
			if(!$_FILES[$element]['error'])
			{
				//now is the time to modify the future file name and validate the file
				$name = strtolower($_FILES[$element]['name']); //rename file
				$ext = end((explode(".", $name)));
				$reName = uniqid().'.'.$ext;
				if($_FILES[$element]['size'] > (SIZEIMAGE)) //can't be larger than 2 MB
				{
					$valid_file = false;
					$message = 'Oops!  Your file\'s size is to large.';
				}

				if('image' === $filter){
					if( 'png' === strtolower($ext) ||'jpg' === strtolower($ext) || 'jpeg' === strtolower($ext)  || 'bmp' === strtolower($ext) ){
						$valid_type = true;
					}
				}
				else{
					$message = 'Oops!  Your file\'s type is wrong.';
					$valid_type = false;
				}
				
				//if the file has passed the test
				if($valid_file && $valid_type)
				{
					//move it to where we want it to be
					move_uploaded_file($_FILES[$element]['tmp_name'], ROOTDIR.'assets/uploads/'.$reName);
					$message = Url::uploadPath().$reName;
				}
			}
			else
			{
				//set that to be the returned message
				$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES[$element]['error'];
			}
		}
		return $message;
	}

}