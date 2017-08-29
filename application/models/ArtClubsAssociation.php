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

  public function insertAssociation($artID, $clubID)
  {
    if($artID != NULL && $clubID != NULL)
    {
      $data['artID'] = $artID;
      $data['clubID'] = $clubID;
      $insert = $this->db->insert($this->tableName,$data);
      if($insert)
      {
        return 1;
      }
      else
      {
        return 0;
      }
    }
  }
}
