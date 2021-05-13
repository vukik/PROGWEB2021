<?php
include_once 'session.php';

class Carrito extends Session{

    function __construct(){
        parent::__construct('carrito');
    }

    public function load(){ //validar 
        if($this->getValue() == NULL){
            return '[]';
        }
        return $this->getValue();
    }

    public function add($id){ //se consulta con el id
        if($this->getValue() == NULL){
            $items = [];  //si no existe el carrito, se crea uno vacío
        }else{
            $items = json_decode($this->getValue(), 1); //se decodifica la info con decode
            for($i=0; $i<sizeof($items); $i++){ //se recorre el arreglo
                if($items[$i]['id'] == $id){
                    $items[$i]['cantidad']++;
                    $this->setValue(json_encode($items));
                    return $this->getValue();
                }
            }
        }
        
        $item = ['id' => (int)$id, 'cantidad' => 1];
        
        array_push($items, $item);
        $this->setValue(json_encode($items));
        return $this->getValue();
    }

    public function remove($id){
        if($this->getValue() == NULL){
            $items = [];
        }else{
            $items = json_decode($this->getValue(), 1);

            for($i=0; $i<sizeof($items); $i++){
                
                if($items[$i]['id'] == $id){
                    $items[$i]['cantidad']--;
                    if($items[$i]['cantidad'] == 0){
                        unset($items[$i]);
                        $items = array_values($items);
                    }
                    $this->setValue(json_encode($items));
                    return true;
                }
            }
        }
        
        //$item = ['id' => (int)$id, 'cantidad' => 1];
        
        //array_push($items, $item);
        //$this->setValue(json_encode($items));
        //return $this->getValue();
    }

}
?>