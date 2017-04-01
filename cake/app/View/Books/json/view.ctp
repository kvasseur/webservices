

<h1><?php echo h($book['Book']['name']); ?></h1>

<p><small>Catégorie : <?php echo $book['Book']['category']; ?></small></p>

<?php echo $this->Form->postLink(
    'Supprimer le livre',
    array('controller' => 'books', 'action' => 'delete', $book['Book']['id']),
    array('confirm' => 'Etes-vous sûr ?'));
?>


<?php echo $this->Html->link(
    'Editer',
    array('action' => 'edit', $book['Book']['id'])
); 
?>


