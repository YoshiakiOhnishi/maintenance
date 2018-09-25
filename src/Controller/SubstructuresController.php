<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Substructures Controller
 *
 * @property \App\Model\Table\SubstructuresTable $Substructures
 *
 * @method \App\Model\Entity\Substructure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubstructuresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bridges', 'DesignCompanies', 'ConstructionCompanies']
        ];
        $substructures = $this->paginate($this->Substructures);

        $this->set(compact('substructures'));
    }

    /**
     * View method
     *
     * @param string|null $id Substructure id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $substructure = $this->Substructures->get($id, [
            'contain' => ['Bridges', 'DesignCompanies', 'ConstructionCompanies']
        ]);

        $this->set('substructure', $substructure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $substructure = $this->Substructures->newEntity();
        if ($this->request->is('post')) {
            $substructure = $this->Substructures->patchEntity($substructure, $this->request->getData());
            if ($this->Substructures->save($substructure)) {
                $this->Flash->success(__('The substructure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substructure could not be saved. Please, try again.'));
        }
        $bridges = $this->Substructures->Bridges->find('list', ['limit' => 200]);
        $designCompanies = $this->Substructures->DesignCompanies->find('list', ['limit' => 200]);
        $constructionCompanies = $this->Substructures->ConstructionCompanies->find('list', ['limit' => 200]);
        $this->set(compact('substructure', 'bridges', 'designCompanies', 'constructionCompanies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Substructure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $substructure = $this->Substructures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $substructure = $this->Substructures->patchEntity($substructure, $this->request->getData());
            if ($this->Substructures->save($substructure)) {
                $this->Flash->success(__('The substructure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substructure could not be saved. Please, try again.'));
        }
        $bridges = $this->Substructures->Bridges->find('list', ['limit' => 200]);
        $designCompanies = $this->Substructures->DesignCompanies->find('list', ['limit' => 200]);
        $constructionCompanies = $this->Substructures->ConstructionCompanies->find('list', ['limit' => 200]);
        $this->set(compact('substructure', 'bridges', 'designCompanies', 'constructionCompanies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Substructure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $substructure = $this->Substructures->get($id);
        if ($this->Substructures->delete($substructure)) {
            $this->Flash->success(__('The substructure has been deleted.'));
        } else {
            $this->Flash->error(__('The substructure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
