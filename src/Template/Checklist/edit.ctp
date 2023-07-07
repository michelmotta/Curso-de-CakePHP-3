<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Checklist $checklist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $checklist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $checklist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Checklist'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="checklist form large-9 medium-8 columns content">
    <?= $this->Form->create($checklist) ?>
    <fieldset>
        <legend><?= __('Edit Checklist') ?></legend>
        <?php
            echo $this->Form->control('activity_id', ['options' => $activities]);
            echo $this->Form->control('title');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
