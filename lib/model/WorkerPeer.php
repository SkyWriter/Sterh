<?php

class WorkerPeer extends BaseWorkerPeer
{
	static protected $GENDER_INTEGERS = array(1 => 'мужской', 2 => 'женский');
	static protected $GENDER_VALUES = null;
	
	static public function getGenderChoices()
	{
		return self::$GENDER_INTEGERS;
	}
	
	static public function getGenderFromIndex($index)
	{
		return self::$GENDER_INTEGERS[$index];
	}

	static public function getGenderFromValue($value)
	{
		if (!self::$GENDER_VALUES)
		{
			self::$GENDER_VALUES = array_flip(self::$STATUS_INTEGERS);
		}

		$values = strtolower($value);

		if (!isset(self::$GENDER_VALUES[$value]))
		{
			throw new PropelException(sprintf('Gender cannot take "%s" as a value', $value));
		}
		
		return self::$GENDER_VALUES[strtolower($value)];
	}
}
