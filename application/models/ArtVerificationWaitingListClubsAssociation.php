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
}
