<?php
include_once("produk_class.php");
 
class Topi extends Produk {
     
    private $model;
     
    public function getModel() {
        return $this->model;
    }
 
    public function setModel($model) {
        $this->model = $model;
    }
     
}
?>