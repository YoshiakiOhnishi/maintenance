<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

/**
 * SensorMaker Controller
 *
 * @property \App\Model\Table\SensorMakersTable $SensorMaker
 *
 * @method \App\Model\Entity\SensorMaker[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SensorMakersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public $paginate = [
        'limit' => 10,
        'order' => [
            'SensorMakers.maker_id' => 'asc'
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
        $this->set('sensormakers', $this->paginate());
        $this->set('_serialize', ['sensormakers']);
    }

    /**
     * View method
     *
     * @param string|null $id Sensor Maker id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function find() {
        $sensor_makers = [];
        $this->set('count', null);
        if ($this->request->is('post')) {
            $find = $this->request->data['find'];

            $count = $last = $this->Sensormakers->find()
            ->where(["name like " => '%' . $find . '%'])
            ->count();
            $this->set('count', $count);

            $sensor_makers = $this->Sensormakers->find()
                ->where(["name like " => '%' . $find . '%']);

            $sensor_makers = $this->paginate($sensor_makers);
        }    
        $this->set('sensormakers', $sensor_makers);
    }

    public function list($maker_id = null)
    {
        $sensormaker = $this->Sensormakers->get($maker_id, [
            'contain' => ['Sensors']
        ]);
        $this->set('sensormaker', $sensormaker);
        $this->set('_serialize', ['sensormaker']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sensor_maker = $this->Sensormakers->newEntity();
        $this->set('sensor_maker', $sensor_maker);
        if ($this->request->is('post')) {
            $sensor_maker = $this->Sensormakers->patchEntity($sensor_maker, $this->request->data);
            if ($this->Sensormakers->save($sensor_maker)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Sensor Maker id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($maker_id = null)
    {
        $sensor_maker = $this->Sensormakers->get($maker_id);
        if ($this->request->is(['post', 'put'])) {
            $sensor_maker = $this->Sensormakers->patchEntity($sensor_maker, $this->request->data);
            if ($this->Sensormakers->save($sensor_maker)) {
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->set('sensormakers', $sensor_maker);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Sensor Maker id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($maker_id = null)
    {
        $sensor_maker = $this->Sensormakers->get($maker_id);
        if ($this->request->is(['post', 'put'])) {
            if ($this->Sensormakers->delete($sensor_maker)) {
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->set('sensormakers', $sensor_maker);
        }
    }
}
