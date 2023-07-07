<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<div class="card mt-3">
    <div class="card-body">
        <h3 class="text-center">Visualizar</h3>
        <hr>
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Título') ?></th>
                <td><?= h($activity->title) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Código') ?></th>
                <td><?= $this->Number->format($activity->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data') ?></th>
                <td><?= h($activity->date) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Criado') ?></th>
                <td><?= h($activity->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modificado') ?></th>
                <td><?= h($activity->modified) ?></td>
            </tr>
        </table>
        <div class="row">
            <h4><?= __('Descrição') ?></h4>
            <?= $this->Text->autoParagraph(h($activity->description)); ?>
        </div>
        <hr>
        <div class="row mt-5">
            <h4 class="text-center"><?= __('Checklists') ?></h4>
            <ul class="list-group">
                <?php foreach ($activity->checklists as $checklist) : ?>
                    <li class="list-group-item"><?= $checklist; ?></li>
                <?php endforeach;  ?>
            </ul>
        </div>
    </div>
</div>