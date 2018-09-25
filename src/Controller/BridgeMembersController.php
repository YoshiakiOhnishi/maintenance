<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BridgeMembers Controller
 *
 * @property \App\Model\Table\BridgeMembersTable $BridgeMembers
 *
 * @method \App\Model\Entity\BridgeMember[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BridgeMembersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Members']
        ];
        $bridgeMembers = $this->paginate($this->BridgeMembers);

        $this->set(compact('bridgeMembers'));
    }

    /**
     * View method
     *
     * @param string|null $id Bridge Member id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bridgeMember = $this->BridgeMembers->get($id, [
            'contain' => ['Members']
        ]);

        $this->set('bridgeMember', $bridgeMember);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bridgeMember = $this->BridgeMembers->newEntity();
        if ($this->request->is('post')) {
            $bridgeMember = $this->BridgeMembers->patchEntity($bridgeMember, $this->request->getData());
            if ($this->BridgeMembers->save($bridgeMember)) {
                $this->Flash->success(__('The bridge member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bridge member could not be saved. Please, try again.'));
        }
        $members = $this->BridgeMembers->Members->find('list', ['limit' => 200]);
        $this->set(compact('bridgeMember', 'members'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bridge Member id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bridgeMember = $this->BridgeMembers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bridgeMember = $this->BridgeMembers->patchEntity($bridgeMember, $this->request->getData());
            if ($this->BridgeMembers->save($bridgeMember)) {
                $this->Flash->success(__('The bridge member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bridge member could not be saved. Please, try again.'));
        }
        $members = $this->BridgeMembers->Members->find('list', ['limit' => 200]);
        $this->set(compact('bridgeMember', 'members'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bridge Member id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bridgeMember = $this->BridgeMembers->get($id);
        if ($this->BridgeMembers->delete($bridgeMember)) {
            $this->Flash->success(__('The bridge member has been deleted.'));
        } else {
            $this->Flash->error(__('The bridge member could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
