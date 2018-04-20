<?php

class ManageCategoriesController extends Controller{
	
	public $categoryObject;

    protected $access = "1";
	
	public function index() {
        $this->categoryObject = new Categories();
        $categories = $this->categoryObject->getCategories();
        $this->set('categories',$categories);
    }

	
	public function add(){
		$this->categoryObject = new Categories();
		$result = $this->categoryObject->addCategory($_POST['name']);
		$this->set('message', $result);
	}
	
	public function edit($categoryID){
		$this->categoryObject = new Categories();
		$category = $this->categoryObject->getCategory($categoryID);
			
		$this->set('categoryID', $category['categoryID']);
		$this->set('name', $category['name']);
	}
	
	public function getCategories(){
		$this->categoryObject = new Categories();
		$categories = $this->categoryObject->getCategories();
		$this->set('categories',$categories);
	}

	public function getCategory($cID){
	    $this->categoryObject = new Categories();
	    $category = $this->categoryObject->getCategory($cID);
	    $this->set('category', $category);
    }
	
	public function update(){
		$this->categoryObject = new Categories();
		$result = $this->categoryObject->updateCategory($_GET['categoryID'],$_POST['name']);
		$outcome = $this->categoryObject->getCategories();
		$this->set('categories',$outcome);
		$this->set('message', $result);
		$this->set('task', 'update');
	}

	public function delete(){
	    $this->categoryObject = new Categories();
	    $result = $this->categoryObject->deleteCategory($_GET['categoryID']);
	    $this->set('message', $result);
    }
}
