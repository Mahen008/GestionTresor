<?php
class model_devise extends CI_Model
{
 function load_data()
 {
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get('devise');
  return $query->result_array();
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
}
?>