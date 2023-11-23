<?php
require_once('class/CRUD.php');
require 'userModel.php';

class UserController {
    private $crud;
    private $userModel;

    public function __construct() {
        $this->crud = new CRUD;
        $this->userModel = new UserModel();
    }

    public function displayUsers() {
        $users = $this->crud->select('utilisateurs');
        require 'userView.php';
    }

    public function addUserForm() {
        require 'userView.php';
    }

   public function addUser() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Collect data from the form
        $data = array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'mot_de_passe' => password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT),
            'est_admin' => isset($_POST['est_admin']) ? 1 : 0,
        );

        // Insert user data into the database
        $this->userModel->insertUser($data);

        // Redirect to the "Show Users" page after insertion
        header('Location: user-show.php');
        exit;
    }
}


    public function closeConnection() {
        $this->crud = null;
    }
}
?>
