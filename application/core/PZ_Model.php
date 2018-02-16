<?php

class PZ_MOdel extends CI_Model{}

class Zico extends CI_Model
{
     public function query($f,$a)
	{
		if(!is_array($a)) exit('Array Query Required...');

		// selector
		$sl=(array_key_exists('select',$a))?$a['select']:'*';
		$this->db->select($sl);
		
		// filtering
		if(array_key_exists('filter',$a))$this->db->where($a['filter']);

		// like
		if(array_key_exists('like',$a))$this->db->like($a['like']);

		// limit
		if(array_key_exists('limit',$a)){
			$gf=(!is_array($a['limit']))?explode('|',$a['limit']):$a['limit'];
			$this->db->limit($gf[0],(isset($gf[1]))?$gf[1]:0);
		}

		// order
		if(array_key_exists('multi_order',$a)){
			foreach($a['multi_order'] as $rw){
				$this->db->order_by($rw[0],$rw[1]);
			}
		}
		else
		{
			if(array_key_exists('order',$a)){
				$gl=(!is_array($a['order']))?explode('|',$a['order']):$a['order'];
				$this->db->order_by($gl[0],(isset($gl[1]))?$gl[1]:'DESC');
			}
		}

		// Join model
		if(array_key_exists('multi_join',$a)){
			foreach($a['multi_join'] as $rw){
				$this->db->join($rw[0],$rw[1]);
			}
		}
		else{
			if(array_key_exists('join',$a))$this->db->join($a['join'][0],$a['join'][1]);
		}

		// Gruping
		if(array_key_exists('group',$a)){
			$this->db->group_by($a['group']);
		}

		return $this->db->get($f);
     }
     
     public function all($a,$b='*'){return $this->db->select($b)->get($a);}
	public function all_desc($a,$o,$b='*'){return $this->db->select($b)->order_by($o,'DESC')->get($a);}	
	public function filter($a,$c,$b='*'){return $this->db->select($b)->get_where($a,$c);}
	public function filter_desc($a,$c,$o,$b='*'){return $this->db->select($b)->order_by($o,'DESC')->get_where($a,$c);}
	public function search($a,$c,$b='*'){return $this->db->select($b)->like($c)->get($a);}
	public function search_desc($a,$c,$o,$b='*'){return $this->db->select($b)->like($c)->order_by($o,'DESC')->get($a);}	
	public function limit_all($a,$d=5,$e=0,$b='*'){return $this->db->select($b)->get($a,$d,$e);}
	public function limit_all_desc($a,$o,$d=5,$e=0,$b='*'){return $this->db->select($b)->order_by($o,'DESC')->get($a,$d,$e);}	
	public function limit_filter($a,$c,$d=5,$e=0,$b='*'){return $this->db->select($b)->where($c)->get($a,$d,$e);}
	public function limit_filter_desc($a,$c,$o,$d=5,$e=0,$b='*'){return $this->db->select($b)->where($c)->order_by($o,'DESC')->get($a,$d,$e);}	
	public function limit_search($a,$c,$d=5,$e=0,$b='*'){return $this->db->select($b)->like($c)->get($a,$d,$e);}
	public function limit_search_desc($a,$c,$o,$d=5,$e=0,$b='*'){return $this->db->select($b)->like($c)->order_by($o,'DESC')->get($a,$d,$e);}	
	public function count_all($a){return $this->db->count_all($a);}		
	public function count_filter($a,$c){return $this->db->where($c)->count_all_results($a);}
	public function count_search($a,$c){return $this->db->like($c)->count_all_results($a);}
	public function insert($a,$i){$this->db->insert($a,$i);return $this->db->insert_id();}		
	public function update($a,$u,$c){return $this->db->update($a,$u,$c);}		
	public function delete($a,$c){return $this->db->delete($a,$c);}
}