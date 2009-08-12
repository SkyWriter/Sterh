<?php

class JobType extends BaseJobType
{
    public function __toString()
    {
	return $this->getName();
    }
}
