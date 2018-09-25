<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sensors Controller
 *
 * @property \App\Model\Table\SensorsTable $Sensors
 *
 * @method \App\Model\Entity\Sensor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SensorsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Sensors.sensor_id' => 'asc'
        ]
    ];

    public $helpers = [
        'Paginator' => ['templates' => 
            'paginator-templates']
    ];
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set('sensors', $this->paginate());
        $this->set('_serialize', ['sensors']);
    }

    public function find() {
        $sensors = [];
        $this->set('count', null);
        if ($this->request->is('post')) {
            $find = $this->request->data['find'];

            $count = $last = $this->Sensors->find()
            ->where(["sensor_name like " => '%' . $find . '%'])
            ->count();
            $this->set('count', $count);

            $sensors = $this->Sensors->find()
                ->where(["sensor_name like " => '%' . $find . '%']);

            $sensors = $this->paginate($sensors);
        }    
        $this->set('sensors', $sensors);
    }

    /**
     * View method
     *
     * @param string|null $id Sensor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function detail($sensor_id = null)
    {
        $sensor = $this->Sensors->get($sensor_id , [
            'contain' => ['SensorMakers']
        ]);

        $this->set('sensor', $sensor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sensor = $this->Sensors->newEntity();
        $this->set('sensor', $sensor);
        if ($this->request->is('post')) {
            $sensor = $this->Sensors->patchEntity($sensor, $this->request->data);
            if ($this->Sensors->save($sensor)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Sensor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($sensor_id = null)
    {
        $sensor = $this->Sensors->get($sensor_id);
        if ($this->request->is(['post', 'put'])) {
            $sensor = $this->Sensors->patchEntity($sensor, $this->request->data);
            if ($this->Sensors->save($sensor)) {
                return $this->redirect(['controller' => 'Sensors', 'action' => 'index', $sensor->maker_id]);
            }
        } else {
            $this->set('sensors', $sensor);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Sensor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($sensor_id = null)
    {
        $sensor = $this->Sensors->get($sensor_id);
        if ($this->request->is(['post', 'put'])) {
            if ($this->Sensors->delete($sensor)) {
                return $this->redirect(['controller' => 'Sensors', 'action' => 'index', $sensor->maker_id]);
            }
        } else {
            $this->set('sensor', $sensor);
        }
    }
}
