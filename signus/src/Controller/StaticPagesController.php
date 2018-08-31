<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

/**
 * StaticPages Controller
 *
 *
 * @method \App\Model\Entity\StaticPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaticPagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['display']);
    }

    public function index()
    {
    
    }

    
    public function about()
    {

    }

    public function contact()
    {

    }

    public function beforeRender(Event $event)
    {
        $this->layout ='site';
    }
}

