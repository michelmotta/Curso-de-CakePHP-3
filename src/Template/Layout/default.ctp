<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('style.css') ?> -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: #f6f6f6;
        }

        input[type=checkbox] {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5);
            /* IE */
            -moz-transform: scale(1.5);
            /* FF */
            -webkit-transform: scale(1.5);
            /* Safari and Chrome */
            -o-transform: scale(1.5);
            /* Opera */
            padding: 8px;
            margin-top: 11px;
            margin-left: 2px !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <?= $this->Html->link(
                                'My Activities',
                                ['controller' => 'Pages', 'action' => 'index', '_full' => true],
                                ['class' => 'navbar-brand']
                            ); ?>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <?= $this->Html->link(
                                        'Início',
                                        ['controller' => 'Pages', 'action' => 'index', '_full' => true],
                                        ['class' => 'nav-link']
                                    ); ?>
                                    <?php if (!$this->request->session()->read('Auth.User')) { ?>
                                        <?= $this->Html->link(
                                            'Login',
                                            ['controller' => 'Users', 'action' => 'login', '_full' => true],
                                            ['class' => 'nav-link']
                                        ); ?>
                                    <?php } ?>
                                    <?php if ($this->request->session()->read('Auth.User')) { ?>
                                        <?= $this->Html->link(
                                            'Atividades',
                                            ['controller' => 'Activities', 'action' => 'index', '_full' => true],
                                            ['class' => 'nav-link']
                                        ); ?>
                                        <?= $this->Html->link(
                                            'Usuários',
                                            ['controller' => 'Users', 'action' => 'index', '_full' => true],
                                            ['class' => 'nav-link']
                                        ); ?>
                                        <?= $this->Html->link(
                                            'Logout',
                                            ['controller' => 'Users', 'action' => 'logout', '_full' => true],
                                            ['class' => 'nav-link']
                                        ); ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.date').mask('00/00/0000');
        })

        function addFormElements(current) {
            $(current).parents('.form-list').append($(current).parents('.form-row').clone())
        }

        function removeFormElements(current) {
            if ($('.form-row').length === 1) {
                return;
            }
            $(current).parents('.form-row').remove();
        }
    </script>
</body>

</html>