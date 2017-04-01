<?php
	class Member extends AppModel{

		public $hasMany = array(
        'Book' => array(
            'className' => 'Book',
         

        )
    	);	

		public $validate = array(
	        'name' => array(
	            'rule' => 'notBlank'
	        )
    	);


	}

?>