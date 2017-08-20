<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Art extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'art';
    $this->primaryKey = 'id';
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

  public function show_current_works($current_party)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$current_party,'category'=>'work'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // $prevResult = $prevQuery->row_array();
      $this->db->from($this->tableName);
      $this->db->where(array('partyID'=>$current_party,'category'=>'work'));
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
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$current_party,'category'=>'experience'));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // $prevResult = $prevQuery->row_array();
      $this->db->from($this->tableName);
      $this->db->where(array('partyID'=>$current_party,'category'=>'experience'));
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
    $this->db->from($this->tableName);
    $i=0;
    $data = NULL;
    foreach ($artIDs as $artIDs)
    {
      $this->db->where(array('id'=>$artIDs,'partyID'=>$current_party,'category'=>'experience'));
      $prevQuery = $this->db->get();
      $prevCheck = $prevQuery->num_rows();
      if($prevCheck > 0)
      {
        // $prevResult = $prevQuery->row_array();
        $this->db->from($this->tableName);
        $this->db->where(array('partyID'=>$current_party,'category'=>'experience'));
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
}
