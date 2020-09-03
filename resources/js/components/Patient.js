import React, {Component} from 'react';
const Patient = ({patient}) => {
    if(!patient) {
   return (
        <div className="single-patient-wrapper">
            <br></br>
        <h4>Nie wybrano żadnego pacjenta</h4>
        </div>
    )
}

return (
    <div className="card-body bg-white">
        <ul>
            <li> <label className="badge badge-info">Imię i Nazwisko</label>&nbsp;{patient.fname}</li>
            <li><label className="badge badge-info">PESEL</label>&nbsp;{patient.PESEL}</li>
            <li>{patient.tel}</li>
            <li>{patient.email}</li>
            <li>{patient.zipcode}</li>
            <li>{patient.city}</li>
            <li>{patient.street}</li>
            <li>{patient.house}</li>
            <li>{patient.flat}</li>
        </ul>
    </div>
)
};
export default Patient;