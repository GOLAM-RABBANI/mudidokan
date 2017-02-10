<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Items'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <h3><?= __('Items') ?></h3>
<table>
    <tr>
        <th>code</th>
        <th>name</th>
        <th>price</th>
<!--        <th>category</th>-->
        <th>units</th>
        <th>action</th>
    </tr>
    <?php foreach ($items as $item):?>
        <tr>
            <td><?php echo $item->code?></td>
            <td><?php echo $item->name?></td>
            <td><?php echo $item->price?></td>
<!--            <td>--><?php //echo $item->category_name?><!--</td>-->
            <td><?php echo $item->units?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
            </td>


        </tr>
    <?php endforeach;?>
</table>
</div>>