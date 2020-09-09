<?php
	class Model_User extends CI_Model
	{
		//verifier l'authentification des utilisateurs
		public function verifUser($login,$password)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where(array('login' => $login,'password' => $password));
			$authentification = $this->db->get();
			return $authentification->row();
		}

		//insérer un utilisateur
		public function insererUser($data)
		{
			return $this->db->insert("user",$data);
		}

		//afficher les utilisateurs
		public function affichUser()
		{
			$this->db->order_by('user_id', 'DESC');
			$users = $this->db->get("user");
			return $users->result();
		}

		//editer un utilisateur
		public function getUnUser($user_id)
		{
			$unUser = $this->db->get_where('user',array('user_id' => $user_id));
			if ($unUser->num_rows() > 0) {
				return $unUser->row();
			}
		}

		//modifier un utilisateur
		public function updateUser($user_id,$data)
		{
			return $this->db->where('user_id',$user_id)
							->update('user',$data);
		}

		//supprimer un utilisateur
		public function suppUser($user_id)
		{
			return $this->db->delete('user',['user_id' => $user_id]);
		}

		// count user
		public function countUser()
		{
			echo $this->db->count_all('user'); 
		}
	}
?>