<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $spouses
 */
?>
<div class="spouses index content">
    <?= $this->Html->link(__('New Spouse'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Spouses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('friend_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($spouses as $spouse): ?>
                <tr>
                    <td><?= $this->Number->format($spouse->id) ?></td>
                    <td><?= h($spouse->name) ?></td>
                    <td><?= $this->Number->format($spouse->friend_id) ?></td>
                    <td><?= h($spouse->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $spouse->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $spouse->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $spouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spouse->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>