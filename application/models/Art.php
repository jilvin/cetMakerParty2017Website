<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Art extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'art';
    $this->primaryKey = 'id';
  }

  public function show_current_works($current_party)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$current_party,'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // $prevResult = $prevQuery->row_array();
      $this->db->from($this->tableName);
      $this->db->where(array('partyID'=>$current_party,'category'=>'work'));
      $prevResult = $this->db->get()->result();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }
}
