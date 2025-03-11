<?php
    include_once("modelos/medicamentos.php");

    class controladorMedicamentos {
        private $medicamentos;

        public function __construct(){
            $this->medicamentos = new Medicamento();
        }
        
        public function index(){
            $resultado = $this->medicamentos->listar();
            return $resultado;
        }


        public function ver($id){
            $this->medicamentos->set("id", $id);
            return $this->medicamentos->ver();
        }

        public function crear($codigo, $n_medicamento, $descripcion, $f_vencimiento, $c_stock, $estado){
            $this->medicamentos->set("codigo", $codigo);
            $this->medicamentos->set("n_medicamento", $n_medicamento);
            $this->medicamentos->set("descripcion", $descripcion);
            $this->medicamentos->set("f_vencimiento", $f_vencimiento);
            $this->medicamentos->set("c_stock", $c_stock);
            $this->medicamentos->set("estado", $estado);

            $resultado = $this->medicamentos->crear();
            return $resultado;
        }

        public function eliminar($id){
            $this->medicamentos->set("id", $id);
            $this->medicamentos->eliminar();
        }

        public function editar($codigo, $n_medicamento, $descripcion, $f_vencimiento, $c_stock, $estado){
            $this->medicamentos->set("codigo", $codigo);
            $this->medicamentos->set("n_medicamento", $n_medicamento);
            $this->medicamentos->set("descripcion", $descripcion);
            $this->medicamentos->set("f_vencimiento", $f_vencimiento);
            $this->medicamentos->set("c_stock", $c_stock);
            $this->medicamentos->set("estado", $estado);

            $this->medicamentos->editar();
        }
    }
?>