<h1>Editer le post</h1>
<?php
echo $this->Form->create('Book', array('type' => 'put'));
echo $this->Form->input('name', array('label' => 'Nom'));
echo $this->Form->input('category', array('label' => 'Catégorie'));
echo $this->Form->end('Sauvegarder le livre');
?>