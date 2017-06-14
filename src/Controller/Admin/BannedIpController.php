<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BannedIp Controller
 *
 *
 * @method \App\Model\Entity\BannedIp[] paginate($object = null, array $settings = [])
 */
class BannedIpController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bannedIp = $this->paginate($this->BannedIp);

        $this->set(compact('bannedIp'));
        $this->set('_serialize', ['bannedIp']);
    }

    /**
     * View method
     *
     * @param string|null $id Banned Ip id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bannedIp = $this->BannedIp->get($id, [
            'contain' => []
        ]);

        $this->set('bannedIp', $bannedIp);
        $this->set('_serialize', ['bannedIp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bannedIp = $this->BannedIp->newEntity();
        if ($this->request->is('post')) {
            $bannedIp = $this->BannedIp->patchEntity($bannedIp, $this->request->getData());
            if ($this->BannedIp->save($bannedIp)) {
                $this->Flash->success(__('The banned ip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banned ip could not be saved. Please, try again.'));
        }
        $this->set(compact('bannedIp'));
        $this->set('_serialize', ['bannedIp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Banned Ip id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bannedIp = $this->BannedIp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannedIp = $this->BannedIp->patchEntity($bannedIp, $this->request->getData());
            if ($this->BannedIp->save($bannedIp)) {
                $this->Flash->success(__('The banned ip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banned ip could not be saved. Please, try again.'));
        }
        $this->set(compact('bannedIp'));
        $this->set('_serialize', ['bannedIp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Banned Ip id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bannedIp = $this->BannedIp->get($id);
        if ($this->BannedIp->delete($bannedIp)) {
            $this->Flash->success(__('The banned ip has been deleted.'));
        } else {
            $this->Flash->error(__('The banned ip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
