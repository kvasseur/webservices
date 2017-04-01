<?php
	class Book extends AppModel{

		public $hasOne = array(
        'Member' => array(
            'className' => 'Member',
            'foreignKey' => 'id_book'
            
        )
    	);

		public $validate = array(
	        'name' => array(
	            'rule' => 'notBlank'
	        ),
	        'category' => array(
	            'rule' => 'notBlank'
	        )
    	);


	}

?>