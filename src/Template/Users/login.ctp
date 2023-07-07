<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card mt-3">
            <div class="card-body">
                <?= $this->Flash->render() ?>
                <?= $this->Form->create() ?>
                <fieldset>
                    <h2 class="text-center"><?= __('LOGIN') ?></h2>
                    <?= $this->Form->control('email', ['label' => 'E-mail', 'class' => 'form-control mb-3']) ?>
                    <?= $this->Form->control('password', ['label' => 'Senha', 'class' => 'form-control mb-3']) ?>
                </fieldset>
                <div class="text-center">
                    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-lg btn-secondary']); ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>