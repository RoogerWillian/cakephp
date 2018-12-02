<?php

echo $this->Form->create($produto, ['action' => 'salva']);
echo $this->Form->Input('id');
echo $this->Form->Input('nome');
echo $this->Form->Input('preco');
echo $this->Form->Input('descricao');
echo $this->Form->Button('Salvar');
echo $this->Form->end();
