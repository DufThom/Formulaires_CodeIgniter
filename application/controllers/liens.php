<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class liens extends CI_Controller{

    public function liste(){

        $this->load->database();
        $this->load->helper('url');
        $data["liste"] = $this->db->query('Select * from liens');
        $this->load->view('liens/liste', $data);
    }

    public function details($id){

        $this->load->database();
        $this->load->helper('url');
        $requete = $this->db->query('Select * from liens WHERE Id=?', array($id));
        //$toto["ligne"] = $liste;
        $data["ligne"] = $requete->row();
        $this->load->view('liens/details', $data);
    }


    public function ajout(){
        $this->load->helper('url');
        $this->load->view('liens/ajout');
    }

    public function script_ajout(){
        $data = $this->input->post();

        $this->load->database();
        $str = $this->db->insert_string('liens', $data);
        $this->db->query($str);

        $this->load->helper('url');
        redirect(site_url('liens/liste'));
    }


    public function modif($id){ // Méthode qui charge la vue "modif.php" du répertoire "application/views/liens" ++++++
        $this->load->database(); // Connexion la DB
        $this->load->helper('url');

        $liste = $this->db->query("Select * from liens where id=?", array($id));
        $model["lien"] = $liste->row(); // 1ère ligne du résultat
        $this->load->view('liens/modif', $model);
    }
// le formulaire de "modif.php" lance l'action/méthode "script_modif" suivante lorsque l'on Submit :
    public function script_modif(){
        $data = $this->input->post(); //permet de récupérer les données envoyées par le formulaire
        $id = $this->input->post("id");

        $this->load->database(); //connection à la base de données
        $str = $this->db->update_string('liens', $data, "id=".$id); //génère une chaine de caractères représentant une requête de Update
        $this->db->query($str); //exécute le requête d’action

        $this->load->helper('url'); //charge le module permettant d’utiliser la fonction redirect
        redirect(site_url("liens/liste")); //redirige le navigateur vers la liste
    }


    public function supprim($id){
        $this->load->database();
        $this->load->helper('url');

        $liste = $this->db->query("Select * from liens where id=?", array($id));
        $model["lien"] = $liste->row();
        $this->load->view('liens/supprim', $model);
    }

    public function script_supp(){
        //$data = $this->input->post();
        //$id = $data["id"];
    // ou :
        $id = $this->input->post("id"); // c plus simple pour ne récupérer que l'Id ...

        $this->load->database();
        $this->db->query("Delete from liens where id=".$id);

        $this->load->helper('url');
        redirect(site_url("liens/liste"));
    }

}

?>















