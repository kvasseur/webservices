<h1>Ajouter un livre</h1>


<?= $this->Form->create('Book');?>
	<?= $this->Form->input('name', array('label'=>'Nom du livre'));?>
	<?= $this->Form->input('category', array('label'=>'Catégorie'));?>
<?= $this->Form->end('Enregistrer le livre');?>

