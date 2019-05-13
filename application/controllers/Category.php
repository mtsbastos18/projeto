<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {
    
    private $table = "categories";
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('categories');
    }

    public function index(){
        $data['category'] = array(
			'id'=> '',
			'name' => '',
        );
        $this->view('category/formCategory');
    }

    public function listCategories()
    {
		$categories = $this->categories->getAll();
        $this->view('category/listCategory',$categories);
	}

    public function save(){
        $id = $this->input->post("id");
        $name = $this->input->post('name');
        $category = array(
            'id' => $id,
            'name' => $name
        );
        
        if ($id != "") {
			if ($this->categories->update($this->table, $category)){
				redirect('/listar-categorias');
			}
		} else {
			if($this->categories->insert($this->table, $category)){
				redirect('/listar-categorias');
			}
		}
    }

    public function delete($id){
		if($this->categories->delete($this->table,$id)){
			redirect('/listar-categorias');
		}
	}

    public function edit($id){
		$category = $this->categories->getById($this->table,$id);
		$data['category'] = array(
			'id'=> $category[0]->id,
			'name' => $category[0]->name,
			
        );
		$this->view('category/formCategory',$data);
	}
}   
?>