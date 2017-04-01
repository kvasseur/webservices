<?php

	
	class BooksController extends AppController{

		public function initialize()
    	{
        parent::initialize();
        $this->loadComponent('RequestHandler');
    	}

		public function index(){

			if($this->request->is('get')){

				$books = $this->Book->find('all');
				//debug($books);
				$this->set(array(
		            'books' => $books,
		            '_serialize' => array('books')
		        ));

		        

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

	       		$this->set(array(
		            'book' => $book,
		            '_serialize' => array('book')
		        ));
			}

    	}

    	public function edit($id = null){

    		
    		if ($this->request->is('put')) {

		        $this->Book->id = $id;

		        if ($this->Book->save($this->request->data)) {

		          
		            return $this->redirect(array('action' => 'index'));

		        }

		    }

		      
    	}

    	public function delete($id = null){

    		$book = $this->Book->findById($id);

    		$this->Book->delete($id);
		
    		return $this->redirect(array('action' => 'index'));

	    	
    	}

    	public function getBooksMember($id = null){

    		

    		$books = $this->Book->find('all', array(
    		'conditions' => array(
    			'Member.id' => $id,
    			//'Member.id_book' => 'Book.id'

    		)
    		));
    			
    		$this->set(array(
	            'books' => $books,
	            '_serialize' => array('books')
		    ));

    	}

	}

?>