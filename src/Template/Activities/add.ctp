<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<div class="card mt-5">
    <div class="card-body">
        <?= $this->Form->create($activity) ?>
        <fieldset>
            <h3 class="text-center"><?= __('Nova Atividade') ?></h3>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <?= $this->Form->control('user_id', ['type' => 'hidden', 'value' => $this->request->getSession()->read('Auth.User.id')]); ?>
                    <?= $this->Form->control('title', ['label' => 'Nome', 'class' => 'form-control mb-3']); ?>
                </div>
                <div class="col-md-4">
                    <?= $this->Form->control('date', ['type' => 'text', 'label' => 'Data', 'class' => 'form-control mb-3 date']); ?>
                </div>
            </div>
            <?= $this->Form->control('description', ['label' => 'Descrição', 'class' => 'form-control mb-3']); ?>
            <div class="d-flex justify-content-between align-items-center mt-5">
                <h4 class="mb-0"><?= __('Checklist') ?></h4>
            </div>
            <hr>
            <div class="form-list">
                <div class="form-row mb-3">
                    <div class="d-flex gap-3">
                        <input type="text" class="form-control" name="checklists[]">
                        <button type="button" class="btn btn-secondary" onclick="addFormElements(this)">Adicionar</button>
                        <button type="button" class="btn btn-danger remove-btn" onclick="removeFormElements(this)">Remover</button>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="text-center mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-lg btn-secondary']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>