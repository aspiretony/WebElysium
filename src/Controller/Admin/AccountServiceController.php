<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AccountService Controller
 *
 * @property \App\Model\Table\AccountServiceTable $AccountService
 *
 * @method \App\Model\Entity\AccountService[] paginate($object = null, array $settings = [])
 */
class AccountServiceController extends AppController
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
        $accountService = $this->paginate($this->AccountService);

        $this->set(compact('accountService'));
        $this->set('_serialize', ['accountService']);
    }

    /**
     * View method
     *
     * @param string|null $id Account Service id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountService = $this->AccountService->get($id, [
            'contain' => ['Accounts', 'Service']
        ]);

        $this->set('accountService', $accountService);
        $this->set('_serialize', ['accountService']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountService = $this->AccountService->newEntity();
        if ($this->request->is('post')) {
            $accountService = $this->AccountService->patchEntity($accountService, $this->request->getData());
            if ($this->AccountService->save($accountService)) {
                $this->Flash->success(__('The account service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account service could not be saved. Please, try again.'));
        }
        $accounts = $this->AccountService->Accounts->find('list', ['limit' => 200]);
        $this->set(compact('accountService', 'accounts'));
        $this->set('_serialize', ['accountService']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountService = $this->AccountService->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountService = $this->AccountService->patchEntity($accountService, $this->request->getData());
            if ($this->AccountService->save($accountService)) {
                $this->Flash->success(__('The account service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account service could not be saved. Please, try again.'));
        }
        $accounts = $this->AccountService->Accounts->find('list', ['limit' => 200]);
        $services = $this->AccountService->Service->find('list', ['limit' => 200]);
        $this->set(compact('accountService', 'accounts', 'services'));
        $this->set('_serialize', ['accountService']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountService = $this->AccountService->get($id);
        if ($this->AccountService->delete($accountService)) {
            $this->Flash->success(__('The account service has been deleted.'));
        } else {
            $this->Flash->error(__('The account service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
