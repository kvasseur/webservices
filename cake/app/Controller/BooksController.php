<?php

	
	class BooksController extends AppController{

		public function index(){
			$books = $this->Book->find('all');
			//debug($books);
			$this->set('books', $books);
		}

		public function add(){
			if($this->request->is('post')){

				debug($this->request->data);
				$name=$this->Book->findByName($this->request->data['Book']['name']);
				
				if(empty($name)){

					$this->Book->create($this->request->data);
					$this->Book->save(null, true);
					debug("Insertion réussie!");
				
				}else{
					debug("Erreur : enregistrement déjà existant");
				}

			}
		}

		public function view($id = null) {



	        $book = $this->Book->findById($id);

       		$this->set('book', $book);
    	}

	}

?>