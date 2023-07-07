<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity[]|\Cake\Collection\CollectionInterface $activities
 */
?>
<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h3><?= __('Listagem de Atividades') ?></h3>
            <?= $this->Html->link(__('Nova Atividade'), ['action' => 'add'], ['class' => 'btn btn-lg btn-secondary float-end']) ?>
        </div>
        <hr>
        <div class="activities index large-9 medium-8 columns content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id', 'Código') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('title', 'Título') ?></th>
                        <th scope="col">Checklists</th>
                        <th scope="col"><?= $this->Paginator->sort('date', 'Data') ?></th>
                        <th scope="col" class="actions"><?= __('Ações') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activities as $activity) : ?>
                        <tr>
                            <td><?= $this->Number->format($activity->id) ?></td>
                            <td><?= h($activity->title) ?></td>
                            <td><?= count($activity->checklists) ?></td>
                            <td><?= h($activity->date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $activity->id], ['class' => 'btn btn-sm btn-primary']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $activity->id], ['class' => 'btn btn-sm btn-secondary']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $activity->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $activity->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php
                        $this->Paginator->setTemplates([
                            'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
                        ]);
                        $this->Paginator->setTemplates([
                            'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
                        ]);
                        ?>
                        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                        <?php
                        $this->Paginator->setTemplates([
                            'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
                        ]);
                        ?>
                        <?= $this->Paginator->numbers() ?>
                        <?php
                        $this->Paginator->setTemplates([
                            'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
                        ]);
                        $this->Paginator->setTemplates([
                            'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
                        ]);
                        ?>
                        <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                    </ul>
                </nav>
                <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} item(ns) de {{count}} total')]) ?></p>
            </div>
        </div>
    </div>
</div>