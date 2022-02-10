<?php

namespace App\Http\Controllers;



use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;
use App\User;
use App\Estrategia;
use App\Herramienta;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function excel()
    {
        

    //$sql = "SELECT nom_estra, estra_apren_interactivo, estra_apren_colabo, estra_autoapren, estra_didactica, compete_evaluar, estra_evaluacion, valoracion_estra FROM estrategias";

    $resultado = Estrategia::all();
    $resultado1 = Herramienta::all();


    $excel = new Spreadsheet();
    $hojaActiva = $excel->getActiveSheet();
    $hojaActiva->setTitle("Archivo plano");

    $hojaActiva->setCellValue('A1','nom_estra');
    $hojaActiva->setCellValue('B1','estra_apren_interactivo');
    $hojaActiva->setCellValue('C1','estra_apren_colabo');
    $hojaActiva->setCellValue('D1','estra_autoapren');
    $hojaActiva->setCellValue('E1','estra_didactica');
    $hojaActiva->setCellValue('F1','compete_evaluar');
    $hojaActiva->setCellValue('G1','estra_evaluacion');
    $hojaActiva->setCellValue('H1','valoracion_estra');

    $hojaActiva->setCellValue('I1','nom_herra');
    $hojaActiva->setCellValue('J1','tipo_licencia');
    $hojaActiva->setCellValue('K1','funciones');
    $hojaActiva->setCellValue('L1','interaccion');
    $hojaActiva->setCellValue('M1','diseño');
    $hojaActiva->setCellValue('N1','usabilidad');
    $hojaActiva->setCellValue('O1','documentacion');
    $hojaActiva->setCellValue('P1','actualizaciones');
    $hojaActiva->setCellValue('Q1','porcentaje_aprove');
    $hojaActiva->setCellValue('R1','porcentaje_aproba');

$fila = 2;


foreach($resultado as $estrategia=>$rows){
    $hojaActiva->setCellValue('A'.$fila, $rows['nom_estra']);
    $hojaActiva->setCellValue('B'.$fila, $rows['estra_apren_interactivo']);
    $hojaActiva->setCellValue('C'.$fila, $rows['estra_apren_colabo']);
    $hojaActiva->setCellValue('D'.$fila, $rows['estra_autoapren']);
    $hojaActiva->setCellValue('E'.$fila, $rows['estra_didactica']);
    $hojaActiva->setCellValue('F'.$fila, $rows['compete_evaluar']);
    $hojaActiva->setCellValue('G'.$fila, $rows['estra_evaluacion']);
    $hojaActiva->setCellValue('H'.$fila, $rows['valoracion_estra']);

    

    $fila++;

}
$fila = 2;
foreach($resultado1 as $herramienta=>$rows){
    $hojaActiva->setCellValue('I'.$fila, $rows['nom_herra']);
    $hojaActiva->setCellValue('J'.$fila, $rows['tipo_licencia']);
    $hojaActiva->setCellValue('K'.$fila, $rows['funciones']);
    $hojaActiva->setCellValue('L'.$fila, $rows['interaccion']);
    $hojaActiva->setCellValue('M'.$fila, $rows['diseño']);
    $hojaActiva->setCellValue('N'.$fila, $rows['usabilidad']);
    $hojaActiva->setCellValue('O'.$fila, $rows['documentacion']);
    $hojaActiva->setCellValue('P'.$fila, $rows['actualizaciones']);
    $hojaActiva->setCellValue('Q'.$fila, $rows['porcentaje_aprove']);
    $hojaActiva->setCellValue('R'.$fila, $rows['porcentaje_aproba']);
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ArchivoPlano.csv"');
header('Cache-Control: max-age=0');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel, 'Csv');
$writer->save('php://output');
exit;
    }
}
