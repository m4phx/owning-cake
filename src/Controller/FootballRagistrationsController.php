<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Footballragistrations Controller
 *
 * @property \App\Model\Table\FootballragistrationsTable $Footballragistrations
 * @method \App\Model\Entity\Footballragistration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FootballragistrationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students'],
        ];
        $footballragistrations = $this->paginate($this->Footballragistrations);

        $this->set(compact('footballragistrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Footballragistration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $footballragistration = $this->Footballragistrations->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('footballragistration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $footballragistration = $this->Footballragistrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $footballragistration = $this->Footballragistrations->patchEntity($footballragistration, $this->request->getData());
            if ($this->Footballragistrations->save($footballragistration)) {
                $this->Flash->success(__('The footballragistration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The footballragistration could not be saved. Please, try again.'));
        }
        $students = $this->Footballragistrations->Students->find('list', ['limit' => 200]);
        $this->set(compact('footballragistration', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Footballragistration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $footballragistration = $this->Footballragistrations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $footballragistration = $this->Footballragistrations->patchEntity($footballragistration, $this->request->getData());
            if ($this->Footballragistrations->save($footballragistration)) {
                $this->Flash->success(__('The footballragistration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The footballragistration could not be saved. Please, try again.'));
        }
        $students = $this->Footballragistrations->Students->find('list', ['limit' => 200]);
        $this->set(compact('footballragistration', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Footballragistration id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $footballragistration = $this->Footballragistrations->get($id);
        if ($this->Footballragistrations->delete($footballragistration)) {
            $this->Flash->success(__('The footballragistration has been deleted.'));
        } else {
            $this->Flash->error(__('The footballragistration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
