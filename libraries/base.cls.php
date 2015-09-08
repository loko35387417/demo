<?php

namespace Generate;
class Base
{
    public $name;
    public $namespace;
    
    public function __construct() {
        $this->name = __CLASS__;
        $this->namespace = __NAMESPACE__;
    }
}
