<?php

class Worker extends BaseWorker
{
	protected function formatBooleanString($i)
	{
		return ($i == 1) ? 'да' : 'нет';
	}
	
	public function getGenderText()
	{
		return ($this->getGender() == 1) ? 'мужской' : 'женский';
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
