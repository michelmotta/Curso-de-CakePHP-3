<div class="p-5 mb-4 bg-light rounded-3 mt-5 bg-dark text-white">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-white">My Activities</h1>
        <p class="col-md-8 fs-4">Este é um sistema desenvolvido como proposta de aplicação dos conhecimentos adquiridos do curso de CakePHP3</p>
        <?= $this->Html->link(
            'Ver Atividades',
            ['controller' => 'Activities', 'action' => 'index', '_full' => true],
            ['class' => 'btn btn-primary btn-lg']
        ); ?>
    </div>
</div>