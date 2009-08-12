<?php

class Branch extends BaseBranch
{
    public function __toString()
    {
	return $this->getName();
    }
}
