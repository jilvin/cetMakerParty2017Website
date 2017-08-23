<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Roles extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'roles';
    $this->primaryKey = 'id';
  }

  public function addAdminRole()
  {
    $data['partyID'] = 1;
    $data['roleName'] = 'Webmaster';
    $data['roleSlug'] = 'admin';
    $update = $this->db->update($this->tableName,$data);
  }

  public function getCurrentRoles($partyID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$partyID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      $prevResult = $prevQuery->result_array();
      // echo serialize($prevResult);
      // webmaster returned at the end -- start
      // $i = 0;
      // foreach ($prevResult as $prevResult)
      // {
      //   if($prevResult['roleType'] == 1)
      //   {
      //     $saveRoleForLater = $prevResult;
      //   }
      //   else
      //   {
      //     $newResult[$i] = $prevResult;
      //     $i++;
      //   }
      // }
      // if(!empty($saveRoleForLater))
      // {
      //   $newResult[$i] = $saveRoleForLater;
      // }
      // return $newResult;
      // webmaster returned at the end -- end
      // echo serialize($newResult);
      return $prevResult;
    }
    else
    {
      return NULL;
    }
  }

  public function getAdminRole($partyID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('partyID'=>$partyID, 'roleType'=>1));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      // echo serialize($prevQuery->result_object());
      return $prevQuery->result_object()[0]->id;
    }
    else
    {
      return NULL;
    }
  }
}
