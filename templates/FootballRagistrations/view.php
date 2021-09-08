<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footballragistration $footballragistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Footballragistration'), ['action' => 'edit', $footballragistration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Footballragistration'), ['action' => 'delete', $footballragistration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footballragistration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Footballragistrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Footballragistration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="footballragistrations view content">
            <h3><?= h($footballragistration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $footballragistration->has('student') ? $this->Html->link($footballragistration->student->name, ['controller' => 'Students', 'action' => 'view', $footballragistration->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($footballragistration->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created To') ?></th>
                    <td><?= h($footballragistration->created_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($footballragistration->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
