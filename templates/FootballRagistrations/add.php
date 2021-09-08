<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footballragistration $footballragistration
 * @var \Cake\Collection\CollectionInterface|string[] $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Footballragistrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="footballragistrations form content">
            <?= $this->Form->create($footballragistration) ?>
            <fieldset>
                <legend><?= __('Add Footballragistration') ?></legend>
                <?php
                    echo $this->Form->control('student_id', ['options' => $students]);
                    echo $this->Form->control('created_to');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
