<?php
    abstract class AbstractController{
        protected $model = null;
        protected $view = null;
        
        protected function setModel(Model $m){
            $this->model = $m;
        }

        protected function setView(View $v){
            $this->view = $v;
        }

        public function run(){
            
        }
    }
?>