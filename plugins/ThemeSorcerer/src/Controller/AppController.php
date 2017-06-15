<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
namespace ThemeSorcerer\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function beforeRender(Event $event)
    {

        $this->set('theme', Configure::read('Theme'));

        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        if ($this->request->getParam('prefix') === '/') {
            $this->viewBuilder()->theme('ThemeSorcerer');
        }
        // se o prefixo tiver admin use o tema da administração
        if ($this->request->getParam('prefix') === 'admin')
        {
            $this->viewBuilder()->theme('AdminLTE');
        }
    }
}
