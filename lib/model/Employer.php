<?php

class Employer extends BaseEmployer
{
	protected function formatBooleanString($i)
	{
		return ($i == 1) ? 'да' : 'нет';
	}
	
	public function getGenderText()
	{
		switch ($this->getGender()) {
			case 1:
				return 'мужской';
			
			case 2:
				return 'женский';
			
			default:
				return 'не важно';
		}
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
