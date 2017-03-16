<?php

	class Book extends AppModel{

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