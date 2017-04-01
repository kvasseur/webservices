<h1>Editer le Livre</h1>
<?php
echo $this->Form->create('Book', array('type' => 'put'));
echo $this->Form->input('name', array('label' => 'Nom', 'value' => $book['Book']['name']));
echo $this->Form->input('category', array('options'=>array('Fantastique' => 'Fantastique', 'Action' =>'Action', 'Romantique' =>'Romantique', 'Comedie' =>'Comedie'), 'empty' => ('Choisissez une catégorie'), 'default' => $book['Book']['category']));
echo $this->Form->end('Sauvegarder le livre');
?>