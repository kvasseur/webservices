<h1>Liste des livres</h1>
<table>
    <tr>
        <th>Numéro</th>
        <th>Titre</th>
        <th>Catégorie</th>
    </tr>

    <?php foreach ($books as $book): ?>
    <tr>
        <td><?php echo $book['Book']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($book['Book']['name'],
            array('controller' => 'books', 'action' => 'view', $book['Book']['id'])); ?>
        </td>
        <td><?php echo $book['Book']['category']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($book); ?>
</table>

<?php echo $this->Html->link(
    'Ajouter un livre',
    array('controller' => 'books', 'action' => 'add')
); ?>