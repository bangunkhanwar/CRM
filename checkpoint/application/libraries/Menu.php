<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu
{
	private $CI = '';

	function __construct()
    {
        $this->CI =& get_instance();
    }
	
	function get_menu($parent_id,$level=0)
	{
		if($level>100)
		{
			die('ERROR UNLIMITED LOOP');
		}
		$base_url = base_url();
		$menu = '';
		$this->CI->db->where('am.fidAppMenu = '.$parent_id.'');
		$this->CI->db->where('am.isActive = 1');
		$this->CI->db->where('am."idAppMenu" IN 
									(SELECT "fidAppMenu"
											FROM admpanel."msOperatorPrivilege" om
											WHERE om."fidMsOperator" = '.$this->CI->session->userdata('idMsOperator').')');
		$this->CI->db->order_by('OrderBy','ASC');
		$get_menu = $this->CI->db->get('admpanel.AppMenus am');
		// echo $this->CI->db->last_query().';<br>';
		$menu_list = $get_menu->result_array();
		
		$level = $level+1;
		
		foreach($menu_list as $key=>$row)
		{
			$this->CI->db->where('am.fidAppMenu = '.$row['idAppMenu'].'');
			$this->CI->db->where('am.isActive = 1');
			$this->CI->db->where('am."idAppMenu" IN 
									(SELECT "fidAppMenu"
											FROM admpanel."msOperatorPrivilege" om
											WHERE om."fidMsOperator" = '.$this->CI->session->userdata('idMsOperator').')');
			$this->CI->db->order_by('OrderBy','ASC');
			$check_child = $this->CI->db->get('admpanel.AppMenus am');
			$child_count = 0;
			$child_count = $check_child->num_rows();
			$child_click = '';
			
			$li_class = 'dropdown nav-item';
			$li_data_menu = 'dropdown';
			
			$a_class = 'dropdown-toggle nav-link';
			$a_data_toggle= 'dropdown';
			
			$title = $row['Title'];
			
			$child_click = '';
				
			if($level == 1)
			{
				$title = '<span>'.$row['Title'].'</span>';
				$li_class = 'dropdown nav-item';
				$li_data_menu = 'dropdown';
				
				$a_class = 'nav-link';
				$a_data_toggle= 'dropdown';
			}
			
			if($level == 2)
			{
				$title = $row['Title'];
				$li_class = 'dropdown';
				$li_data_menu = 'dropdown-submenu';
				
				$a_class = 'dropdown-item';
				$a_data_toggle= 'dropdown';
			}
			if($level == 3)
			{
				$title = $row['Title'];
				$li_class = 'dropdown';
				$li_data_menu = 'dropdown-submenu';
				
				$a_class = 'dropdown-item';
				$a_data_toggle= 'dropdown';
			}
			if($level >= 4)
			{
				$title = $row['Title'];
				$li_class = 'dropdown';
				$li_data_menu = 'dropdown-submenu';
				
				$a_class = 'dropdown-item';
				$a_data_toggle= 'dropdown';
			}
			
			
			if($child_count>0)
			{
				$li_class .= ' dropdown-submenu';
			}
			else{
				$li_data_menu = '';
			}
			
			if($child_count>0)
			{
				$child_click = 'data-toggle="dropdown"';
			}
			// $onclick = $row['Url']?'onclick="set_active_menu(\''.($row['idAppMenu']).'\')"':'';
			$onclick = '';
			$href = $row['Url']?'href="'.$base_url.$row['Url'].'"':'';
			$menu  .= '';
			$menu .= '
			<li id="'.preg_replace('/[^a-z0-9]/i', '_', ($row['Url'])).'" class="'.$li_class.'" data-menu="'.$li_data_menu.'">
				<a class="'.$a_class.'" '.$href.' '.$onclick.' '.$child_click.'>
					<i class="la '.$row['Icon'].'"></i>
					'.$title.'
				</a>';
			if($child_count>0)
			{
				$menu .= '<ul class="dropdown-menu">';
			}
			$menu .= $this->get_menu($row['idAppMenu'],$level);
			if($child_count>0)
			{
				$menu .= '</ul>';
			}
			$menu .='</li>';
		}
		return $menu;
	}
	
	function generate()
	{
		echo $this->get_menu(0,0);
	}
	
	function gen_priv($parent_id='',$level='',$user_id='')
	{
		$base_url = base_url();
			$this->CI->db->where('am.fidAppMenu = '.$parent_id.'');
			$this->CI->db->where('am.isActive = 1');
			$this->CI->db->join('(SELECT "fidAppMenu",om."idPrivilege"
							 FROM admpanel."msOperatorPrivilege" om
							 WHERE om."fidMsOperator" = '.$user_id.') pv','am.idAppMenu = pv.fidAppMenu','LEFT');
			$this->CI->db->order_by('OrderBy','ASC');
			$get_menu = $this->CI->db->get('admpanel.AppMenus am');
			$this->CI->db->where('opr.idMsOperator = '.$user_id.'');
			$get_operator	= $this->CI->db->get('admpanel.msOperator opr');
			$get_operator 	= $get_operator->row_array();
			// print_r($get_operator);
			// echo $this->CI->db->last_query().';<br>';
			$menu_list = $get_menu->result_array();
			
			$spasi = '';
			$priv = '';
			$href = '';
			
			for($i=0;$i<$level;$i++)
			{
				$spasi .= '&nbsp;&nbsp;&nbsp;&nbsp;';
			}
			
			$level = $level+1;
			
			foreach($menu_list as $key=>$row)
			{
				$this->CI->db->where('am.fidAppMenu = '.$row['idAppMenu'].'');
				$this->CI->db->where('am.isActive = 1');
				$this->CI->db->join('(SELECT "fidAppMenu",om."idPrivilege"
							 FROM admpanel."msOperatorPrivilege" om
							 WHERE om."fidMsOperator" = '.$user_id.') pv','am.idAppMenu = pv.fidAppMenu','LEFT');
				$this->CI->db->order_by('OrderBy','ASC');
				$check_child = $this->CI->db->get('admpanel.AppMenus am');
				// echo $this->CI->db->last_query().';<br>';
				$child_count = 0;
				$child_count = $check_child->num_rows();
				
				$title = $row['Title'];
				$description = $row['Description'];
				
				$onclick = '';
				$href = $row['Url']?'href="'.$base_url.$row['Url'].'"':'';
				$radio_checked = '';
				if($row['idAppMenu']==$get_operator['fidDashboard'])
				{
					$radio_checked = 'checked';
				}
				$hidden = '';
				if($row['Url']=='')
				{
					$hidden = 'hidden';
				}
				$priv .= '<tr>
							<th scope="row">
								'.$spasi.' 
								  <input '.($row['idPrivilege']?'checked':'').' type="checkbox" class="flat-blue" id="input-'.$row['idAppMenu'].'" name="t_priv_menu[]" value="'.$row['idAppMenu'].'">
								  <label for="input-'.$row['idAppMenu'].'"><a  href="javascript:void"><code>'.$title.'</code></a></label>
							</th>
							<td>
								'.$description.'
							</td>
							<td>
								<div class="icheck_minimal '.$hidden.' skin">
									<fieldset >
									  <input '.$radio_checked.' type="radio" id="priv_default_'.$row['idAppMenu'].'" name="t_priv_default" value="'.$row['idAppMenu'].'">
									  <label for="priv_default_'.$row['idAppMenu'].'"></label>
									</fieldset>
								</div>
							</td>
						</tr>';
				$priv .= $this->gen_priv($row['idAppMenu'],$level,$user_id);
			}
			
		return $priv;
	}
	
}