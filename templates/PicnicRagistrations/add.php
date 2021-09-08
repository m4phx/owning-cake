<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $picnicRagistration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Picnic Ragistrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="picnicRagistrations form content">
            <?= $this->Form->create($picnicRagistration) ?>
            <fieldset>
                <legend><?= __('Add Picnic Ragistration') ?></legend>
                <?php
                    echo $this->Form->control('student_id');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
