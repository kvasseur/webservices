<?php

	
	class BooksController extends AppController{

		public function index(){

			if($this->request->is('get')){

				$books = $this->Book->find('all');
				//debug($books);
				$this->set('books', $books);

				if($books == null){
					echo 'Aucun livre dans la base de données';
				}
			}
		}

		public function add(){

			if($this->request->is('post')){

				$name=$this->Book->findByName($this->request->data['Book']['name']);
				
				if(empty($name)){

					$this->Book->create($this->request->data);
					$this->Book->save(null, true);
					echo "Insertion réussie!";
					return $this->redirect(array('action' => 'index'));
				
				}else{
					echo "Erreur : ce livre existe déjà dans la base de données";
				}

			}
		}

		public function view($id = null) {

			if($this->request->is('get')){

		        $book = $this->Book->findById($id);

	       		$this->set('book', $book);
			}

    	}

    	/*public function put($id = null){

    		$book = $this->Book->findById($id);


    	}*/

    	public function delete($id = null){

    		$book = $this->Book->findById($id);

    		$this->Book->delete($id);

    		return $this->redirect(array('action' => 'index'));
	    	
    	}

	}

?>