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
        <p>Pacjent</p>
        <p>{appointment.fname_patient}</p>
        <p>Lekarz przyjmujący</p>
        <p>{appointment.fname_doctor}</p>
        <i>Data wizyty: </i>
        <i>{appointment.date}</i>
    </div>
)
};
export default Appointment;