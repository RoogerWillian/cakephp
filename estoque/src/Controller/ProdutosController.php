<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 19/11/2018
 * Time: 19:16
 */

namespace App\Controller;


use App\Model\Entity\Produto;
use Cake\ORM\Locator\TableLocator;
use Cake\ORM\TableRegistry;

class ProdutosController extends AppController
{

    public function index()
    {
        $produtosTable = $this->getTableLocator()->get("Produtos");

        $produtos = $produtosTable->find('all');

        $this->set("produtos", $produtos);
    }

    public function novo()
    {
        $produtosTable = $this->getTableLocator()->get("Produtos");
        $produto = $produtosTable->newEntity();

        $this->set("produto", $produto);
    }

    public function salva()
    {
        $produtosTable = $this->getTableLocator()->get("Produtos");
        $produto = $produtosTable->newEntity($this->request->getData());

        if ($produtosTable->save($produto))
            $this->Flash->set("Produto salvo com sucesso", ['element' => 'success']);
        else
            $this->Flash->set("Problema ao salvar produto", ['element' => 'error']);

        $this->redirect("produtos");
    }

    public function editar($id)
    {
        $produtosTable = $this->getTableLocator()->get('Produtos');

        $produto = $produtosTable->get($id);
        $this->set('produto', $produto);

        $this->render('novo');
    }

    public function apagar($id)
    {
        $produtosTable = $this->getTableLocator()->get('Produtos');
        $produto = $produtosTable->get($id);

        if ($produtosTable->delete($produto)) {
            $msg = "Produto apagado com sucesso";
            $this->Flash->set($msg, ['element' => 'error']);
        } else {
            $msg = "Erro ao deletar o produto";
            $this->Flash->set($msg, ['element' => 'error']);
        }

        $this->redirect('produtos');
    }
}