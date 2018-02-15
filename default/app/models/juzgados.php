<?php 
class Juzgados extends ActiveRecord
{
	protected $database = 'catalogos';

  public function initialize(){
    $this->has_many('ordenes');
  }   

  public function listar(){
	$sql = "SELECT id, concat(id,'.- ',juzgado) as juzgado, cveant, cveloca, subprocuradurias_id FROM juzgados";
	$sql .= " ORDER by 1 asc, 2 asc";
	return $this->find_all_by_sql($sql);
 } 
 
  public function obtenLista($condiciones="1=1"){
    return $this->find("conditions: ".(empty($condiciones)?'1=1':$condiciones),"order: 3 asc, 4 asc, 2 asc");
  }  
}
?>