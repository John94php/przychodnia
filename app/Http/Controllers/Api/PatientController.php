<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Repositories\Patients;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    protected $patientRepository;
    public function __construct()
    {
        $this->patientRepository = new Patients;
        
    }
    public function index() {
        $patientsFetch =
        $this
        ->patientRepository
        ->all();
        if($patientsFetch->hasError()) {
            return response()->json($patientsFetch->getItems(),500);
            
        }
        return response()->json($patientsFetch->getItems(),200);
    }
    
    public function store(Request $request) {
        $patientsStore = $this->patientRepository->store($request->all());
        if($patientsStore->hasError()) {
            return response()->json($patientsStore->getItems(),500);
        }
        return response()->json($patientsStore->getItems(),201);
    }
    
    public function show($id) {
        $patientFetch =
        $this->patientRepository->show($id);
        if($patientFetch->hasError()) {
            return response()->json($patientFetch->getItems(),500);
        }
        return response()->json($patientFetch->getItems(),200);
    }
    public function update($id, Request $request) {
        $patientUpdate =
        $this->patientRepository->update($id,$request->all());
        if($patientUpdate->hasError()) {
            return response()->json($patientUpdate->getItems(),500);
        }
        return response()->json($patientUpdate->getItems(),200);
    }
    public function delete($id) {
        $patientDelete = $this->patientRepository->delete($id);
        if($patientDelete->hasError())
        {
            return response()->json($patientDelete->getItems(),500);
        }
        return response()->json($patientDelete->getItems(),200);
    }
}
