import React, {Component} from 'react';
const Appointment = ({appointment}) => {
    if(!appointment) {
        return (
            <div className="single-appointment-wrapper">
                <h4>Żadna z wizyt nie została wybrana</h4>
            </div>
        )
    }
return (
    <div className="card-body bg-white">
        <h3>{appointment.title}</h3>
        <p>Pacjent <b>{appointment.fname_patient}</b></p>

        <p>Lekarz przyjmujący <b>{appointment.fname_doctor}</b></p>
        
        <i>Data wizyty:         <b>{appointment.date}</b></i>

    </div>
)
};
export default Appointment;