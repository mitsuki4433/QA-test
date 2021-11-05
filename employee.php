<?php

class Employee{

  Public $name;
  Public $title;
  Public $profile;
  Public $salary;

  public function setEmployeeName($name){
    $this->name=$name;
  }
  public function getEmployeeTitle(){
    return $this->title;
  }
  public function getEmployeeProfile(){
    return $this->profile;
  }
  public function getEmployeeMonthlySalary(){
    return $this->salary;
  }
}
$karyawan=new Employee();

$karyawan->setEmployeeName('jaka');
$karyawan->title="manager";
$karyawan->profile="askdhaksd";
$karyawan->salary=150000;

Echo $karyawan->getEmployeeTitle();
Echo $karyawan->getEmployeeProfile();
Echo $karyawan->getEmployeeMonthlySalary();

?>