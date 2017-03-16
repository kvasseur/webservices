<?php

	class BooksController extends AppController{
		public function add(){
			if($this->request->is('post')){
				$name = $this->Book->findByName($this->request->data['Book']['name']);
				if(empty($name)){
					$this->Book->create($this->request->data);
					$this->Book->save(null, true);
					debug('yep');
				}else{
					debug('nope');
				}
			}
		}


	}
?>