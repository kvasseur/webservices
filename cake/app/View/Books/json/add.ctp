<h1>Ajouter un livre</h1>


<?= $this->Form->create('Book');?>
	<?= $this->Form->input('name', array('label'=>'Nom du livre'));?>
	<?= $this->Form->input('category', array('options'=>array('Fantastique' => 'Fantastique', 'Action' =>'Action', 'Romantique' =>'Romantique', 'Comedie' =>'Comedie'), 'empty' => ('Choisissez une catégorie')));?>
<?= $this->Form->end('Enregistrer le livre');?>

