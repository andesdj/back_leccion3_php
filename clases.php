<?php 

class Asignatura {
    private $nota1;
    private $nota2;
    private $nota3;
    const NUMERO=3;

    function __construct ($nota1, $nota2, $nota3)    {
       $this -> nota1 =$nota1;
       $this -> nota2 =$nota2;
       $this -> nota3 =$nota3;
    }

    public function leerNota1(){
     $vn= $this -> nota1;
     return $vn;
    }

    public function escribirNota1($valorn){
      $this -> nota1=$valorn;
    }


    public function leerNota2(){
     $vn= $this -> nota2;
     return $vn;
    }

    public function escribirNota2($valorn){
      $this -> nota2=$valorn;
    }

    public function leerNota3(){
       $vn = $this -> nota3;
     return $vn;
    }

    public function escribirNota3($valorn){
      $this -> nota3=$valorn;
    }


    public function promedio() {
      $a=$this -> nota1;
      $b=$this -> nota2;
      $c=$this -> nota3;
      $p=(($a+$b+$c)/NUMERO);
      return $p;
    }
}

class Estudiante {

    private $nombre;
    private $curso;
    private $asignaturas = array();

   function __construct ($nombre, $curso, $asignaturas)    {
       $this -> nombre =$nombre;
       $this -> curso =$curso;
       $this -> asignaturas =$asignaturas;
    }

    public function escribirNombre($a) {
      $this -> nombre =$a;
    }

    public function leerNombre(){
       $nom = $this -> nombre;
       return $nom;
    }


    public function escribirCurso($a) {
      $this -> curso =$a;
    }

    public function leerCurso(){
       $cur = $this -> curso;
      return $cur;
    }

    public function escribirAsignatura($a,$v){
      $this-> asignaturas =array_push($a, $v);
    }

}



?>