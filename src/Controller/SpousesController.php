<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Spouses Controller
 *
 * @method \App\Model\Entity\Spouse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpousesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $spouses = $this->paginate($this->Spouses);

        $this->set(compact('spouses'));
    }

    /**
     * View method
     *
     * @param string|null $id Spouse id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $spouse = $this->Spouses->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('spouse'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $spouse = $this->Spouses->newEmptyEntity();
        if ($this->request->is('post')) {
            $spouse = $this->Spouses->patchEntity($spouse, $this->request->getData());
            if ($this->Spouses->save($spouse)) {
                $this->Flash->success(__('The spouse has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The spouse could not be saved. Please, try again.'));
        }
        $this->set(compact('spouse'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Spouse id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $spouse = $this->Spouses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $spouse = $this->Spouses->patchEntity($spouse, $this->request->getData());
            if ($this->Spouses->save($spouse)) {
                $this->Flash->success(__('The spouse has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The spouse could not be saved. Please, try again.'));
        }
        $this->set(compact('spouse'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Spouse id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $spouse = $this->Spouses->get($id);
        if ($this->Spouses->delete($spouse)) {
            $this->Flash->success(__('The spouse has been deleted.'));
        } else {
            $this->Flash->error(__('The spouse could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
