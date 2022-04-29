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
        

    

    $resultado = Estrategia::all();
    $resultado1 = Herramienta::all();


    $excel = new Spreadsheet();
    $hojaActiva = $excel->getActiveSheet();
    $hojaActiva->setTitle("Archivo plano");

    $hojaActiva->setCellValue('A1','tipo_estra');
    $hojaActiva->setCellValue('B1','nom_estra');
    $hojaActiva->setCellValue('C1','valoracion_estra');
    $hojaActiva->setCellValue('D1','compete_evaluar');
    $hojaActiva->setCellValue('E1','tipo_herra');
    $hojaActiva->setCellValue('F1','nom_herra');
    

    // $hojaActiva->setCellValue('I1','nom_herra');
    $hojaActiva->setCellValue('G1','tipo_licencia');
    $hojaActiva->setCellValue('H1','funciones');
    $hojaActiva->setCellValue('I1','interaccion');
    $hojaActiva->setCellValue('J1','diseño');
    $hojaActiva->setCellValue('K1','usabilidad');
    $hojaActiva->setCellValue('L1','documentacion');
    $hojaActiva->setCellValue('M1','actualizaciones');
    $hojaActiva->setCellValue('N1','porcentaje_aprove');
    $hojaActiva->setCellValue('O1','porcentaje_aproba');

$fila = 2;


foreach($resultado as $estrategia=>$rows){
    $hojaActiva->setCellValue('A'.$fila, $rows['tipo_estra']);
    $hojaActiva->setCellValue('B'.$fila, $rows['nom_estra']);
    $hojaActiva->setCellValue('C'.$fila, $rows['valoracion_estra']);
    $hojaActiva->setCellValue('D'.$fila, $rows['compete_evaluar']);
    $hojaActiva->setCellValue('E'.$fila, $rows['tipo_herra']);
    $hojaActiva->setCellValue('F'.$fila, $rows['nom_herra']);
    

    

    $fila++;

}
$fila = 2;
foreach($resultado1 as $herramienta=>$rows){
    // $hojaActiva->setCellValue('I'.$fila, $rows['nom_herra']);
    $hojaActiva->setCellValue('G'.$fila, $rows['tipo_licencia']);
    $hojaActiva->setCellValue('H'.$fila, $rows['funciones']);
    $hojaActiva->setCellValue('I'.$fila, $rows['interaccion']);
    $hojaActiva->setCellValue('J'.$fila, $rows['diseño']);
    $hojaActiva->setCellValue('K'.$fila, $rows['usabilidad']);
    $hojaActiva->setCellValue('L'.$fila, $rows['documentacion']);
    $hojaActiva->setCellValue('M'.$fila, $rows['actualizaciones']);
    $hojaActiva->setCellValue('N'.$fila, $rows['porcentaje_aprove']);
    $hojaActiva->setCellValue('O'.$fila, $rows['porcentaje_aproba']);
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
