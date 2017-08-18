<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtVerificationWaitingList extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'artverificationwaitinglist';
    $this->primaryKey = 'id';
  }

  public function newArt($partyID, $userID, $artName, $artDescription)
  {
    $data['partyID'] = $partyID;
    $data['user'] = $userID;
    $data['artname'] = $artName;
    $data['artdescription'] = $artDescription;
    $insert = $this->db->insert($this->tableName,$data);
    $artverificationwaitinglistID = $this->db->insert_id();
    return $artverificationwaitinglistID;
  }
}
