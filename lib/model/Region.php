<?php

class Region extends BaseRegion
{
    public function __toString()
    {
	return $this->getName();
    }
}
