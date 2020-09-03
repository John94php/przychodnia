<?php
namespace App\Repositories;
use App\Patient;
use App\Http\Resources\Patient as PatientResource;
use Illuminate\Support\Facades\Log;

class Patients extends Repository
 {
    public function all(): Repository {
        try {
            $patients = Patient::all();
            $patientsList = PatientResource::collection($patients);
        }
        catch(\Exception $e) {
            Log::error(
                'Błąd pobierania danych',[
                'message' =>$e->getMessage()
            ]);
            $error = true;
            
        }
        return (new Repository())
        ->setError($error ?? false)
        ->setItems($patientsList ?? []);
    }
    public function store($data): Repository
    {
        try {
            $patient = Patient::create([
                'fname' => $data['fname'],
                'PESEL' => $data['PESEL'],
                'tel' => $data['tel'],
                'email' => $data['email'],
                'zipcode' => $data['zipcode'],
                'city' => $data['city'],
                'street' => $data['street'],
                'house' => $data['house'],
                'flat' => $data['flat'] 
            ]);
            $singleItem = new PatientResource($patient);
        }

        catch (\Exception $e) {
            Log::error(
                'Błąd zapisu pacjenta',
                [
                    'message' =>$e->getMessage()
                ]
                );
                $error = true;
        }
        return (new Repository())
        ->setError($error ?? false)
        ->setItems($singleItem ?? []);
    }
    public function show($id): Repository {
        try {
            $patient = Patient::find();
            $singleItem = new PatientResource($patient);
        } catch (\Exception $e) {
            Log::error(
                'Błąd wyświetlania danych',
                [
                    'message' =>$e->getMessage()
                ]
                );
                $error = true;
        }
        return (new Repository())
        ->setError($error ?? false)
        ->setItems($singleItem ?? []);
    }
    public function update($id,$data): Repository {
        try {
            $patient = 
            $this
            ->show($id)
            ->getItems();
            $patient->fname = $data['fname'];
            $patient->PESEL = $data['PESEL'];
            $patient->tel = $data['tel'];
            $patient->email = $data['email'];
            $patient->zipcode = $data['zipcode'];
            $patient->city = $data['city'];
            $patient->street = $data['street'];
            $patient->house = $data['house'];
            $patient->flat = $data['flat'];
            $patiient->save();
            
            $singleItem = new PatientResource($patient);
                } catch (\Exception $e) {
                    Log::error(
                        'Błąd przy edycji danych pacjenta',
                        [
                            'message' =>$e->getMessage()
                        ]
                        );
                        $error = true;
                }
                return (new Repository())
                ->setError($error ?? false)
                ->setItems($singleItem ?? []);
    }
    public function delete($id): Repository {
        try {
            $patient = 
            $this
            ->show($id)
            ->getItems();
            $patient->delete();
        } catch (\Exception $e) {
            Log::error(
                'Błąd przy usuwaniu danych pacjenta',
                [
                    'message' =>$e->getMessage()
                ]
                );
                $error = true;
        }
        return (new Repository())
        ->setError($error ?? false);
    }
}