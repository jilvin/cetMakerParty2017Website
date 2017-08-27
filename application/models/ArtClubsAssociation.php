<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtClubsAssociation extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'artclubsassociation';
    $this->primaryKey = 'id';
  }

  public function getPatronClubID($artID)
  {
    $this->db->select('clubID');
    $this->db->from($this->tableName);
    $this->db->where(array('artID'=>$artID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_array();
      // echo serialize($prevResult[0]['clubID']);
      return $prevResult[0]['clubID'];
    }
    else
    {
      return NULL;
    }
  }
}
