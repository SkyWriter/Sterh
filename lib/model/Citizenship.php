<?php

class Citizenship extends BaseCitizenship
{
    public function __toString()
    {
	return $this->getName();
    }
}
