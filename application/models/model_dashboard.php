<?php
class model_dashboard extends CI_Model{

    public function countUser()
    {
        $query = $this->db->query('SELECT COUNT(user.user_id) AS countUser FROM `user`');
        return $query->result();
    }

    public function countPret()
    {
        $query = $this->db->query('SELECT COUNT(pret.id) as countPret FROM `pret`');
        return $query->result();
    }

    public function countORR()
    {
        $query = $this->db->query('SELECT COUNT(orotcapital.id) as countORR FROM `orotcapital`');
        return $query->result();
    }

    public function countDevise()
    {
        $query = $this->db->query('SELECT COUNT(devise.id) as countDevise FROM `devise`');
        return $query->result();
    }

}
?>