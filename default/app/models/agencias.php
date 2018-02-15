<?php 
class Agencias extends ActiveRecord
{
	protected $database = 'catalogos';
  /**
  *Retorna un array de objetos cuyos campos son los mismos de la tabla Marca
  *$page : es el número o indice de la página
  *$$ppage : es el número de filas o registro de la página
  **/
  public function initialize(){
    $this->has_many('ordenes');
  }  
  
  public function listar(){
    return $this->find();
  } 
 
  public function obtenLista($condiciones="1=1"){
    return $this->find("conditions: ".(empty($condiciones)?'1=1':$condiciones),"order: 3 asc, 4 asc, 2 asc");
  }  

   public function listar2(){
   $sql = "SELECT id, concat(codagen,'.- ',agencia)  as agencia FROM agencias";
    
  return $this->find_all_by_sql($sql);


  } 


   public function obtenLista2($condiciones="1=1"){
    return $this->find("conditions: ".(empty($condiciones)?'1=1':$condiciones),"order: 3 asc, 4 asc, 2 asc");
  }  


}
?>
