<?php

require_once 'modelos/ModeloArticulo.php';
require_once 'modelos/ModeloCategoria.php';
require_once 'modelos/ModeloPersona.php';
require_once 'controladores/ControlSesion.php';


require 'librerias/fpdf/fpdf.php';
class Articulo extends ControlSesion
{

    protected $modeloArticulo;
    protected $modeloCategoria;
    protected $modeloPersona;

    public function __construct()
    {
        parent::__construct();
        $this->modeloArticulo = new ModeloArticulo();
        $this->modeloCategoria = new ModeloCategoria();
        $this->modeloPersona = new ModeloPersona();
    }

    public function listar()
    {
        $vista = 'articulo/listar';


        
        $listadoArticulos = $this->modeloArticulo->listar();

        // return var_dump($listadoArticulos);
        cargarVista('plantilla', [
            'vista' => $vista,
            'listadoArticulos' => $listadoArticulos
        ]);
    }

    public function crear()
    {
        $vista = 'articulo/crear';



        cargarVista('plantilla', [
            'vista' => $vista,
            'categorias' => $this->modeloCategoria->listar(),
            'personas' => $this->modeloPersona->listar()
        ]);
    }

    public function registrar()
    {
        $datos = [
            'nombre_articulo' => post('nombre_articulo'),
            'descripcion' => post('descripcion'),
            'fecha_adquisicion' => post('fecha_adquisicion'),
            'costo_adquisicion' => post('costo_adquisicion'),
            'id_categoria' => post('id_categoria'),
            'id_persona_responsable' => post('id_persona_responsable'),
            'estado' => post('estado')
        ];


        $validacion = true;

        foreach ($datos as $llave => $item) {

            if (empty($item)) {
                $validacion = false;
                $campo=str_ireplace(["_", "id"], [" ", ""], $llave);
                $_SESSION["error"][] = "El campo " . $campo . " es requerido";
            }
        }

        if ($validacion == false) {

            return header('Location:' . BASE_URL . 'articulo/crear');
        }


        $nombreImagen = $_FILES['imagen']['name'];
        $ruta = $_FILES['imagen']['tmp_name'];
        $destino = 'subidas/' . $nombreImagen;
        copy($ruta, $destino);



        $datos['imagen'] = $nombreImagen;


        $this->modeloArticulo->registrar($datos);

        header('Location:' . BASE_URL . 'articulo/listar');
    }


    public function eliminar($id)
    {
        $this->modeloArticulo->eliminar($id);

        header('Location:' . BASE_URL . 'articulo/listar');
        
    }

    public function reporte()
    {
        $listadoArticulos = $this->modeloArticulo->listar();


        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Listado de Articulos', 0, 1, 'C');


        $directorio= realpath("subidas/img/");

        $pdf->Image($directorio."/logo.png",10,10,35,15);

        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Ln();
        $pdf->Cell(5,10,'#',1);
        $pdf->Cell(50, 10, 'Nombre Articulo', 1);
        $pdf->Cell(20, 10, 'F.compra', 1);
        $pdf->Cell(20, 10, 'Costo', 1);
        $pdf->Cell(30, 10, 'Categoria', 1);
        $pdf->Cell(50, 10, 'Responsable', 1,1);

        $pdf->SetFont('Arial', '', 8);

        $contador=1;
        foreach ($listadoArticulos as $articulo) {
            $pdf->Cell(5,10,$contador++,1);
            $pdf->Cell(50, 10, $articulo['nombre_articulo'], 1);
            $pdf->Cell(20, 10, $articulo['fecha_adquisicion'], 1);
            $pdf->Cell(20, 10, $articulo['costo_adquisicion'], 1);
            $pdf->Cell(30, 10, $articulo['categoria'], 1);
            $pdf->Cell(50, 10, $articulo['nombres']." ".$articulo["apellidos"], 1,1);
            
        }

        $pdf->Output();
        
    }
}
