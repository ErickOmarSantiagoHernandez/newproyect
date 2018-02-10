<?php 
class Tiposoa extends ActiveRecord
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
  
  public function paginarid($id=0, $ppage=10)
  {
    return $this->paginate("conditions: id = ".$id, "order: 2 ASC","page: 1","per_page: $ppage");
  }  
  
  public function obtenTipo($num=0){
	$resultado = $this->find_first("conditions: id = ".$num);
	if ($resultado){
		return $resultado->clave;
	}
	return 'D';
  }
  
  public function paginar($page, $condicion="", $ppage=10)
  {
    return $this->paginate("conditions: nivel like '%".$condicion."%'", "order: 2 ASC","page: $page","per_page: $ppage");
  }
  
  public function listar(){
    return $this->find();
  } 
 
  public function obtenLista($condiciones="1=1"){
    return $this->find("conditions: ".(empty($condiciones)?'1=1':$condiciones),"order: 3 asc, 4 asc, 2 asc");
  }  
}
?>
