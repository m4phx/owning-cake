<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footballragistration[]|\Cake\Collection\CollectionInterface $footballragistrations
 */
?>
<div class="footballragistrations index content">
    <?= $this->Html->link(__('New Footballragistration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Footballragistrations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('created_to') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($footballragistrations as $footballragistration): ?>
                <tr>
                    <td><?= $this->Number->format($footballragistration->id) ?></td>
                    <td><?= $footballragistration->has('student') ? $this->Html->link($footballragistration->student->name, ['controller' => 'Students', 'action' => 'view', $footballragistration->student->id]) : '' ?></td>
                    <td><?= h($footballragistration->created_to) ?></td>
                    <td><?= h($footballragistration->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $footballragistration->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $footballragistration->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $footballragistration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footballragistration->id)]) ?>
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
