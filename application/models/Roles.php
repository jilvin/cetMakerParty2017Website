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
}
