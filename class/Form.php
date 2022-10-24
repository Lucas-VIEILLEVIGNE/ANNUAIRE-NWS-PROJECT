<?php 

class Form{

    private $data;
    
    public function __construct($data = array())
    {
        $this->data = $data;
    }
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name, $placeholder, $type, $value){
        return  ('<input type="' . $type . '" placeholder="' . $placeholder .'" type="text" name="' . $name . '" value="' . $value . '" class="forms-input"' . $this->getValue($name) . '">');
    }
}