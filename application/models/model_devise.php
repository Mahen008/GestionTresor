<?php
class model_devise extends CI_Model
{
 function load_data()
 {
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get('devise');
  return $query->result_array();
}

public function getListDevise()
{
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('devise');
    return $query->result();
 }

public function getOneDevise($id)
{
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get_where('devise',['id' => $id]);
    return $query->row();
 }

 function insert($data)
 {
  $this->db->insert('devise', $data);
 }

 function update($data, $id)
 {
  $this->db->where('id', $id);
  $this->db->update('devise', $data);
 }

 function delete($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('devise');
 }

 // count devise
 public function countDevise()
 {
   echo $this->db->count_all('devise'); 
 }
}
?>