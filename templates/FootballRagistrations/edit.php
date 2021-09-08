<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footballragistration $footballragistration
 * @var string[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $footballragistration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $footballragistration->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Footballragistrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="footballragistrations form content">
            <?= $this->Form->create($footballragistration) ?>
            <fieldset>
                <legend><?= __('Edit Footballragistration') ?></legend>
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
