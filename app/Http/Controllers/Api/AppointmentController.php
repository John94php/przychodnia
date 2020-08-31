<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Repositories\Appointments;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    protected $appointmentRepository;
    public function __construct()
    {
        $this->appointmentRepository = new Appointments;
        
    }
    public function index() {
        $appointmentsFetch =
        $this
        ->appointmentRepository
        ->all();
        if($appointmentsFetch->hasError()) {
            return response()->json($appointmentsFetch->getItems(),500);
            
        }
        return response()->json($appointmentsFetch->getItems(),200);
    }
    
    public function store(Request $request) {
        $appointmentsStore = $this->appointmentRepository->store($request->all());
        if($appointmentsStore->hasError()) {
            return response()->json($appointmentsStore->getItems(),500);
        }
        return response()->json($appointmentsStore->getItems(),201);
    }
    
    public function show($id) {
        $appointmentFetch =
        $this->appointmentRepository->show($id);
        if($appointmentFetch->hasError()) {
            return response()->json($appointmentFetch->getItems(),500);
        }
        return response()->json($appointmentFetch->getItems(),200);
    }
    public function update($id, Request $request) {
        $appointmentUpdate =
        $this->appointmentRepository->update($id,$request->all());
        if($appointmentUpdate->hasError()) {
            return response()->json($appointmentUpdate->getItems(),500);
        }
        return response()->json($appointmentUpdate->getItems(),200);
    }
    public function delete($id) {
        $appointmentDelete = $this->appointmentRepository->delete($id);
        if($appointmentDelete->hasError())
        {
            return response()->json($appointmentDelete->getItems(),500);
        }
        return response()->json($appointmentDelete->getItems(),200);
    }
}
