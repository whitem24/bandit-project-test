<?php

namespace App\Http\Controllers;
use Validator;
use DB;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Popularity;
use App\Models\Activity_booking;
use Carbon\Carbon;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=null;
        return view('activities.activities_list', compact('data'));
    }

    public function messages()
    {
        return [
            'date.required' => 'La fecha es requerida',
            'people.required' => 'La cantidad de personas es requerida',
            'people.numeric' => 'La cantidad de personas debe ser un número',
            'total.required' => 'El total a pagar es requerido',
            'total.numeric' => 'El total a pagar debe ser un número',
            'activity_id.required' => 'No hay una actividad asociada a la compra',
            'date.required' => 'La fecha de actividad es requerida',
        ];
    }

    public function search(Request $request)
    {
        $messages = $this->messages();
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'people' => 'required|numeric|min:1',
        ],$messages);
        if($validator->fails()){
            return redirect()
                ->route('activities.index')
                ->withErrors($validator)
                ->withInput();
        }else{
            $date = $request->date;
            $people =  $request->people;

            $data = Activity::with(['related_activities' => function($query) use ($date) { 
                            $query->where('start_date', '<=' , $date)
                                 ->where('end_date', '>=', $date); 
                            }])
                        ->where('start_date', '<=' , $date)
                        ->where('end_date', '>=', $date)
                        ->orderByDesc(Popularity::select('level')->whereColumn('id', 'activities.popularity_id'))
                        ->get();

            return view('activities.activities_list', compact('data', 'people', 'date'));
            
        }
        
    }

    public function buy(Request $request)
    {
        $messages = $this->messages();
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'activity_id' => 'required',
            'total' => 'required|numeric',
            'people' => 'required|numeric|min:1',
        ],$messages);
        if($validator->fails()){
            return redirect()
                ->route('activities.index')
                ->withErrors($validator)
                ->withInput();
        }else{
            $activity_id = $request->activity_id;
            $people = $request->people;
            $date = $request->date;
            $total = $request->total;
            $res_date = Carbon::now();
            
            $booking = new Activity_booking;
            $booking->people =  $people;
            $booking->activity_date =  $date;
            $booking->price =  $total;
            $booking->reservation_date =  $res_date;
            $booking->activity_id =  $activity_id;

            if ($booking->save()) {
                return redirect('/')->with('booked', 'Has reservado exitosamente!');
            }

        }
        
    }
}
