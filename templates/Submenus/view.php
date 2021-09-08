<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $submenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Submenu'), ['action' => 'edit', $submenu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Submenu'), ['action' => 'delete', $submenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $submenu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Submenus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Submenu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="submenus view content">
            <h3><?= h($submenu->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($submenu->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($submenu->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Menu Id') ?></th>
                    <td><?= $this->Number->format($submenu->menu_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($submenu->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($submenu->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $submenu->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
