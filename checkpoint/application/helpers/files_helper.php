<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( ! function_exists('getProfilePict'))
{
	function getProfilePict($IdPict = 0, $ImgType = '')
	{
		$img_show = 'http://crm.elcorps.com:88/app-assets/images/portrait/medium/avatar-m-9.png';
		
		$file_path = '';
		$file_location = '';
		$file_ext = '';
		$thumb_ext = '';
		// img type
		/*
			0 = original pic
			1 = thumbnail 100x100
			2 = thumbnail 200x200
			3 = thumbnail 500x500
		*/
		$_this = & get_Instance();
        
		$_this->load->model('files/file_upload_model');
		
		$filepict = $_this->file_upload_model->get($IdPict);
		
		if($filepict['idFileUpload'])
		{
			$file_path = ltrim($filepict['FilePath'],'.');
			if($ImgType==0)
			{
				$file_location = '';
			}
			if($ImgType==1)
			{
				$file_location = 'thumbnail_100x100/';
				$thumb_ext = '_thumb';
			}
			if($ImgType==2)
			{
				$file_location = 'thumbnail_200x200/';
				$thumb_ext = '_thumb';
			}
			if($ImgType==3)
			{
				$file_location = 'thumbnail_500x500/';
				$thumb_ext = '_thumb';
			}
			$file_ext = $filepict['FileExt']?:'jpg';
			$img_show = 'http://crm.elcorps.com'.$file_path.$file_location.$filepict['FileServerName'].$thumb_ext.'.'.$file_ext;
		}
		
		echo $img_show;
	}
}

function getProfileImageMobile($memberCode,$useFor)
{
	$ci = get_instance();
	$where = array();
	$where['UploadBy'] = $memberCode;
	$where['UsedFor']=$useFor;		

	// print_r($imageFile);
	$path = '';
	$thumb_ext = '';
	if ($useFor==0)
	{
		$path = '';
		$where['UsedFor']=1;		
	}
	elseif($useFor==1)
	{
		$thumb_ext = '_thumb';
		$path = 'thumbnail_100x100/';
	}
	elseif($useFor==2)
	{
		$thumb_ext = '_thumb';
		$path = 'thumbnail_200x200/';
	}
	elseif($useFor==3)
	{
		$thumb_ext = '_thumb';
		$path = 'thumbnail_500x500/';
	}
		
	$ci->db->where($where);
	$ci->db->order_by('idFileUpload', 'DESC');
	$ci->db->limit(1);
	$imageFile = $ci->db->get('fileUpload');
	// echo $ci->db->last_query();
	 
	$imageFile = $imageFile->row_array();
	
	$imgsrc = '';
	$imgfile = 'http://crm.elcorps.com/file_storage/assets/images/no-image-icon.png';
	$imgsrc = ltrim($imageFile['FilePath'],'.').$path.$imageFile['FileServerName'].$thumb_ext.'.'.$imageFile['FileExt'];
	$imgsrc = 'http://crm.elcorps.com'.$imgsrc;  
	if ($imageFile['idFileUpload'] < 1)
	{
		$imgsrc = $imgfile;
	}else{
		$imgsrc;
	}
	return $imgsrc;
}

// if( ! function_exists('array_to_string'))
// {
	// function array_to_string($arr)
	// {
		// $var = array();
		// foreach ($arr as $key => $value)
		// {
			// $var .= $key.' : '.$value.' => '.$value_new[$key].';';
		// }
		// return $var;
	// }
// }


/* End of file MY_url_helper.php */
/* Location: ./application/helpers/MY_url_helper.php */