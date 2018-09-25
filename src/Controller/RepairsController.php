<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Repairs Controller
 *
 * @property \App\Model\Table\RepairsTable $Repairs
 *
 * @method \App\Model\Entity\Repair[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RepairsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bridges', 'Members', 'ConstructionCompanies']
        ];
        $repairs = $this->paginate($this->Repairs);

        $this->set(compact('repairs'));
    }

    /**
     * View method
     *
     * @param string|null $id Repair id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repair = $this->Repairs->get($id, [
            'contain' => ['Bridges', 'Members', 'ConstructionCompanies', 'Repairs']
        ]);

        $this->set('repair', $repair);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repair = $this->Repairs->newEntity();
        if ($this->request->is('post')) {
            $repair = $this->Repairs->patchEntity($repair, $this->request->getData());
            if ($this->Repairs->save($repair)) {
                $this->Flash->success(__('The repair has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repair could not be saved. Please, try again.'));
        }
        $bridges = $this->Repairs->Bridges->find('list', ['limit' => 200]);
        $members = $this->Repairs->Members->find('list', ['limit' => 200]);
        $constructionCompanies = $this->Repairs->ConstructionCompanies->find('list', ['limit' => 200]);
        $this->set(compact('repair', 'bridges', 'members', 'constructionCompanies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Repair id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repair = $this->Repairs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repair = $this->Repairs->patchEntity($repair, $this->request->getData());
            if ($this->Repairs->save($repair)) {
                $this->Flash->success(__('The repair has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repair could not be saved. Please, try again.'));
        }
        $bridges = $this->Repairs->Bridges->find('list', ['limit' => 200]);
        $members = $this->Repairs->Members->find('list', ['limit' => 200]);
        $constructionCompanies = $this->Repairs->ConstructionCompanies->find('list', ['limit' => 200]);
        $this->set(compact('repair', 'bridges', 'members', 'constructionCompanies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Repair id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repair = $this->Repairs->get($id);
        if ($this->Repairs->delete($repair)) {
            $this->Flash->success(__('The repair has been deleted.'));
        } else {
            $this->Flash->error(__('The repair could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
