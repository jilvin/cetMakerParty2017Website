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

  public function getClubName($clubID)
  {
    $this->db->select('clubname');
    $this->db->from($this->tableName);
    $this->db->where(array('id'=>$clubID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_array();
      // echo serialize($prevResult[0]['clubname']);
      return $prevResult[0]['clubname'];
    }
    else
    {
      return NULL;
    }
  }
}
