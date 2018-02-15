<?php 
class Municipios extends ActiveRecord
{
	protected $database = 'catalogos';

  public function initialize(){
    $this->has_many('ordenes');
	$this->has_many('localidades');
	$this->belongs_to('distritos');
  }  
  

  public function listar($id=1){
    return $this->find("distritos_id=$id","order: 2 ASC");	
    }
  
}
?>
