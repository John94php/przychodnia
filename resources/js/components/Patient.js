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
        <ul className="list-group">
            <li className="list-group-item"> <label className="badge badge-info">Imię i Nazwisko</label>&nbsp;{patient.fname}</li>
            <li className="list-group-item"><label className="badge badge-info">PESEL</label>&nbsp;{patient.PESEL}</li>
            <li className="list-group-item"><label className="badge badge-info">Numer telefonu</label>&nbsp;{patient.tel}</li>
            <li className="list-group-item"><label className="badge badge-info">Adres e-mail</label>&nbsp;{patient.email}</li>
            <li className="list-group-item"><label className="badge badge-info">Kod pocztowy</label>&nbsp;{patient.zipcode}</li>
            <li className="list-group-item"><label className="badge badge-info">Miejscowość</label>&nbsp;{patient.city}</li>
            <li className="list-group-item"><label className="badge badge-info">Ulica</label>{patient.street}</li>
            <li className="list-group-item"><label className="badge badge-info">Numer budynku</label>&nbsp;{patient.house}</li>
            <li className="list-group-item"><label className="badge badge-info">Numer lokalu</label>&nbsp;{patient.flat}</li>
        </ul>
        <a href="#" className="btn btn-outline-dark">Edytuj</a>
    </div>
)
};
export default Patient;