<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h3><?= __('Listagem de Usuários') ?></h3>
            <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'btn btn-lg btn-secondary float-end']) ?>
        </div>
        <hr>
        <div class="">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id', '#') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name', 'Nome') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                        <th scope="col" class="actions"><?= __('Ações') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-secondary']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Você tem certeza que quer deletar # {0}?', $user->id)]) ?>
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