<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtistInvitesModel extends CI_Model
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

  public function checkIfArtInviteWaiting($emailID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('inviteEmail'=>$emailID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  public function getInvitedArtIDs($emailID)
  {
    $this->db->select('artID');
    $this->db->from($this->tableName);
    $this->db->where(array('inviteEmail'=>$emailID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      return $prevQuery->result_array();
    }
    else
    {
      return NULL;
    }
  }

  public function checkIfValid($artID, $emailID)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('artID' => $artID, 'inviteEmail'=>$emailID));
    $prevQuery = $this->db->get();
    $prevCheck = $prevQuery->num_rows();

    if($prevCheck > 0)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  public function deleteInvite($artID, $inviteEmail)
  {
    $this->db->from($this->tableName);
    $this->db->where(array('artID' => $artID, 'inviteEmail'=>$inviteEmail));
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
}
