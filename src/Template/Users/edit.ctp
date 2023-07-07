<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="card mt-3">
    <div class="card-body">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <h3 class="text-center"><?= __('Editar Usuário') ?> - <?= $user->name; ?></h3>
            <?= $this->Form->control('name', ['label' => 'Nome', 'class' => 'form-control mb-3']); ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $this->Form->control('email', ['label' => 'E-mail', 'class' => 'form-control mb-3']); ?>
                </div>
                <div class="col-md-6">
                    <?= $this->Form->control('password', ['label' => 'Senha', 'class' => 'form-control mb-3']); ?>
                </div>
            </div>
        </fieldset>
        <div class="text-center">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-lg btn-secondary']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>