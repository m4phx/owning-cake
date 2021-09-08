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
            <?= $this->Html->link(__('List Spouses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="spouses form content">
            <?= $this->Form->create($spouse) ?>
            <fieldset>
                <legend><?= __('Add Spouse') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('friend_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
