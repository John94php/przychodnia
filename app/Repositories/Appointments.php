<?php

namespace App\Repositories;

use App\Appointment;
use App\Http\Resources\Appointment as AppointmentResource;
use Illuminate\Support\Facades\Log;

class Appointments extends Repository
{
    public function all(): Repository
    {
        try {
            $appointments = Appointment::all();
            $appointmentsList = AppointmentResource::collection($appointments);
        } catch (\Exception $e) {
            Log::error(
                'Błąd pobierania danych',
                [
                    'message' => $e->getMessage()
                ]
            );
            $error = true;
        }

        return (new Repository())
            ->setError($error ?? false)
            ->setItems($appointmentsList ?? []);
    }

    public function store($data): Repository
    {
        try {
            $appointment = Appointment::create([
                'title' => $data['title'],
                'fname_patient' => $data['fname_patient'],
                'fname_doctor' => $data['fname_doctor'],
                'date' => $data['date']
            ]);
            $singleItem = new AppointmentResource($appointment);
        } catch (\Exception $e) {
            Log::error(
                'Błąd zapisu danych',
                [
                    'message' => $e->getMessage()
                ]
            );
            $error = true;
        }

        return (new Repository())
            ->setError($error ?? false)
            ->setItems($singleItem ?? []);
    }

    public function show($id): Repository
    {
        try {
            $appointment = Appointment::find($id);
            $singleItem = new AppointmentResource($appointment);
        } catch (\Exception $e) {
            Log::error(
                'Błąd wyświetlania danych',
                [
                    'message' => $e->getMessage()
                ]
            );
            $error = true;
        }

        return (new Repository())
            ->setError($error ?? false)
            ->setItems($singleItem ?? []);
    }

    public function update($id, $data): Repository
    {
        try {
            $appointment =
                $this
                    ->show($id)
                    ->getItems();
            $appointment->title = $data['title'];
            $appointment->fname_patient = $data['fname_patient'];
            $appointment->fname_doctor = $data['fname_doctor'];
            $appointment->date = $data['date'];
            $appointment->save();

            $singleItem = new AppointmentResource($appointment);
        } catch (\Exception $e) {
            Log::error(
                'Błąd przy edytowaniu danych wizyty',
                [
                    'message' => $e->getMessage()
                ]
            );
            $error = true;
        }

        return (new Repository())
            ->setError($error ?? false)
            ->setItems($singleItem ?? []);
    }

    public function delete($id): Repository
    {
        try {
            $appointment =
                $this
                    ->show($id)
                    ->getItems();
            $appointment->delete();
        } catch (\Exception $e) {
            Log::error(
                'Błąd przy usuwaniu wizyty',
                [
                    'message' => $e->getMessage()
                ]
            );
            $error = true;
        }

        return (new Repository())
            ->setError($error ?? false);
    }
}