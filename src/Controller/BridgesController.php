<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bridges Controller
 *
 * @property \App\Model\Table\BridgesTable $Bridges
 *
 * @method \App\Model\Entity\Bridge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BridgesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Managers']
        ];
        $bridges = $this->paginate($this->Bridges);

        $this->set(compact('bridges'));
    }

    /**
     * View method
     *
     * @param string|null $id Bridge id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bridge = $this->Bridges->get($id, [
            'contain' => ['Managers', 'Bridges', 'Inspections', 'Repairs', 'SensorSettings', 'Substructures', 'Superstructures']
        ]);

        $this->set('bridge', $bridge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bridge = $this->Bridges->newEntity();
        $this->set('bridge', $bridge);
        if ($this->request->is('post')) {
            $bridge = $this->Bridges->patchEntity($bridge, $this->request->data);
            if ($this->Bridges->save($bridge)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Bridge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bridge = $this->Bridges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bridge = $this->Bridges->patchEntity($bridge, $this->request->getData());
            if ($this->Bridges->save($bridge)) {
                $this->Flash->success(__('The bridge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bridge could not be saved. Please, try again.'));
        }
        $managers = $this->Bridges->Managers->find('list', ['limit' => 200]);
        $this->set(compact('bridge', 'managers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bridge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bridge = $this->Bridges->get($id);
        if ($this->Bridges->delete($bridge)) {
            $this->Flash->success(__('The bridge has been deleted.'));
        } else {
            $this->Flash->error(__('The bridge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
