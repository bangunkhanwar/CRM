<?php

class Main_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    function getMenu(){
		$this->order_by('menu_id');
		$query	=	$this->db->get('sys_menu');
		return $query;
	}
	
	function add_row($id, $parent, $li_attr, $label) {
		
		$this->data[$parent][] = array('id' => $id, 'li_attr' => $li_attr, 'label' => $label);
	}
	
	function generate_list($ul_attr = '') {
		
		return $this->ul(0, $ul_attr);
	}
	
	function ul($parent = 0, $attr = '') {
		static $i = 1;
		$indent = str_repeat("\t\t", $i);
		if (isset($this->data[$parent])) {
			if ($attr) {
				$attr = ' ' . $attr;
			}
			$html = "\n$indent";
			$html .= "<ul$attr>";
			$i++;
			foreach ($this->data[$parent] as $row) {
				$child = $this->ul($row['id']);
				$html .= "\n\t$indent";
				$html .= '<li'. $row['li_attr'] . '>';
				$html .= $row['label'];
				if ($child) {
					$i--;
					$html .= $child;
					$html .= "\n\t$indent";
				}
				$html .= '</li>';
			}
			$html .= "\n$indent</ul>";
			return $html;
		} else {
			return false;
		}
	}
	
}