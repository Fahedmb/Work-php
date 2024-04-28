<?php

class Utilisateur {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $genre;
    private $numeroTelephone;
    private $adresse;
    private $dateInscription;
    private $role;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getNumeroTelephone() {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone($numeroTelephone) {
        $this->numeroTelephone = $numeroTelephone;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getDateInscription() {
        return $this->dateInscription;
    }

    public function setDateInscription($dateInscription) {
        $this->dateInscription = $dateInscription;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }
}
?>
