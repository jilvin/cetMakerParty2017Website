<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Leadership extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'leadership';
    $this->primaryKey = 'id';
  }

  public function checkAdminExists()
  {
    $this->db->select($this->primaryKey);
    $this->db->from($this->tableName);
    $this->db->where(array('id'=>1));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // admin exists
      return "1";
    }
    else
    {
      // admin does not exist
      return "0";
    }
  }

  public function insertAdmin($userID)
  {
    $insertData['created'] = date("Y-m-d H:i:s");
    $insertData['modified'] = date("Y-m-d H:i:s");

    $insert = $this->db->insert($this->tableName,$data);
    // $adminID = $this->db->insert_id();
  }

  public function returnCurrentLeaders($roleIDs)
  {
    $i=0;
    $data = NULL;
    // echo serialize($roleIDs);
    foreach ($roleIDs as $role)
    {
      // echo serialize($role);
      $this->db->from($this->tableName);
      $this->db->where(array('role'=>$role['id']));
      $prevQuery = $this->db->get();
      $prevCheck = $prevQuery->num_rows();
      if($prevCheck > 0)
      {
        // $prevResult = $prevQuery->row_array();
        $this->db->select('id');
        $this->db->from($this->tableName);
        $this->db->where(array('role'=>$role['id']));
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

  public function checkIfAdmin($userID, $adminRole)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('role'=>$adminRole));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();
    if($prevCheck > 0)
    {
      if($userID == $prevQuery->result_object()[0]->user)
      {
        // admin
        return 1;
      }
      else
      {
        return 0;
      }
    }
    else
    {
      return NULL;
    }
  }
}
