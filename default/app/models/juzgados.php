<?php 
class Juzgados extends ActiveRecord
{
	protected $database = 'catalogos';

   
  public function listar(){
	$sql = "SELECT id, juzgado FROM juzgados";
	return $this->find_all_by_sql($sql);

  } 
 
  public function obtenLista($condiciones="1=1"){
    return $this->find("conditions: ".(empty($condiciones)?'1=1':$condiciones),"order: 3 asc, 4 asc, 2 asc");
  }  
}
?>