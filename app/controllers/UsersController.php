<?php
require_once MODEL_PATH.'Address.php';

class UsersController extends Controller {

    public function index()
    {
        $user = new Users();
        dnd($user->select("id = 5"));
    }

    public function updateAddress  () {
        $data['name'] = $_SESSION['name'];
        
        $this->render('address', $data);
    }

    public function storeAddress (){
        $address = new Address();
        $address->insert();
        die();
    }
    
}

