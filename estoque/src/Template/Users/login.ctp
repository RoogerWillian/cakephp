<?= $this->Flash->render('auth') ?>

    <h1>Acesso ao sistema</h1>

<?= $this->Form->create() ?>
<?= $this->Form->Input('username') ?>
<?= $this->Form->Input('password') ?>
<?= $this->Form->Button('Login') ?>
<?= $this->Form->end() ?>