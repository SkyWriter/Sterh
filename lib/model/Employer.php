<?php

class Employer extends BaseEmployer
{
	protected function formatBooleanString($i)
	{
		return ($i == 1) ? 'да' : 'нет';
	}
	
	public function getGenderText()
	{
		return EmployerPeer::getGenderFromIndex($this->getGender());
	}
	
	public function setGenderText($value)
	{
		$this->setGender(EmployerPeer::getGenderFromValue($value));
	}
	
	public function getProvidePlaceText()
	{
		return $this->formatBooleanString($this->getProvidePlace());
	}
	
	public function getMakePermissionText()
	{
		return $this->formatBooleanString($this->getMakePermission());
	}
	
	public function getMakeRegistrationText()
	{
		return $this->formatBooleanString($this->getMakeRegistration());
	}
}
