<?php

class Worker extends BaseWorker
{
	protected function formatBooleanString($i)
	{
		return ($i == 1) ? 'да' : 'нет';
	}
	
	public function getFullName()
	{
		return $this->getSurname()." ".$this->getName()." ".$this->getFather();
	}
	
	public function getGenderText()
	{
		return WorkerPeer::getGenderFromIndex($this->getGender());
	}
	
	public function setGenderText($value)
	{
		$this->setGender(WorkerPeer::getGenderFromValue($value));
	}
	
	public function getNeedPlaceText()
	{
		return $this->formatBooleanString($this->getNeedPlace());
	}
	
	public function getHasPermissionText()
	{
		return $this->formatBooleanString($this->getHasPermission());
	}
	
	public function getNeedRegistrationText()
	{
		return $this->formatBooleanString($this->getNeedRegistration());
	}
}
