<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SensorSettings Controller
 *
 * @property \App\Model\Table\SensorSettingsTable $SensorSettings
 *
 * @method \App\Model\Entity\SensorSetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SensorSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Settings', 'Sensors', 'Bridges', 'Members']
        ];
        $sensorSettings = $this->paginate($this->SensorSettings);

        $this->set(compact('sensorSettings'));
    }

    /**
     * View method
     *
     * @param string|null $id Sensor Setting id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sensorSetting = $this->SensorSettings->get($id, [
            'contain' => ['Settings', 'Sensors', 'Bridges', 'Members']
        ]);

        $this->set('sensorSetting', $sensorSetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sensorSetting = $this->SensorSettings->newEntity();
        if ($this->request->is('post')) {
            $sensorSetting = $this->SensorSettings->patchEntity($sensorSetting, $this->request->getData());
            if ($this->SensorSettings->save($sensorSetting)) {
                $this->Flash->success(__('The sensor setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sensor setting could not be saved. Please, try again.'));
        }
        $settings = $this->SensorSettings->Settings->find('list', ['limit' => 200]);
        $sensors = $this->SensorSettings->Sensors->find('list', ['limit' => 200]);
        $bridges = $this->SensorSettings->Bridges->find('list', ['limit' => 200]);
        $members = $this->SensorSettings->Members->find('list', ['limit' => 200]);
        $this->set(compact('sensorSetting', 'settings', 'sensors', 'bridges', 'members'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sensor Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sensorSetting = $this->SensorSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sensorSetting = $this->SensorSettings->patchEntity($sensorSetting, $this->request->getData());
            if ($this->SensorSettings->save($sensorSetting)) {
                $this->Flash->success(__('The sensor setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sensor setting could not be saved. Please, try again.'));
        }
        $settings = $this->SensorSettings->Settings->find('list', ['limit' => 200]);
        $sensors = $this->SensorSettings->Sensors->find('list', ['limit' => 200]);
        $bridges = $this->SensorSettings->Bridges->find('list', ['limit' => 200]);
        $members = $this->SensorSettings->Members->find('list', ['limit' => 200]);
        $this->set(compact('sensorSetting', 'settings', 'sensors', 'bridges', 'members'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sensor Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sensorSetting = $this->SensorSettings->get($id);
        if ($this->SensorSettings->delete($sensorSetting)) {
            $this->Flash->success(__('The sensor setting has been deleted.'));
        } else {
            $this->Flash->error(__('The sensor setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
