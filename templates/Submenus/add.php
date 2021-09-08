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
            <?= $this->Html->link(__('List Submenus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="submenus form content">
            <?= $this->Form->create($submenu) ?>
            <fieldset>
                <legend><?= __('Add Submenu') ?></legend>
                <?php
                    echo $this->Form->control('menu_id');
                    echo $this->Form->control('name');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
