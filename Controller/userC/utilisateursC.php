<?php

class UtilisateurC {
    protected $db;

    public function __construct() {
        $this->db = config::getConnexion();
    }

    public function getUser($user_id) {
        $query = $this->db->prepare("SELECT * FROM Utilisateur WHERE id = ?");
        $query->execute([$user_id]);
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM Utilisateur");
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function deleteUser($user_id) {
        $query = $this->db->prepare("DELETE FROM Utilisateur WHERE id = ?");
        $query->execute([$user_id]);
    }

    public function updateUserToAdmin($user_id) {
        $query = $this->db->prepare("UPDATE Utilisateur SET role = 'Administrateur' WHERE id = ?");
        $query->execute([$user_id]);
    }

    public function makeUserAdmin($user_id) {
        $query = $this->db->prepare("UPDATE Utilisateur SET role = 'Utilisateur' WHERE id = ?");
        $query->execute([$user_id]);
    }
}
?>
