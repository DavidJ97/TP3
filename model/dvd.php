<?php

class Client extends CRUD {

    protected $table = 'films';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'titre', 'annee', 'genre', 'realisateur', 'duree', 'description', 'image'];

    public function clientVille(){
        $sql = "SELECT * from films";
        $stmt = $this->query($sql);
        $films = $stmt->fetchAll();
        return $films;
    }
}

?>