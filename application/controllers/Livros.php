<?php
class Livros extends CI_Controller{
public function index()
{
        

        $data['title'] = 'Livros Disponíveis'; 
		$data['livros'] = $this->livro_model->get_livros(); 
			
			
		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('livros/index', $data);
        $this->load->view('templates/footer', $data);
}

public function create()
{
        

        $data['title'] = 'inserir'; 
		 $this->form_validation->set_rules('name','Name' ,'required');
		
		$this->form_validation->set_rules('username','Userame' ,'required');
			
		if($this->form_validation->run() === FALSE) {
		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('livros/create', $data);
        $this->load->view('templates/footer', $data);
		
}else{
	$this->Livro_model->create_livro();
}
}
}
?>