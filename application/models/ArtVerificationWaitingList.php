<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtVerificationWaitingList extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'artverificationwaitinglist';
    $this->primaryKey = 'id';
  }

  public function newArt($partyID, $userID, $artName, $artShortDescription, $artLongDescription, $category, $type1ImageFileName, $type2ImageFileName)
  {
    $data['partyID'] = $partyID;
    $data['user'] = $userID;
    $data['artname'] = $artName;
    $data['artshortdescription'] = $artShortDescription;
    $data['artlongdescription'] = $artLongDescription;
    $data['category'] = $category;
    $data['type1imagefilename'] = $type1ImageFileName;
    $data['type2imagefilename'] = $type2ImageFileName;
    $insert = $this->db->insert($this->tableName,$data);
    $artverificationwaitinglistID = $this->db->insert_id();
    return $artverificationwaitinglistID;
  }

  public function checkForWorkUser($currentPartyID, $userID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$currentPartyID, 'user'=>$userID,'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      return $prevCheck;
    }
    else
    {
      return 0;
    }
  }

  public function nextArtID()
  {
    $this->db->select_max('id');
    $this->db->from($this->tableName);
    $prevQuery = $this->db->get()->result_object();
    return $prevQuery[0]->id+1;
  }
}
