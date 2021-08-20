<?php
include_once 'conexion.php';


class VENDEDOR extends bdconnect{

     private $id;
     private $nombre;
     private $email;
     private $password;
     private $role;


     public function __construct($id,$nombre,$email,$password,$role)
     {
      $this->id=$id;
      $this->nombre=$nombre;
      $this->password=$password;
      $this->role=$role;
      $this->email=$email;


     }
     public function setId($id){
         $this->id=$id;}
     public function getId(){
         return $this->id;
     }

     public function setNombre($nombre){
            $this->nombre=$nombre;}
     public function getNombre(){
         return $this->nombre;}

     public function setEmail($email){
        $this->email=$email;}
     public function getEmail(){
        return $this->email;}

     public function setPassword($password){
         $this->password=$password;}
     public function getPassword(){
         return $this->password;}

     public function setRole($role){
         $this->role=$role;}
     public function getRole(){
     return $this->role;}


     
     




}