<?php

namespace Generate;
class Validation extends Base
{
    public $name;
    
    public function __construct() {
        $this->name = __CLASS__;
        parent::__construct();
    }
}