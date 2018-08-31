<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public $components = [
        'Acl' => [
            'className' => 'Acl.Acl'
        ]
    ];

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => [
                'Acl.Actions' => ['actionPath' => 'controllers']
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'plugin' => false,
                'controller' => 'Pages',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'plugin' => false,
                'controller' => 'Pages',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'prefix' => false
            ],
            'authError' => 'You are not authorized to access that location.',
            'flash' => [
                'element' => 'error'
            ]
        ]);

    }

    public function beforeFilter(Event $event)
    {
        $prefix = $this->request->params['prefix'] ?? null;

        if ($prefix == 'admin') {
            $this->viewBuilder()->layout('TwitterBootstrap.adminlte');
        }
    }
}
