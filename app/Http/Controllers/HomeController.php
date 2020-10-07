<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\Lottery;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cursos() {
        return view('course');
    }

    public function alumnos() {

        $lists = array(['name'=>"Lachy",'verdadero'=>"Es alumno"],['name'=>"segundo",'verdadero'=>"No es alumno"]);
        return view('student')->with(compact('lists'));
    }

    public function equipos() {
        return view('device');
    }

    public function aulas() {
        return view('class');
    }

    public function postcursos(Request $request) {

        $rules= [
            'nombre'=> 'required',
            'description'=> 'required|min:15',
            'cant_horas'=> 'required',
            'fecha_inicio'=> 'required',
            'fecha_final'=> 'required|after:fecha_inicio',
        ];

        $messages=['nombre.required'=> 'El nombre del curso es requerido.',
                   'description.min'=> 'La descripcion del curso debe tener minimo 15 carácteres.',
            'cant_horas.required'=> 'La cantidad de horas del cursoes requerida.',
            'fecha_inicio.required'=> 'La fecha de inicio del curso es requerida.',
            'fecha_final.required'=> 'La fecha final del curso es requerida.',
            'fecha_final.after'=> 'La fecha final del curso debe ser mayor que la fecha inicial.'];


        $this->validate($request, $rules ,$messages);
        $course= new Courses();
        $course->name= $request->input('nombre');
        $course->description= $request->input('description');
        $course->course_hours= $request->input('cant_horas');
        $course->start_date= $request->input('fecha_inicio');
        $course->end_date= $request->input('fecha_final');
        $course->save();

        return back();
       // return dd($request->all());
    }

    public function  listcursos()
    {
        $lists = Courses::all();
        return view('listcourse')->with(compact('lists'));
    }


    public function lottery() {

        $numbers = lottery::all();
        $ramdoms = self::millonarios();
        return view('lottery')->with(compact('numbers','ramdoms'));

    }

    public function millonarios()
   {

       $ramdoms=array();

       for( $i=0;$i<3;$i++)
       {
           do {
               $numero1= mt_rand(1, 50);
               $combito=array($numero1);

               for ($a = 0; $a < 4; $a++) {
                   $numero = mt_rand(1, 50);
                   $cont=0;
                   do {
                       foreach ($combito as $combi) {
                           if ($combi == $numero) {
                               $cont++;
                           }
                       }
                       $numero =($cont==0)?$numero:mt_rand(1, 50);
                     }
                     while($cont>0);

                  $combito[]=$numero;
               }
               $estrella1= mt_rand(1, 12);
               $estrellas=array($estrella1);
               for ($a = 0; $a < 1; $a++) {
                   $estrella = mt_rand(1, 12);
                   $cont=0;
                   do {
                       foreach ($estrellas as $estri) {
                           if ($estri == $estrella) {
                               $cont++;
                           }
                       }
                       $estrella =($cont==0)?$estrella:mt_rand(1,12);
                   }
                   while($cont>0);

                   $estrellas[]=$estrella;
               }
               sort($estrellas);
               sort($combito);
               $cant=1;
               $letras='numero';
              foreach ($combito as $comb)
              {
                  $combo[$letras.$cant]=$comb;
                  $cant++;
              }
              $cont=1;
              $let='estrella';
               foreach ($estrellas as $estri)
               {
                   $combo[$let.$cont]=$estri;
                   $cont++;
               }

           }
           while(!self::iguales($combo));

          array_push($ramdoms,$combo);
//          print_r($ramdoms);
//          die;
       }

       return $ramdoms;

   }

    /**
     * @param $combo
     * @return bool
     * funcion que  verifica si el combo elegido ha salido previamente
     */
   public function iguales($combo)
   {
       $pasados = lottery::all();

        $i=0;
       foreach ($pasados as $pasado)
       {
            if($combo['numero1']==$pasado['numero1'] && $combo['numero2']==$pasado['numero2'] && $combo['numero3']==$pasado['numero3']
                && $combo['numero4']==$pasado['numero4']  && $combo['numero5']==$pasado['numero5'])
            {
                $i++;
            }
       }

       return $i==0;
   }

    public function existe(Request $request) {
         //return dd($request->all());
        $combo=$request->all();
       if(!self::iguales($combo))
       {
           return back()->with('notification','Ya existe esta combinación en el año');
           die;
       }
       else
       {
           return back()->with('notification','Excelente combinación para este año');
           die;
       }

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * me va a devolver los 20 numeros que mas salen en la loteria del superonce
     */
    public function conteolaonce() {
        $pasados = lottery::all();

        $numeros=array('uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez',
            'once','doce','trece','catorce','quince','dieciseis','diecisiete','dieciocho','diecinueve','veinte');
        $numerosonce=array();
        for ($i=1;$i<81;$i++)
        {

            $cont=0;
            foreach ($pasados as $pasado)
            {
                foreach ($numeros as $numero) {
                    if($pasado[$numero]==$i)
                    {
                        $numerosonce[$i]=$cont++;
                        break;
                    }
                }

            }

        }

        $estadistica=self::ordenar($numerosonce);
        return view('superonce')->with(compact('estadistica'));
    }

    /**
     * @param $numerosonce
     * va devolver de mayor a menor los 20 numeros que mas se repiten
     */
    public function ordenar($numerosonce)
    {


    }


}
