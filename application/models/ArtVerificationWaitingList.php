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

  public function checkForExperienceUser($currentPartyID, $userID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$currentPartyID, 'user'=>$userID,'category'=>'experience'));
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

  public function getWorksOfUser($partyID, $userID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID' => $partyID, 'user'=>$userID,'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_object();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getExperiencesOfUser($partyID, $userID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID' => $partyID, 'user'=>$userID,'category'=>'experience'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_object();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getWorkWithUserCheck($userID, $waitingArtID)
  {
    $this->db->from($this->tableName);
    // echo $waitingArtID;
    $this->db->where(array('id'=>$waitingArtID, 'user'=>$userID, 'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    // echo $prevCheck;
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getExperienceWithUserCheck($userID, $waitingArtID)
  {
    $this->db->from($this->tableName);
    // echo $waitingArtID;
    $this->db->where(array('id'=>$waitingArtID, 'user'=>$userID, 'category'=>'experience'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    // echo $prevCheck;
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getAllWaitingArts($partyID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID' => $partyID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_object();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getWorkWithoutUserCheck($waitingArtID)
  {
    $this->db->from($this->tableName);
    // echo $waitingArtID;
    $this->db->where(array('id'=>$waitingArtID, 'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    // echo $prevCheck;
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getExperienceWithoutUserCheck($waitingArtID)
  {
    $this->db->from($this->tableName);
    // echo $waitingArtID;
    $this->db->where(array('id'=>$waitingArtID, 'category'=>'experience'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    // echo $prevCheck;
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function checkArt($currentPartyID, $artID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$currentPartyID, 'id'=>$artID));
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

  public function getArt($waitingArtID)
  {
    $this->db->from($this->tableName);
    // echo $waitingArtID;
    $this->db->where(array('id'=>$waitingArtID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    // echo $prevCheck;
    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function deleteArt($artID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('id' => $artID));
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

  public function checkEmptyTable()
  {
    $this->db->from($this->tableName);
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      return 0;
    }
    else
    {
      // empty table
      return 1;
    }
  }
}
