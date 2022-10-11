<?php

    class view{
        private $tpl = '';
        private $val = [];
        public function setTemplate($filename){
            if(preg_match('/^[a-zA-Z0-9][a-zA-Z0-9_-]*$/',$filename) == 0 ){
                trigger_error('Invalid filename', E_USER_ERROR);
            }
            $this->tpl = $filename;
        }

        public function display(){
            extract($this->val);
            require $this->tpl;
        }

        public function addVar($name,$value){
            if(preg_match('/^[\w][\w-]*$/',$name) == 0 ){
                trigger_error('Invalid name', E_USER_ERROR);
            }
            $this->val[$name] = $value;
        }
    }
?>