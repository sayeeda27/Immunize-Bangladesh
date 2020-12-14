

<?php
 class Regi_model extends CI_Model
{
 function insert($data)
 {
  $this->db->insert('tbl_user', $data);
  return $this->db->insert_id();
 }

 function verify_email($key)
 {
  $this->db->where('us_verification_key', $key);
  $this->db->where('us_is_email_verified', 'no');
  $query = $this->db->get('tbl_user');
  if($query->num_rows() == 0)
  {
   $data = array(
    'us_is_email_verified'  => 'yes'
   );
   $this->db->where('us_verification_key', $key);
   $this->db->update('tbl_user', $data);
   return true;
  }
  else
  {
   return false;
  }
 }
}

?>
