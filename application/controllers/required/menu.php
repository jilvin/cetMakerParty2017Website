<?php
$currentPartyDate = $this->PartyData->getPartyDate($this->PartyData->getCurrentPartyID());
$worksCount = $this->Art->returnWorksCount($this->PartyData->getCurrentPartyID());
$experiencesCount = $this->Art->returnExperiencesCount($this->PartyData->getCurrentPartyID());
if($this->session->userdata('userData'))
{
  $this->load->view('templates/loggedInMenu', array('currentPartyDate' => $currentPartyDate, 'worksCount' => $worksCount, 'experiencesCount' => $experiencesCount));
}
else
{
  $this->load->view('templates/menu', array('currentPartyDate' => $currentPartyDate, 'worksCount' => $worksCount, 'experiencesCount' => $experiencesCount));
}
?>
