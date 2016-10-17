<?php

namespace Agere\Communicator\Connector\DbCommon;

class ArrayQueryWrapper{
	public function __construct($data){
		$this->data = $data;
		$this->index = 0;
	}
}