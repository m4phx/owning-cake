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
        
        $articles = $this->Articles->find()
                                    ->order(['Articles.id' => 'DESC']);

        $articleList = $this->Articles->find('list'); //['keyField' => 'title'] to build link with title instead of id

        $this->set('articles', $this->paginate($articles, ['limit' => '2'])); //change to 10 after

        $this->set('articleList', $articleList);

    }
    
    public function about() {

        //about

    }

    public function contact() {

        //contact

    }

    public function view($id = null) {

        $this->loadModel('Articles');

        $article = $this->Articles->get($id);

        $this->set('article', $article);



    }

}