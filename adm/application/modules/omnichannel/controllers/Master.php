<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		
		$this->load->model('product_parent_model');
		$this->load->model('product_color_model');
		$this->load->model('product_size_model');
		$this->load->model('order_detail_model');
		$this->load->model('master/file_upload_omni_model');
		$this->load->model('master/product_model');
		// $this->load->model('customer_order_model');
		// $this->load->model('master/trans_status_omni_model');
	}
	
	public function index()
	{
		$this->bc->add('Omnichannel', base_url());
		$this->bc->add('Master', base_url('omnichannel/master'));
		$this->bc->set_title('Product Image');
		
		$product_list = $this->product_parent_model->get_product();
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'master/product_image/main'
		 ,'product_list' => $product_list
		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$time = date('Y-m-d H:i:s');
		// $date_start = date_format($date_start, 'Ymd');
		// print_r($_POST);
		$content_type 	= ($this->input->post('content_type')?:'grid-list');
				$search = strtoupper($this->input->post('t_search_key'));

		// $loader_name 	= $this->input->post('loader_name');
		$sku 			= $this->input->post('sku');
		$product_name   = $this->product_parent_model->get_product_name($sku);
		$brand = $this->input->post('t_brand');
		$img_avl = $this->input->post('t_image_avl');
		
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
	
		$this->product_parent_model->set_limit($limit);
			$this->product_parent_model->set_offset($limit * ($pg - 1));
			$this->product_parent_model->set_order(array($order_by_field=>$order_by_key));

		$where = array();		
		if ($sku == 'pilih') {		
			$where["(UPPER(\"SKUParent\") LIKE '%1%')"] = NULL;
		}else{
			$where['tbl.SKUParent']	= $sku;	
			// $where["(UPPER(\"tbl\".\"SKUParent\") LIKE '%$search%'
					// OR UPPER(\"tbl\".\"Description\") LIKE '%$search%'
				// )"] = NULL;			
		}
		
		$this->product_parent_model->set_where($where);

		// $order = array();
		// print_r($sum);
		// $order['str.StoreCode']  = 'ASC';
		// $order['tbl.SKUParent']		 = 'ASC';

		// $this->product_parent_model->set_order($order);

		$list_all=$this->product_parent_model->get_list_old($brand,$img_avl);
		
		// echo $this->db->last_query();
		// print_r($list_all);
		// die;
		$c_list = $list_all->num_rows();
		$count = ($c_list)?$c_list:0;
		// if ($limit)
		// {
			// $this->product_parent_model->set_limit($limit);
			// $this->product_parent_model->set_offset($limit * ($pg - 1));
			// $this->product_parent_model->set_order(array($order_by_field=>$order_by_key));
		// }
		// $search = "";
		$key = array();
		$key['SKUParent']			= $search;
		$key['SKUParentName']	= $search;
		
		
		$list=$this->product_parent_model->get_list_old($brand,$img_avl);	
		$count_row = $this->product_parent_model->count();
		// echo $this->db->last_query();
		// die;
		$page = array();
		$page['limit'] 	     	= $limit;
		$page['count_row'] 	    = $count_row;
		$page['current'] 	    = $pg;
		$page['load_func_name'] = 'loadListOrders';
		$page['list'] 		    = $this->gen_paging($page);
		$data = array(
				'content' 			=> 	'omnichannel/master/product_image/list'
				,'list' 			=> 	$list
				,'product_name'		=> 	$product_name
				,'paging'			=> 	$page
				,'content_type'		=> 	$content_type	
				,'key' 				=> $key
			);

		$this->load->view($data['content'],$data);			
	}
		
	function load_picture_color()
    {		
        $idParent = $this->input->post('t_idParent');
        $colorCode = $this->input->post('t_idColor');
		
		// if ($colorCode == 0){
			// $colorCode = '';
		// }
     	$where = array();
		
        $where['tbl.fidProductParent'] = $idParent;
		$where['tbl.ColorCode'] =  $colorCode;
        $where['tbl.tableName'] = 'msProductParent';
 
        $this->file_upload_omni_model->set_where($where);
        $file = $this->file_upload_omni_model->get_list();
	
       // echo $this->db->last_query();
       // exit;
        $data = array(
			'content'		=> './master/product_image/picture_color', 
			'title'         => 'Dashboard',
			'title_desc'	=> '',
			'id_parent'    	=> $idParent,
			'file_list' 	=> $file
        );
        $this->load->view($data['content'], $data);
    }
	
	
	function product_matrix_list($idparent)
	{		
	
		$product_parent = $this->product_parent_model->get($idparent);
		
		$this->product_color_model->set_where(array('fidMsProductParent' => $idparent));
		
		
		// $this->product_color_model->set_order(array('mc."ColorCode"' => 'ASC'));
		
			
		$color_list = $this->product_color_model->get_color_list();
		
		$this->product_size_model->set_where(array('fidMsProductParent' => $idparent));
		$size_list	= $this->product_size_model->get_parent_size();		
	
		// $data_po_matrix = array();
		
		foreach($color_list->result_array() as $color_row)
		{
		
			$colorCode = $color_row['idProductColor'];
			// foreach($size_list->result_array() as $size_row)
			// {
		
				// $sizeCode = $size_row['fidProductSize'];
				// $where_epo['mp."fidMsProductParent"']	=	$idparent;
				// $where_epo['mp."fidColorCode"']			=	$colorCode;
				// $where_epo['mp."fidProductSize"']		=	$sizeCode;
				// $this->epo_detail_model->set_where($where_epo);

				// $data_po_matrix[$colorCode][$sizeCode]  = $this->epo_detail_model->get_data_epo();
			// }
		}
			// echo $idparent;
		// die;
		// die;
			$data = array(
				'content'	        => 'omnichannel/master/product_image/matrix_list'
				,'idparent' 		=> $idparent
				,'color_list' 		=> $color_list
				,'size_list' 		=> $size_list
				,'product_parent' 	=> $product_parent
				// ,'data_po_matrix' 	=> $data_po_matrix
			);
		$this->load->view($data['content'],$data);
	
	}
	
	function foto_procces($idParent = 0,$type = 0)
    {				
		$uploadtype = '';
		if ($type == 1){
			$uploadtype = '1';
		}else if ($type == 7){
			$uploadtype = '7';
		}
		
		$where = array ();
		$where['tbl.fidProductParent'] = $idParent;
		$where['tbl.fidUploadType'] = 1;

		$this->file_upload_omni_model->set_where($where);		
		$last_order = $this->file_upload_omni_model->get_max();
		$order = (int)$last_order+1;

		// $this->load->library('upload', $config);

		$id_operator = $this->session->userdata('idMsOperator');
		
        $_this = &get_Instance();
        $_this->load->library('image_lib');
	
        $t = microtime(true);
        $micro = sprintf("%06d", ($t - floor($t)) * 1000000);
        $d = new DateTime(date('Y-m-d H:i:s.' . $micro, $t));

        $gen_no =  $id_operator . '_' . $d->format("YmdHisu");
        $unix_name = $gen_no;
		
		$parent = $this->product_parent_model->get(array('idMsProductParent' => $idParent));
		$SKUParent = $parent['SKUParent'];
		$product = $this->product_model->get(array('tbl.SKU' => $SKUParent));
	
        //create new directory
        $structure  = '../files/'.$idParent.'/parent/original/';
		$structure1 = '../files/'.$idParent.'/parent/thumb_900/';
        $structure2 = '../files/'.$idParent.'/parent/thumb_600/';
        $structure3 = '../files/'.$idParent.'/parent/thumb_80/';

        if (!file_exists($structure)) {
            !mkdir($structure, 0777, true);
        }
        if (!file_exists($structure1)) {
            !mkdir($structure1, 0777, true);
        }
		if (!file_exists($structure2)) {
            !mkdir($structure2, 0777, true);
        }
        if (!file_exists($structure3)) {
            !mkdir($structure3, 0777, true);
        }
			
        // VARS
        $filedata = $_FILES['Filedata'];
        $errorcode = $_FILES['Filedata']['error'];
		
		
		// $error_msg = $this->codeToMessage($errorcode);
		$error_msg = 'error';
		$config = $filedata['name'];
		
		// $path = $_FILES['image']['name'];
		$ext = pathinfo($config, PATHINFO_EXTENSION);
		$file_ext = strtolower($ext);

        // $file_ext = end((explode(".", $config)));
		// echo ($ext);		
		
        $target_folder = '../files/'.$idParent.'/parent/original/';
        $upload_image = $target_folder.$unix_name.'.'.$file_ext;
        // echo($upload_image);
        // exit;
		
        $msg = 'success';
        if (move_uploaded_file($filedata['tmp_name'], $upload_image)) {
            $img_size = getimagesize($upload_image);
			$idFileUpload = 0;
            $file['fileServerName']	= $unix_name.'.'.$file_ext;
            $file['fileType']       = $file_ext;
            $file['filePath']       = 'files/'.$idParent.'/';
            $file['fileExt']        = $file_ext;
            $file['fileSize']       = $_FILES['Filedata']['size'];
            $file['isImage']        = 1;
            $file['imageWidth']     = $img_size[0] ?: 0;
            $file['imageHeight']   	= $img_size[1] ?: 0;
            $file['imageType']      = $file_ext;
            $file['imageSizeStr']   = '';
            $file['fidData']   		= 5;
            $file['tableName']      = 'msProductParent';
            $file['realName']       = $filedata['name'];
            $file['SKU']     		= $parent['SKUParent'];
            $file['ColorCode']     	= $product['fidProductColor'];
            $file['fidProductSize'] = $product['fidSize'];
            $file['fidProductParent']= $idParent;
            $file['fidUploadType']  = $uploadtype;
            $file['Order']     	    = $order;
            $file['ForeignID']     	= $parent['SKUParent'];

            $file_upload = $this->file_upload_omni_model->saveTo($file);
            if ($file_ext == 'png' || $file_ext == 'jpg' || $file_ext == 'jpeg' || $file_ext == 'gif') {
                $height_60 = 80;
                $height_270 = 600;
                $height_340 = 900;
                $size =  array(
                    array(
						'name'  => 'thumb_80',
						'width' => $file['imageWidth'] * ($height_60 / $file['imageHeight']
					),
					'height'  => $height_60,'quality' => '100%'
					
				),
				array(
					'name' => 'thumb_600', 
					'width' => $file['imageWidth'] * ($height_270 / $file['imageHeight']), 
					'height' => $height_270, 'quality' => '100%'
				),
			   array(
					'name' => 'thumb_900', 
					'width' => $file['imageWidth'] * ($height_340 / $file['imageHeight']), 
					'height' => $height_340, 'quality' => '100%'
				)
                );
                $resize = array();
                foreach ($size as $r) {
                    $resize = array(
                        "width"        => $r['width'],
                        "height"       => $r['height'],
                        "quality"      => $r['quality'],
                        "source_image" => $upload_image,
                        "new_image"    => '../files/'.$idParent.'/parent/' . $r['name'] . '/' . $file['fileServerName']
                    );
                    $_this->image_lib->initialize($resize);
                    if (!$_this->image_lib->resize())
                        die($_this->image_lib->display_errors());
                }
            }
          
			//update fidData di table fileUpload
            $file_update['fileServerName']     = $file['fileServerName'];
            $file_exist = $this->file_upload_omni_model->get($file_update);
            // print_r($file_exist);
            // exit;

            $data['idFileUpload']     = $file_exist['idFileUpload'];
            $this->file_upload_omni_model->save($data);
        }else{
			$msg = $error_msg;
		}
		// echo $order;
		// die;
        echo $msg . '#' . $unix_name . '#' .$idParent;
    }
	
	function foto_color_procces($idParent = 0,$colorCode = '')
    {
		// echo "ada".$colorCode;
		
		$where = array ();
		$where['tbl.fidProductParent'] = $idParent;
		$where['tbl.ColorCode'] = $colorCode;
		$where['tbl.fidUploadType'] = 2;
		$this->file_upload_omni_model->set_where($where);
		$last_order = $this->file_upload_omni_model->get_max();
		$order = (int)$last_order+1;
		
		$id_operator = $this->session->userdata('idMsOperator');
        $_this = &get_Instance();
        $_this->load->library('image_lib');

        $t = microtime(true);
        $micro = sprintf("%06d", ($t - floor($t)) * 1000000);
        $d = new DateTime(date('Y-m-d H:i:s.' . $micro, $t));

        $gen_no =  $id_operator . '_' . $d->format("YmdHisu");

        $unix_name = $gen_no;
		
		$parent = $this->product_parent_model->get(array('idMsProductParent' => $idParent));
		$SKUParent = $parent['SKUParent'];
		$product = $this->product_model->get(array('tbl.SKU' => $SKUParent));

        // create new directory
        $structure  = '../files/'.$idParent.'/color/original/';
        $structure1 = '../files/'.$idParent.'/color/thumb_900/';
        $structure2 = '../files/'.$idParent.'/color/thumb_600/';
        $structure3 = '../files/'.$idParent.'/color/thumb_80/';

        if (!file_exists($structure)) {
            !mkdir($structure, 0777, true);
        }
		if (!file_exists($structure1)) {
            !mkdir($structure1, 0777, true);
        }
        if (!file_exists($structure2)) {
            !mkdir($structure2, 0777, true);
        } 
        if (!file_exists($structure3)) {
            !mkdir($structure3, 0777, true);
        }
        $filedata = $_FILES['Filedata'];
        $errorcode = $_FILES['Filedata']['error'];
		// $error_msg = $this->codeToMessage($errorcode);
		
		$error_msg = "error";		
		$config = $filedata['name'];
		
		// $path = $_FILES['image']['name'];
		// $config = $filedata['name'];
		$ext = pathinfo($config, PATHINFO_EXTENSION);
        // $file_ext = end((explode(".", $config)));
        $file_ext = strtolower($ext);

        $target_folder = '../files/'.$idParent.'/color/original/';
        $upload_image = $target_folder.$unix_name.'.'.$file_ext;
		
       
        $msg = 'success';
        if (move_uploaded_file($filedata['tmp_name'], $upload_image)) {

            $img_size = getimagesize($upload_image);
	        // $this->success($img_size); 
            // insert data file upload
			$idFileUpload = 0;
			// $data['idIssue']             = $issue['idIssue'] ?: 0;

            $file['fileServerName']	= $unix_name . '.' . $file_ext;
            $file['fileType']       = $file_ext;
            $file['filePath']       = 'files/'.$idParent.'/';
            $file['fileExt']        = $file_ext;
            $file['fileSize']       = $_FILES['Filedata']['size'];
            $file['isImage']        = 1;
            $file['imageWidth']     = $img_size[0] ?: 0;
            $file['imageHeight']   	= $img_size[1] ?: 0;
            $file['imageType']      = $file_ext;
            $file['imageSizeStr']   = '';
            $file['fidData']   		= 5;
            $file['tableName']      = 'msProductParent';
            $file['realName']       = $filedata['name'];
            // $file['schemaName']     = 'public';
            $file['SKU']     		= $parent['SKUParent'];
            $file['ColorCode']     	= $colorCode;
            $file['fidProductSize'] = $product['fidSize'];
            $file['fidProductParent']= $idParent;
            $file['fidUploadType']  = 2;
            $file['Order']     	    = $order;
            $file['ForeignID']     	= $parent['SKUParent'];

            $file_upload = $this->file_upload_omni_model->saveTo($file);
            if ($file_ext == 'png' || $file_ext == 'jpg' || $file_ext == 'jpeg' || $file_ext == 'gif') {
                $height_60 = 80;
                $height_270 = 600;
                $height_340 = 900;
                $size =  array(
                    array('name' => 'thumb_80', 'width'    => $file['imageWidth'] * ($height_60 / $file['imageHeight']), 'height'  => $height_60, 'quality' => '100%'),
                    array('name' => 'thumb_600', 'width' => $file['imageWidth'] * ($height_270 / $file['imageHeight']), 'height' => $height_270, 'quality' => '100%'),
                    array('name' => 'thumb_900', 'width' => $file['imageWidth'] * ($height_340 / $file['imageHeight']), 'height' => $height_340, 'quality' => '100%')
                );
                $resize = array();
                foreach ($size as $r) {
                    $resize = array(
                        "width"        => $r['width'],
                        "height"       => $r['height'],
                        "quality"      => $r['quality'],
                        "source_image" => $upload_image,
                        "new_image"    => '../files/'.$idParent.'/color/' . $r['name'] . '/' . $file['fileServerName']
                    );
                    $_this->image_lib->initialize($resize);
                    if (!$_this->image_lib->resize())
                        die($_this->image_lib->display_errors());
                }
            }
            // $msg = base_url() . $upload_image;
        	
            // update fidData di table fileUpload
            $file_update['fileServerName']     = $file['fileServerName'];
            $file_exist = $this->file_upload_omni_model->get($file_update);
            // print_r($file_exist);
            // exit;

            $data['idFileUpload']     = $file_exist['idFileUpload'];
            $this->file_upload_omni_model->save($data);
        }else{
			$msg = $error_msg;
		}
        echo $msg . '#' . $unix_name . '#' .$idParent;
    } 
	
	
	function remove_image($idParent)
    {
        $id = $this->input->post('t_idFileUpload');
		// echo $id;
		// die;
        $idparent = $idParent;

        $file = $this->file_upload_omni_model->get($id);
        $structure  = '../files/'.$idparent.'/parent/original';
        $structure1 = '../files/'.$idparent.'/parent/thumb_900';
        $structure2 = '../files/'.$idparent.'/parent/thumb_600';
        $structure3 = '../files/'.$idparent.'/parent/thumb_80';
				
        $saved = '';
        if ($file['idFileUpload']) {
            unlink($structure . '/' . $file['fileServerName']);
            unlink($structure1 . '/' . $file['fileServerName']);
            unlink($structure2 . '/' . $file['fileServerName']);
            unlink($structure3 . '/' . $file['fileServerName']);
            $saved = $this->file_upload_omni_model->delete($id);
        }
        if ($saved) {
            $this->success('Image telah dihapus');

            // $this->update['idIssue'] = ($t_idIssue);
        } else {
            $this->error('Image gagal dihapus');
        }
    }
	
	function remove_image_sp($idParent)
    {
		$idparent = $idParent;

        $id = $this->input->post('t_idFileUpload');
		// echo  $idparent;
		// die;
        $file = $this->file_upload_omni_model->get($id);
        $structure  = '../files/'.$idparent.'/parent/original';
        $structure2 = '../files/'.$idparent.'/parent/thumb_600';
        $structure3 = '../files/'.$idparent.'/parent/thumb_80';
				
        $saved = '';
        if ($file['idFileUpload']) {
            unlink($structure . '/' . $file['fileServerName']);
            unlink($structure2 . '/' . $file['fileServerName']);
            unlink($structure3 . '/' . $file['fileServerName']);
            $saved = $this->file_upload_omni_model->delete($id);
        }
        if ($saved) {
            $this->success('Image telah dihapus');
            // $this->update['idIssue'] = ($t_idIssue);
        } else {
            $this->error('Image gagal dihapus');
        }
    }
	
	function remove_image_color($idParent)
    {
        $id = $this->input->post('t_idFileUpload');
		$idparent = $idParent;

        $file = $this->file_upload_omni_model->get($id);
        $structure  = '../files/'.$idparent.'/color/original';
        $structure1 = '../files/'.$idparent.'/color/thumb_900';
        $structure2 = '../files/'.$idparent.'/color/thumb_600';
        $structure3 = '../files/'.$idparent.'/color/thumb_80';
				
        $saved = '';
        if ($file['idFileUpload']) {
            unlink($structure . '/' . $file['fileServerName']);
            unlink($structure1 . '/' . $file['fileServerName']);
            unlink($structure2 . '/' . $file['fileServerName']);
            unlink($structure3 . '/' . $file['fileServerName']);
            $saved = $this->file_upload_omni_model->delete($id);
        }
        if ($saved) {
            $this->success('Image telah dihapus');
            // $this->update['idIssue'] = ($t_idIssue);
        } else {
            $this->error('Image gagal dihapus');
        }
    }
	
	function load_picture()
    {
        $idParent = $this->input->post('t_idParent');
		
		$where = array();
		
        $where['tbl.fidProductParent'] = $idParent;
        $where['tbl.tableName'] = 'msProductParent';
		$where['tbl.fidUploadType'] =  1;

        $this->file_upload_omni_model->set_where($where);
		
        $file = $this->file_upload_omni_model->get_list();
		// print_r($file);
		// echo "normal";
        // exit;
        // echo $this->db->last_query();
		
        $data = array(
			'content'       => './master/product_image/picture', 
			'title'         => 'Dashboard',
			'title_desc'     => '',
			'id_parent'      => $idParent,
			'file_list' 	=> $file
        );
        $this->load->view($data['content'], $data);
    }
	
	function load_picture_sp()
    {
		
        $idParent = $this->input->post('t_idParent');
		if ($colorCode = 0||$colorCode = ''){
			$colorCode = null;	
		}
		$where = array();
        $where['tbl.fidProductParent'] = $idParent;
        $where['tbl.tableName'] = 'msProductParent';
        // $where['tbl.ColorCode'] =  null;
        $where['tbl.fidUploadType'] =  7;
		
        $this->file_upload_omni_model->set_where($where);
        $file = $this->file_upload_omni_model->get_list();
    
        // echo $this->db->last_query();
        // exit;
		
        $data = array(
			'content'       => './master/product_image/picture_sizepack', 
			'title'         => 'Dashboard',
			'title_desc'     => '',
			'id_parent'      => $idParent,
			'file_list' 	=> $file
        );
        $this->load->view($data['content'], $data);
    }

	

}