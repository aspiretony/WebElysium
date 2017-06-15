<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 *
 * @method \App\Model\Entity\Noticia[] paginate($object = null, array $settings = [])
 */
class NoticiasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $noticias = $this->paginate($this->Noticias);

        $this->set(compact('noticias'));
        $this->set('_serialize', ['noticias']);
    }

    /**
     * View method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => []
        ]);

        $this->set('noticia', $noticia);
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    /**
     * Edit method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    /**
     * Delete method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

}
