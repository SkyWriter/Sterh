<?php

class Speciality extends BaseSpeciality
{
    public function __toString()
    {
	return $this->getName();
    }
}
