<?php
function validatedimg($banner_image){
if(!empty($banner_image)){
$ext =pathinfo($banner_image, PATHINFO_EXTENSION); 
$file = pathinfo($banner_image, PATHINFO_FILENAME);

if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'PNG' || $ext == 'DOC' || $ext == 'DOCX' || $ext == 'PDF' || $ext == 'TXT' || $ext == 'doc' || $ext == 'docx' || $ext == 'pdf' || $ext == 'txt' || $ext == 'gif' || $ext == 'GIF' ){
	
	
	$str = 'axpQr';
	$shuffled = str_shuffle($str);
 $banner_image = $file.time().$shuffled.".".$ext;
	return $banner_image;
}else{
	return '!valid';
}
}else{
	
	return 'empty';

}

}


function imgvalidationnotreq($banner_image){
if(!empty($banner_image)){
$ext =pathinfo($banner_image, PATHINFO_EXTENSION); 
$file = pathinfo($banner_image, PATHINFO_FILENAME);

if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'PNG' || $ext == 'DOC' || $ext == 'DOCX' || $ext == 'PDF' || $ext == 'TXT' || $ext == 'doc' || $ext == 'docx' || $ext == 'pdf' || $ext == 'txt' || $ext == 'gif' || $ext == 'GIF' ){
	
	
	$str = 'axpQr';
	$shuffled = str_shuffle($str);
 $banner_image = $file.time().$shuffled.".".$ext;
	return $banner_image;
}else{
	return '!valid';
	//echo "<script>alert('Please select JPG,JPEG OR PNG image only.');	window.history.back();</script>";
}
}

}

?>