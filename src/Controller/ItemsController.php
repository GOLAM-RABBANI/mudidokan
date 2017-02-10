<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
        $request = $this->Items->find('all');
        $this->set('items',$request);
    }

    public function data()
    {
        $query = $this->Items->find()
            ->where(['code LIKE' => '%code%']);
       return $query;
    }
    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);

        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //get data from database
//        $formCategoriesTable = TableRegistry::get('Categories');
//        $categories = $formCategoriesTable->find()->toArray();
//        //send data to add file
//        $this->set('categories', $categories);


//        print_r($_POST);
//        exit;
        $item = $this->Items->newEntity();

        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->data);
//            print_r($item);
//            exit;
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $this->set(compact('item'));
        $this->set('_serialize', ['item']);
//        $this->viewBuilder()->layout('ajax');

    }
    public function getUpazilasByZila($district_name){
        $ta_geoDistricts = TableRegistry::get('GeoDistricts');
        $district_id = $ta_geoDistricts->find()->select(['id'])->where(['district_name_bng'=>$district_name])->first();

        $ta_geoUpzillas = TableRegistry::get('GeoUpazilas');
        $upazillas = $ta_geoUpzillas->find()->select(['upazila_name_bng'])->where(['geo_district_id'=>$district_id->id]);

        $this->response->type('application/json');
        $this->response->body(json_encode($upazillas));
        return $this->response;
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->data);
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $this->set(compact('item'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
