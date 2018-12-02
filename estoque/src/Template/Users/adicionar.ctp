<h1>Cadastrar usuário</h1>

<?= $this->Form->create($user, ['action' => 'salvar']) ?>
<?= $this->Form->Input('username') ?>
<?= $this->Form->Input('password') ?>
<?= $this->Form->Button('Cadastrar') ?>
<?= $this->Form->end() ?>