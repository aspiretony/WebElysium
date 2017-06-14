<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AccountBan Controller
 *
 * @property \App\Model\Table\AccountBanTable $AccountBan
 *
 * @method \App\Model\Entity\AccountBan[] paginate($object = null, array $settings = [])
 */
class AccountBanController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Accounts']
        ];
        $accountBan = $this->paginate($this->AccountBan);

        $this->set(compact('accountBan'));
        $this->set('_serialize', ['accountBan']);
    }

    /**
     * View method
     *
     * @param string|null $id Account Ban id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountBan = $this->AccountBan->get($id, [
            'contain' => ['Accounts']
        ]);

        $this->set('accountBan', $accountBan);
        $this->set('_serialize', ['accountBan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountBan = $this->AccountBan->newEntity();
        if ($this->request->is('post')) {
            $accountBan = $this->AccountBan->patchEntity($accountBan, $this->request->getData());
            if ($this->AccountBan->save($accountBan)) {
                $this->Flash->success(__('The account ban has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account ban could not be saved. Please, try again.'));
        }
        $accounts = $this->AccountBan->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('accountBan', 'accounts'));
        $this->set('_serialize', ['accountBan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Ban id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountBan = $this->AccountBan->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountBan = $this->AccountBan->patchEntity($accountBan, $this->request->getData());
            if ($this->AccountBan->save($accountBan)) {
                $this->Flash->success(__('The account ban has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account ban could not be saved. Please, try again.'));
        }
        $accounts = $this->AccountBan->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('accountBan', 'accounts'));
        $this->set('_serialize', ['accountBan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Ban id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountBan = $this->AccountBan->get($id);
        if ($this->AccountBan->delete($accountBan)) {
            $this->Flash->success(__('The account ban has been deleted.'));
        } else {
            $this->Flash->error(__('The account ban could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
