<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtistInvites extends CI_Model
{
  function __construct()
  {
    $this->tableName = 'artistinvites';
    $this->primaryKey = 'id';
  }

  public function newArtistInvite($artID, $inviteEmail)
  {

    $this->db->from($this->tableName);
    $this->db->where(array('artID'=>$artID, 'inviteEmail'=>$inviteEmail));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      return "inviteAlreadyExists";
    }
    else
    {
      $data['artID'] = $artID;
      $data['inviteEmail'] = $inviteEmail;
      $insert = $this->db->insert($this->tableName,$data);
      if($insert)
      {
        return "inviteAccepted";
      }
    }
  }
}
