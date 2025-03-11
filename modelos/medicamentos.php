<?php

    include_once("conexion.php");

    class Medicamento{
        private $id;
        private $codigo;
        private $n_medicamento;
        private $descripcion;
        private $f_vencimiento;
        private $c_stock;
        private $estado;

        private $con;

        public function __construct(){
            $this -> con = new Conexion();
        }

        public function get($atributo){
            return $this -> $atributo;
        }

        public function set($atributo, $contenido){
            return $this -> $atributo = $contenido;
        }

        public function listar(){
            $sql = "SELECT * FROM medicamentos";
            $resultado = $this -> con -> consulta_retorno($sql);
            return $resultado;
        }

        public function ver(){
            $sql = "SELECT * FROM medicamentos WHERE id = {$this -> id}";
            $resultado = $this -> con -> consulta_retorno($sql);
            $reg = mysqli_fetch_assoc($resultado);

            $this -> codigo = $reg["codigo"];
            $this -> n_medicamento = $reg["n_medicamento"];
            $this -> descripcion = $reg["descripcion"];
            $this -> f_vencimiento = $reg["f_vencimiento"];
            $this -> c_stock = $reg["c_stock"];
            $this -> estado = $reg["estado"];

            return $reg;
        }

        public function crear(){
            $sql2 = "SELECT * FROM medicamentos WHERE codigo = {$this -> codigo}";
            $resultado = $this -> con -> consulta_retorno($sql2);
            $filas = mysqli_num_rows($resultado);
            
            if($filas == 0){
                $sql = "INSERT INTO medicamentos (codigo, n_medicamento, descripcion, f_vencimiento, c_stock, estado) VALUES ({$this -> codigo}, '{$this -> n_medicamento}', '{$this -> descripcion}', '{$this -> f_vencimiento}', '{$this -> c_stock}', '{$this -> estado}')";
                $this -> con -> consulta_simple($sql);
                return true;
            } else {
                return false;
            }
        }

        public function eliminar(){
            $sql = "DELETE FROM medicamentos WHERE id = {$this -> id}";
            $this -> con -> consulta_simple($sql);
        }

        public function editar(){
            $sql = "UPDATE medicamentos SET n_medicamento = '{$this -> n_medicamento}',
                descripcion = '{$this -> descripcion}',
                f_vencimiento = '{$this -> f_vencimiento}',
                c_stock = '{$this -> c_stock}',
                estado = '{$this -> estado}',
                clave = '{$this -> codigo}' WHERE id = {$this -> id}";
            echo $sql;
            $this -> con -> consulta_simple($sql); 
        }
    }

?>