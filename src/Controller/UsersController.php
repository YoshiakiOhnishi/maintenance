<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

      /**
     * 認証不要なアクションを定義
     */

  public function login()
{
	if($this->request->is('post')){
		$user = $this->Auth->identify();
		if($user){
      $this->Auth->setUser($user);

      // セッションオブジェクトの取得
      $this->request->session();
      // セッションデータの書き込み
      $this->request->session()->write('name', $_POST["name"]);
      // セッションデータの読み込み
      //$this->request->session()->set('name1', $session->read('username'));

			return $this->redirect($this->Auth->redirectUrl());
		}
		$this->Flash->error('ユーザー名かパスワードが間違っています');
	}
}

  public function logout()
  {
    $this->Flash->success('ログアウトしました');
    $this->viewBuilder()->layout('sample');
    return $this->redirect($this->Auth->logout());
  }

  public function register()
  {
    $user = $this->Users->newEntity();
    $this->set('user', $user);
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->data);                    
        if ($this->Users->save($user)) {
            //return $this->redirect(['action' => 'register']);
        } 
        if ($user->errors()){
            $this->Flash->error('please check entered values...');
            unset($_POST["name"]);
        }
    }
  }
  public function json()
  {
    $user = $this->Users->newEntity();
    $this->set('user', $user);
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->data);                    
        if ($this->Users->save($user)) {
            //return $this->redirect(['action' => 'register']);
        } 
        if ($user->errors()){
            $this->Flash->error('please check entered values...');
            unset($_POST["name"]);
        }
    }
  }
  public function menu(){
    }
}
