<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * StaticPages Controller
 *
 *
 * @method \App\Model\Entity\StaticPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaticPagesController extends AppController
{
    public function users()
    {

    }

    public function about()
    {

    }
    
    public function contact()
    {

    }
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['display']);
    }

    public function display()
    {

    }

    public function index()
    {
        $staticPages = $this->paginate($this->StaticPages);

        $this->set(compact('staticPages'));
    }

    public function beforeRender(Event $event)
    {
        $this->layout ='site';
    }

}
