<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 02/12/2018
 * Time: 16:31
 */

namespace App\Controller;


use Cake\Event\Event;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub

        $this->Auth->allow(['adicionar', 'salvar']);
    }

    public function adicionar()
    {
        $usersTable = $this->getTableLocator()->get('Users');
        $user = $usersTable->newEntity();

        $this->set('user', $user);
    }

    public function salvar()
    {
        $usersTable = $this->getTableLocator()->get('Users');
        $user = $usersTable->newEntity($this->request->getData());

        if ($usersTable->save($user))
            $this->Flash->set("Usuário cadastrado com sucesso");
        else
            $this->Flash->set("Erro ao cadastrar o usuário");

        $this->redirect('users/adicionar');
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->set("Usuario ou senha inválidos", ['element' => 'error']);
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}