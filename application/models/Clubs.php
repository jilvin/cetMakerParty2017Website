<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clubs extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'clubs';
    $this->primaryKey = 'id';
  }

  public function returnClubs($partyID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$partyID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      return $prevQuery->result_array();
    }
    else
    {
      return NULL;
    }
  }
}
