<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    /*public function initialize()
    {
        parent::initialize();
        
        $this->Auth->allow();
    }*/

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Your username or password was incorrect.'));
        }
    }

    public function logout() {
        $this->Flash->success(__('Good-Bye'));
        $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Images', 'Posts', 'Categories']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Images', 'Posts', 'Categories']
        ]);

        $this->set('user', $user);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $images = $this->Users->Images->find('list', ['limit' => 200]);
        $posts = $this->Users->Posts->find('list', ['limit' => 200]);
        $categories = $this->Users->Categories->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups', 'images', 'posts', 'categories'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $images = $this->Users->Images->find('list', ['limit' => 200]);
        $posts = $this->Users->Posts->find('list', ['limit' => 200]);
        $categories = $this->Users->Categories->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups', 'images', 'posts', 'categories'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
