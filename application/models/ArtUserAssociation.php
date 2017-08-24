<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtUserAssociation extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'artusersassociation';
    $this->primaryKey = 'id';
  }

  public function getArtIDs($userID)
  {
    $this->db->select('artID');
    $this->db->from($this->tableName);
    $this->db->where(array('userID'=>$userID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_array();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function checkIfOwnArt($artID, $userID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('artID'=> $artID,'userID'=>$userID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  public function checkIfAlreadyAssociated($userID, $artID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('artID'=> $artID,'userID'=>$userID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  public function insertAssociation($userID, $artID)
  {
    if($userID != NULL && $artID != NULL)
    {

    }
  }
}
