<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Art extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'art';
    $this->primaryKey = 'id';
  }

  public function getArt($artID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('id'=>$artID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      // echo serialize($prevResult);
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getArts($artIDs)
  {
    $i = 0;
    $data = NULL;
    foreach($artIDs as $artID)
    {
      // echo serialize($artID['artID']);
      $this->db->from($this->tableName);
      $this->db->where(array('id'=>$artID['artID']));
      $prevQuery = $this->db->get();
      $prevCheck = $prevQuery->num_rows();

      if($prevCheck > 0)
      {
        $prevResult = $prevQuery->row_array();
        // echo serialize($prevResult);
        // return $prevResult;
        $data[$i] = $prevResult;
        $i++;
      }
    }
    return $data;
  }

  public function getWork($workID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('id'=>$workID,'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

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

  public function show_current_arts($current_party)
  {
    // status types to be displayed for current listing
    $currentValidStatuses = array('w', 'c', 'p');

    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$current_party));
    $this->db->where_in('status', $currentValidStatuses);
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // $prevResult = $prevQuery->row_array();
      $this->db->from($this->tableName);
      $this->db->where(array('partyID'=>$current_party));
      $this->db->where_in('status', $currentValidStatuses);
      $prevResult = $this->db->get()->result();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function show_current_works($current_party)
  {
    // status types to be displayed for current listing
    $currentValidStatuses = array('w', 'c', 'p');

    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$current_party,'category'=>'work'));
    $this->db->where_in('status', $currentValidStatuses);
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // $prevResult = $prevQuery->row_array();
      $this->db->from($this->tableName);
      $this->db->where(array('partyID'=>$current_party,'category'=>'work'));
      $this->db->where_in('status', $currentValidStatuses);
      $prevResult = $this->db->get()->result();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function show_current_works_from_given_artID_list($current_party, $artIDs)
  {
    $i=0;
    $data = NULL;
    foreach ($artIDs as $artID)
    {
      $this->db->from($this->tableName);
      $this->db->where(array('id'=>$artID['artID'],'partyID'=>$current_party,'category'=>'work'));
      $prevQuery = $this->db->get();
      $prevCheck = $prevQuery->num_rows();
      if($prevCheck > 0)
      {
        // $prevResult = $prevQuery->row_array();
        $this->db->from($this->tableName);
        $this->db->where(array('id'=>$artID['artID'], 'partyID'=>$current_party,'category'=>'work'));
        $data[$i] = $this->db->get()->result();
        $i++;
        // return $prevResult;
      }
    }
    if($data != NULL)
    {
      return $data;
    }
    else
    {
      return NULL;
    }
  }

  public function getExperience($experienceID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('id'=>$experienceID,'category'=>'experience'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

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

  public function show_current_experiences($current_party)
  {
    // status types to be displayed for current listing
    $currentValidStatuses = array('w', 'c', 'p');

    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$current_party,'category'=>'experience'));
    $this->db->where_in('status', $currentValidStatuses);
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // $prevResult = $prevQuery->row_array();
      $this->db->from($this->tableName);
      $this->db->where(array('partyID'=>$current_party,'category'=>'experience'));
      $this->db->where_in('status', $currentValidStatuses);
      $prevResult = $this->db->get()->result();
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function show_current_experiences_from_given_artID_list($current_party, $artIDs)
  {
    $i=0;
    $data = NULL;
    foreach ($artIDs as $artID)
    {
      $this->db->from($this->tableName);
      $this->db->where(array('id'=>$artID['artID'],'partyID'=>$current_party,'category'=>'experience'));
      $prevQuery = $this->db->get();
      $prevCheck = $prevQuery->num_rows();
      if($prevCheck > 0)
      {
        // $prevResult = $prevQuery->row_array();
        $this->db->from($this->tableName);
        $this->db->where(array('id'=>$artID['artID'], 'partyID'=>$current_party,'category'=>'experience'));
        $data[$i] = $this->db->get()->result();
        $i++;
        // return $prevResult;
      }
    }
    if($data != NULL)
    {
      return $data;
    }
    else
    {
      return NULL;
    }
  }

  public function returnWorksCount($partyID)
  {
    // status types to be displayed for current listing
    $currentValidStatuses = array('w', 'c', 'p');

    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$partyID,'category'=>'work'));
    $this->db->where_in('status', $currentValidStatuses);
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    return $prevCheck;
  }

  public function returnExperiencesCount($partyID)
  {
    // status types to be displayed for current listing
    $currentValidStatuses = array('w', 'c', 'p');

    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$partyID,'category'=>'experience'));
    $this->db->where_in('status', $currentValidStatuses);
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    return $prevCheck;
  }

  public function newArt($partyID, $artName, $artShortDescription, $artLongDescription, $category, $type1ImageFileName, $type2ImageFileName)
  {
    $data['partyID'] = $partyID;
    $data['artname'] = $artName;
    $data['artshortdescription'] = $artShortDescription;
    $data['artlongdescription'] = $artLongDescription;
    $data['category'] = $category;
    $data['status'] = 'w';
    $data['type1imagefilename'] = $type1ImageFileName;
    $data['type2imagefilename'] = $type2ImageFileName;
    $insert = $this->db->insert($this->tableName,$data);
    $id = $this->db->insert_id();
    return $id;
  }

  public function nextArtID()
  {
    $this->db->select_max('id');
    $this->db->from($this->tableName);
    $prevQuery = $this->db->get()->result_object();
    return $prevQuery[0]->id+1;
  }
}
