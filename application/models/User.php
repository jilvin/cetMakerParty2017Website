<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'users';
    $this->primaryKey = 'id';
  }

  public function checkUser($data = array())
  {
    $this->db->select($this->primaryKey);
    $this->db->from($this->tableName);
    $this->db->where(array('email'=>$data['email']));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->row_array();
      $data['modified'] = date("Y-m-d H:i:s");
      $update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
      $userID = $prevResult['id'];
    }
    else
    {
      $data['created'] = date("Y-m-d H:i:s");
      $data['modified'] = date("Y-m-d H:i:s");
      $insert = $this->db->insert($this->tableName,$data);
      $userID = $this->db->insert_id();
    }

    return $userID?$userID:FALSE;
  }

  public function returnCheckValueAdditional()
  {
    return 1;
  }

  public function returnUsersInfo($userIDs)
  {
    $i=0;
    $data = NULL;
    if($userIDs != NULL)
    {
      // echo serialize($userIDs);
      foreach ($userIDs as $userID)
      {
        // echo $userID;
        $this->db->from($this->tableName);
        $this->db->where(array('id'=>$userID));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        if($prevCheck > 0)
        {
          // $prevResult = $prevQuery->row_array();
          $this->db->from($this->tableName);
          $this->db->where(array('id'=>$userID));
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
    else
    {
      return NULL;
    }
  }

  public function returnEmail($userID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('id'=>$userID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // echo $prevQuery->result_object()[0]->email;
      return $prevQuery->result_object()[0]->email;
    }
    else
    {
      return NULL;
    }
  }

  public function returnUserIDIfExists($emailID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('email'=>$emailID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      // echo serialize($prevQuery->result_object()[0]->id);
      return $prevQuery->result_object()[0]->id;
    }
    else
    {
      return NULL;
    }
  }
}
