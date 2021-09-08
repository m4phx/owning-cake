<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $spouse
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Spouse'), ['action' => 'edit', $spouse->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Spouse'), ['action' => 'delete', $spouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spouse->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Spouses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Spouse'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="spouses view content">
            <h3><?= h($spouse->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($spouse->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($spouse->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Friend Id') ?></th>
                    <td><?= $this->Number->format($spouse->friend_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($spouse->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
