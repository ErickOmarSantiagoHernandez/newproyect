<?php 
class Localidades extends ActiveRecord
{
	protected $database = 'catalogos';

  public function initialize(){
    $this->has_many('ordenes');
	$this->belongs_to('municipios');
  }  
   
  public function listar($id=2){
    return $this->find("municipios_id=$id","order: 4 ASC");
    }
}
?>
