<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class BlogsController extends AppController
{
    
    public function beforeFilter(EventInterface $event) {
        
        $this->viewBuilder()->setLayout('blog');

    }

    public function index() {
         
        $this->loadModel('Articles');
        
        $articles = $this->Articles->find('all')->order(['Articles.id' => 'DESC']);

        $this->set('articles', $articles);

    }
    
    public function about() {

        //about

    }

    public function contact() {

        //contact

    }

}