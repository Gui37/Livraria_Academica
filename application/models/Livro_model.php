<?php
	class Livro_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_livros($slug =FALSE){
			if ($slug ===FALSE){
				$query = $this->db->get('livros');
			return $query->result_array();
			}
			$query = $this->db->get_where('livros',array('slug'=> $slug));
			return $query->row_array();
		}
		public function create_livro(){
			$slug =url_title($this->input->livro('name'));
			$data =array(
			'title'=>$this->input->livro('name'),
			'slug'=>$slug,
			'body'=>$this->input->livro('username')
			);
			return $this->db->insert('livros',$data);
		}
	}


?>