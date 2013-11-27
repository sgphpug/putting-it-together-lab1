<?php

class Stack
{
	public $data = array();

	public function add($record)
	{
		$this->data[] = $record;
		return true;
	}

	public function remove($record)
	{
		//$this->data = array();
		$pos = array_search($record, $this->data);
		if ($pos !== false)
		{
			unset($this->data[$pos]);
			return true;
		}
		return false;
	}

}



