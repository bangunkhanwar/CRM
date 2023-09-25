<?php

function get_themes(){
    $_this = & get_Instance();
	$conf = site_url('asset/themes');
	if($conf <> ''){
		return $conf;
	}else{
		return false;
	}
}

function get_myconf($var){
    $_this = & get_Instance();
	$conf = $_this->config->item($var);
	if($conf <> ''){
		return $conf;
	}else{
		return false;
	}
}

if ( ! function_exists('match_key'))
{
	function match_key($data,$key)
	{
		$data_upper = trim(strtoupper($data));
		$key_upper = trim(strtoupper($key));
		$pos_start = strrpos($data_upper,$key_upper);
		$result = $data;
		//$mark_start = '<span style="background-color: rgb(178, 179, 0);">';
		//$mark_start = '<span class="marked">';
		$mark_start = '<b><span style="color:red;">';
		$mark_end = '</span></b>';
		if ($pos_start OR $key_upper == substr($data_upper,0,strlen($key_upper)) )
		{
			$pos_end = $pos_start + strlen($key_upper);
			$result = substr_replace($data,$mark_start,$pos_start,0);
			$result = substr_replace($result,$mark_end,$pos_end+strlen($mark_start),0);
		}
		
		return $result;
	}
}
if ( ! function_exists('text2num'))
{
	function text2num($text='0')
	{
		$result = str_replace(",", "", $text);
		$result = $result?$result:'0';
		return $result;
	}
}

//decode
if ( ! function_exists('encode'))
{
	function encode($str='')
	{
		$result = base64_encode($str);		
		$result = base64_encode($result);
		//$result = strtr($result, '+/', '-_');
		return $result;
	}
}
if ( ! function_exists('decode'))
{
	function decode($str='')
	{
		$result = base64_decode($str);		
		$result = base64_decode($result);		
		return $result;
	}
}

// check privilage user
if ( ! function_exists('check_priv'))
{
	function check_priv($priv=false)
	{
		$_this = & get_Instance();
        
		$_this->load->model('utilities/operator_priv_model');
		$hasil = 0;
		$where = array();
		$where['tbl.fid_operator'] = $_this->session->userdata('id_operator');
		if ($priv)
		{
			$where['prv.kode'] = $priv;
		}
		$_this->operator_priv_model->set_where($where);
		$hasil = ($_this->operator_priv_model->count() > 0);
		return $hasil;
	}
}

// check file poto is exist
if ( ! function_exists('check_profile_pict'))
{
	function check_profile_pict($id,$path=false)
	{
		$path = $path?$path.'/':'';
		$foto = 'files/foto/'.$path.$id.'.jpg';
		if (!file_exists($foto))
			$foto = base_url().'files/foto/nopict.jpg';
		else
			$foto = base_url().$foto;
		return $foto;
	}
}
// check file poto is exist
if ( ! function_exists('thausand_spar'))
{
	function thausand_spar($num)
	{
		return number_format($num,2,'.',',');;
	}
}
// check num_to_aplha is exist
if ( ! function_exists('num_to_aplha'))
{
	function num_to_aplha($data){
    $alphabet =   array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $alpha_flip = array_flip($alphabet);
        if($data <= 25){
          return $alphabet[$data];
        }
        elseif($data > 25){
          $dividend = ($data + 1);
          $alpha = '';
          $modulo;
          while ($dividend > 0){
            $modulo = ($dividend - 1) % 26;
            $alpha = $alphabet[$modulo] . $alpha;
            $dividend = floor((($dividend - $modulo) / 26));
          } 
          return $alpha;
        }
	}
}

// check alpha_to_num is exist
if ( ! function_exists('alpha_to_num'))
{
	function alpha_to_num($data) {
		$alphabet = array( 'a', 'b', 'c', 'd', 'e',
						   'f', 'g', 'h', 'i', 'j',
						   'k', 'l', 'm', 'n', 'o',
						   'p', 'q', 'r', 's', 't',
						   'u', 'v', 'w', 'x', 'y',
						   'z'
						   );
		$alpha_flip = array_flip($alphabet);
		$return_value = -1;
		$length = strlen($data);
		for ($i = 0; $i < $length; $i++) {
			$return_value +=
				($alpha_flip[$data[$i]] + 1) * pow(26, ($length - $i - 1));
		}
		return $return_value;
	}
}

function jml_minggu($tgl_awal, $tgl_akhir){
	$detik = 24 * 3600;
	$tgl_awal = strtotime($tgl_awal);
	$tgl_akhir = strtotime($tgl_akhir);

	$minggu = 0;
	for ($i=$tgl_awal; $i < $tgl_akhir; $i += $detik)
	{
		if (date("w", $i) == "0")
		{
			$minggu++;
		}
	}
	return $minggu;
}	

function getWeekDates($date, $start_date, $end_date)
{
	$previous_week = strtotime("0 week +1 day");
	$start_week = strtotime("last sunday midnight",$previous_week);
	$end_week = strtotime("next saturday",$start_week);

    $week = date('W', strtotime($date));
    $year = date('Y', strtotime($date));
    // $from = date("Y-m-d", strtotime("{$year}-W{$week}-1")); //Returns the date of monday in week

    $from = date("Y-m-d", strtotime("{$year}-W{$week}-1")); //Returns the date of monday in week
    
    if($from < $start_date)
    	$from = $start_date;
    	$to = date("Y-m-d", strtotime("{$year}-W{$week}-7"));   //Returns the date of sunday in week
    
    if($to > $end_date)
    	$to = $end_date;
    
    if($from != $to)
    	echo "Start Date-->".$from."End Date -->".$to."<br>"; //Output : Start Date-->2012-09-03 End Date-->2012-09-09
}

function GenTransNumber($compcode='',$tgl='')
{
	$sqldate = getSQLDate($tgl);
	$date = DateTime::createFromFormat("Ymd", $sqldate);
	$day = $date->format("d");
	$month = $date->format("m");
	$year = $date->format("Y");
	// echo $year;
	$hari = '';
	$bulan = '';
	$tahun = '';
	$numbfix = '';
	if($day <= 9)
	{
		for ($i = 1; $i <= 9; $i++) 
		{
			if($day == $i)
				$hari =  $i;
		}
	}
	$y = 2010;
	$m = 0;
	$d = 9;
	foreach (range('A', 'Z') as $char) 
	{
		$m++;
		$y++;
		$d++;
		if($y == $year){
			$tahun = $char;
		}
			
		if($m == $month){
			$bulan = $char;
		}
			
		if($d == $day){
			$hari = $char;
		}
			
		
		$numbfix = $compcode.$tahun.$bulan.$hari;
	}
		return $numbfix;
}