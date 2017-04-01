<h1>Ajouter un livre</h1>


<?= $this->Form->create('Book');?>
	<?= $this->Form->input('name', array('label'=>'Nom du livre', 'div' => 'form-group'));?>
	<?= $this->Form->input('category', array('label' => 'Catégorie','options'=>array('Fantastique' => 'Fantastique', 'Action' =>'Action', 'Romantique' =>'Romantique', 'Comedie' =>'Comedie'), 'empty' => ('Choisissez une catégorie')));?>
<?= $this->Form->end('Enregistrer le livre');?>

