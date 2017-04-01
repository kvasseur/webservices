<h1>Editer le post</h1>
<?php
echo $this->Form->create('Book', array('type' => 'put'));
echo $this->Form->input('name', array('label' => 'Nom'));
echo $this->Form->input('category', array('options'=>array('Fantastique' => 'Fantastique', 'Action' =>'Action', 'Romantique' =>'Romantique', 'Comedie' =>'Comedie'), 'empty' => ('Choisissez une catégorie')));
echo $this->Form->end('Sauvegarder le livre');
?>