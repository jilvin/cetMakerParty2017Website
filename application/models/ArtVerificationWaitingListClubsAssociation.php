<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtVerificationWaitingListClubsAssociation extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'artverificationwaitinglistclubsassociation';
    $this->primaryKey = 'id';
  }

  public function newAssociation($artverificationwaitinglistID, $clubID)
  {
    $data['artverificationwaitinglistID'] = $artverificationwaitinglistID;
    $data['clubID'] = $clubID;
    $insert = $this->db->insert($this->tableName,$data);
  }

  public function getPatronClubID($artID)
  {
    $this->db->select('clubID');
    $this->db->from($this->tableName);
    $this->db->where(array('artverificationwaitinglistID'=>$artID));
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

  public function deleteAssociation($artID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('artverificationwaitinglistID' => $artID));
    $delete = $this->db->delete();

    if($delete)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
}
