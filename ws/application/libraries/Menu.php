<?php

class Menu
{
    private $lang = '';
	
	function __constructor()
    {
        $this->CI =& get_instance();
    }
	
	function build()
	{
		$this->lang = get_language();
		$this->CI->db->where('am.fid_app_menu = 0');
		$this->CI->db->where('am.id_app_menu IN 
									(SELECT "fidAppMenu"
											FROM "msOperatorPrivilege" om
											WHERE om."fidMsOperator" = '.$this->CI->session->userdata('idMsOperator').')');
		/*
		*/
		$this->CI->db->order_by('order_by','ASC');
		$menu = $this->CI->db->get('AppMenus am');
		$base_url = base_url();
		$result = '';
		foreach ($menu->result() as $mn){
			
			$result .=' <li class="sub-menu">';
			$onclick = ($mn->url?'onclick="loadMainContent(\''.$mn->url.'\')"':'');
			$result .= '<a class="" href="#" '.$onclick.'>
							  <i class="'.$mn->icon.'"></i>
							  <span>'.$mn->title.'</span>
						  ';
			// load detail
			$this->CI->db->where('am.fid_app_menu = '.$mn->id_app_menu);
			/**/			
			$this->CI->db->where('am.id_app_menu IN 
										(SELECT "fidAppMenu"
											FROM "msOperatorPrivilege" om
											WHERE om."fidMsOperator" = '.$this->CI->session->userdata('idMsOperator').')');
			$this->CI->db->order_by('order_by','ASC');
			$menu_sub = $this->CI->db->get('AppMenus am');
			if ($menu_sub->num_rows() == 0)
			{
				$result .='</a>';
			}else
			{
				$result .='<span class="arrow"></span>
							</a>
							<ul class="sub">';
				foreach ($menu_sub->result() as $mn_sub)
				{
					$onclick = ($mn_sub->url?'onclick="loadMainContent(\''.$mn_sub->url.'\')"':'');
					$result .='<li><a class="" href="#" '.$onclick.'>'.$mn_sub->title.'</a></li>';
				}
				$result .='	</ul>';
			}
			//$result .= $result_sub ;
			//
			$result .='	</li>';
		}
		$result .= '';
		echo $result;
		
	}
}