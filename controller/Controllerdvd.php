<?php
require_once('class/CRUD.php');
require 'dvdModel.php';

class FilmController {
    private $crud;
    private $dvdModel;

    public function __construct() {
        $this->crud = new CRUD;
        $this->dvdModel = new DvdModel();
    }

    public function displayFilms() {
        $films = $this->crud->select('films');
        require 'filmView.php';
    }

    public function addDvdForm() {
        require 'dvdView.php';
    }

    public function addDvd() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collect data from the form
            $data = array(
                'titre' => $_POST['titre'],
                'annee' => $_POST['annee'],
                'genre' => $_POST['genre'],
                'realisateur' => $_POST['realisateur'],
                'description' => $_POST['description'],
                'duree' => $_POST['duree']
            );

            // Insert DVD data into the database
            $this->dvdModel->insertDvd($data);

            // Redirect to the index page after insertion
            header('Location: index.php');
            exit;
        }
    }

    public function displayDvdDetails() {
        require_once 'vendor/autoload.php';
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader);
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        $dvd = $this->crud->selectId('films', $id);

        if ($dvd) {
            extract($dvd);
            echo $twig->render('dvd-details.twig', $dvd);
        } else {
            header('location: index.php');
        }
    } else {
        header('location: index.php');
    }
}

public function deleteDvd() {
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        // Delete the DVD from the database (You need to implement this functionality)
        // Once deleted, you can redirect to the list of DVDs or a confirmation page
        $this->dvdModel->deleteDvd($id);
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
}

public function editDvd() {
    require_once 'vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        $film = $this->crud->selectId('Films', $id);

        extract($film);
        echo $twig->render('dvd-edit-form.twig', $film);

    } else {
        header('Location: index.php');
    }
}



    public function closeConnection() {
        $this->crud = null;
    }
}
?>
<?php
require_once('class/CRUD.php');
require 'dvdModel.php';

class FilmController {
    private $crud;
    private $dvdModel;

    public function __construct() {
        $this->crud = new CRUD;
        $this->dvdModel = new DvdModel();
    }

    public function displayFilms() {
        $films = $this->crud->select('films');
        require 'filmView.php';
    }

    public function addDvdForm() {
        require 'dvdView.php';
    }

    public function addDvd() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collect data from the form
            $data = array(
                'titre' => $_POST['titre'],
                'annee' => $_POST['annee'],
                'genre' => $_POST['genre'],
                'realisateur' => $_POST['realisateur'],
                'description' => $_POST['description'],
                'duree' => $_POST['duree']
            );

            // Insert DVD data into the database
            $this->dvdModel->insertDvd($data);

            // Redirect to the index page after insertion
            header('Location: index.php');
            exit;
        }
    }

    public function displayDvdDetails() {
        require_once 'vendor/autoload.php';
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader);
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        $dvd = $this->crud->selectId('films', $id);

        if ($dvd) {
            extract($dvd);
            echo $twig->render('dvd-details.twig', $dvd);
        } else {
            header('location: index.php');
        }
    } else {
        header('location: index.php');
    }
}

public function deleteDvd() {
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        // Delete the DVD from the database (You need to implement this functionality)
        // Once deleted, you can redirect to the list of DVDs or a confirmation page
        $this->dvdModel->deleteDvd($id);
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
}

public function editDvd() {
    require_once 'vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
    if (isset($_GET['id']) && $_GET['id'] != null) {
        $id = $_GET['id'];
        $film = $this->crud->selectId('Films', $id);

        extract($film);
        echo $twig->render('dvd-edit-form.twig', $film);

    } else {
        header('Location: index.php');
    }
}



    public function closeConnection() {
        $this->crud = null;
    }
}
?>
