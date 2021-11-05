<?php

class Department{

  protected $name;

  public function setDepartmentName($name){
    $this->name=$name;
  }
  public function getDepartmentName(){
    return $this->name;
  }
}

$department=new Department();

$department->setDepartmentName('kahdjasdk');
 echo $department->getDepartmentName();

?>