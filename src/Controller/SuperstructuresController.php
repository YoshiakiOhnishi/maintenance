<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Superstructures Controller
 *
 * @property \App\Model\Table\SuperstructuresTable $Superstructures
 *
 * @method \App\Model\Entity\Superstructure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperstructuresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bridges', 'BearingSupportMakers', 'ExtensionDeviceMakers', 'DesignCompanies', 'ConstructionCompanies']
        ];
        $superstructures = $this->paginate($this->Superstructures);

        $this->set(compact('superstructures'));
    }

    /**
     * View method
     *
     * @param string|null $id Superstructure id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superstructure = $this->Superstructures->get($id, [
            'contain' => ['Bridges', 'BearingSupportMakers', 'ExtensionDeviceMakers', 'DesignCompanies', 'ConstructionCompanies']
        ]);

        $this->set('superstructure', $superstructure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superstructure = $this->Superstructures->newEntity();
        if ($this->request->is('post')) {
            $superstructure = $this->Superstructures->patchEntity($superstructure, $this->request->getData());
            if ($this->Superstructures->save($superstructure)) {
                $this->Flash->success(__('The superstructure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The superstructure could not be saved. Please, try again.'));
        }
        $bridges = $this->Superstructures->Bridges->find('list', ['limit' => 200]);
        $bearingSupportMakers = $this->Superstructures->BearingSupportMakers->find('list', ['limit' => 200]);
        $extensionDeviceMakers = $this->Superstructures->ExtensionDeviceMakers->find('list', ['limit' => 200]);
        $designCompanies = $this->Superstructures->DesignCompanies->find('list', ['limit' => 200]);
        $constructionCompanies = $this->Superstructures->ConstructionCompanies->find('list', ['limit' => 200]);
        $this->set(compact('superstructure', 'bridges', 'bearingSupportMakers', 'extensionDeviceMakers', 'designCompanies', 'constructionCompanies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Superstructure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superstructure = $this->Superstructures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superstructure = $this->Superstructures->patchEntity($superstructure, $this->request->getData());
            if ($this->Superstructures->save($superstructure)) {
                $this->Flash->success(__('The superstructure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The superstructure could not be saved. Please, try again.'));
        }
        $bridges = $this->Superstructures->Bridges->find('list', ['limit' => 200]);
        $bearingSupportMakers = $this->Superstructures->BearingSupportMakers->find('list', ['limit' => 200]);
        $extensionDeviceMakers = $this->Superstructures->ExtensionDeviceMakers->find('list', ['limit' => 200]);
        $designCompanies = $this->Superstructures->DesignCompanies->find('list', ['limit' => 200]);
        $constructionCompanies = $this->Superstructures->ConstructionCompanies->find('list', ['limit' => 200]);
        $this->set(compact('superstructure', 'bridges', 'bearingSupportMakers', 'extensionDeviceMakers', 'designCompanies', 'constructionCompanies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Superstructure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superstructure = $this->Superstructures->get($id);
        if ($this->Superstructures->delete($superstructure)) {
            $this->Flash->success(__('The superstructure has been deleted.'));
        } else {
            $this->Flash->error(__('The superstructure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
