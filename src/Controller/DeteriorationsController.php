<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deteriorations Controller
 *
 * @property \App\Model\Table\DeteriorationsTable $Deteriorations
 *
 * @method \App\Model\Entity\Deterioration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeteriorationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Inspections', 'Members']
        ];
        $deteriorations = $this->paginate($this->Deteriorations);

        $this->set(compact('deteriorations'));
    }

    /**
     * View method
     *
     * @param string|null $id Deterioration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deterioration = $this->Deteriorations->get($id, [
            'contain' => ['Inspections', 'Members', 'Deteriorations']
        ]);

        $this->set('deterioration', $deterioration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deterioration = $this->Deteriorations->newEntity();
        if ($this->request->is('post')) {
            $deterioration = $this->Deteriorations->patchEntity($deterioration, $this->request->getData());
            if ($this->Deteriorations->save($deterioration)) {
                $this->Flash->success(__('The deterioration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deterioration could not be saved. Please, try again.'));
        }
        $inspections = $this->Deteriorations->Inspections->find('list', ['limit' => 200]);
        $members = $this->Deteriorations->Members->find('list', ['limit' => 200]);
        $this->set(compact('deterioration', 'inspections', 'members'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Deterioration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deterioration = $this->Deteriorations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deterioration = $this->Deteriorations->patchEntity($deterioration, $this->request->getData());
            if ($this->Deteriorations->save($deterioration)) {
                $this->Flash->success(__('The deterioration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deterioration could not be saved. Please, try again.'));
        }
        $inspections = $this->Deteriorations->Inspections->find('list', ['limit' => 200]);
        $members = $this->Deteriorations->Members->find('list', ['limit' => 200]);
        $this->set(compact('deterioration', 'inspections', 'members'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Deterioration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deterioration = $this->Deteriorations->get($id);
        if ($this->Deteriorations->delete($deterioration)) {
            $this->Flash->success(__('The deterioration has been deleted.'));
        } else {
            $this->Flash->error(__('The deterioration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
