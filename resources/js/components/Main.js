import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import Appointment from './Appointment';

class Main extends Component {
    
    constructor() {
        super();    
        this.state = {
            appointments: []
        }    
    }



componentDidMount() {
    fetch(`/api/appointments`)
    .then(response => {
        return response.json();
    })
    .then(appointments => {
       this.setState({appointments}) 
    });
}
handleClick(appointment) {
    this.setState({currentAppointment : appointment});
}
renderAppointments() {
    return this.state.appointments.map(appointment => {
        return (
<tbody>
    
<tr onClick={() => this.handleClick(appointment)}
             key={appointment.id} className="bg-white" >
                <td>
                <i className="fas fa-file-medical-alt"></i>&nbsp;
                    {appointment.title}
                    </td>
                        <td>
                        <i className="fas fa-user"></i>&nbsp;
                        {appointment.fname_patient}
                        </td>
                             <td>
                             <i className="fas fa-user"></i>&nbsp;
                              {appointment.fname_doctor}
                              </td> 
            </tr>
    
</tbody>
        );
    })
}

    render() 
    {

         
        return (
            <div id="app">

                    <a href="/logout" className="btn btn-outline-danger">Wyloguj się</a>
                    <a href="#" className="btn btn-outline-success">Dodaj pacjenta</a>
                    <a href="/patientlist" className="btn btn-outline-info">Lista pacjentów</a>
                    <hr/>
                <a href="/addappointment" className="btn btn-outline-info"><i className="fas fa-plus"></i>&nbsp;Nowa wizyta</a>
         <div className="row">
             <div className="col-4">
                 <h3>Lista wszystkich wizyt</h3>
                 <table className="table table-hovered">
                     <thead>
                         <th>Usługa</th>
                         <th>Pacjent</th>
                         <th>Lekarz</th>
                     </thead>
                     {this.renderAppointments()}
                     
                 </table>
             </div>
             <div className="col-8">
                 <Appointment appointment={this.state.currentAppointment ?? ''}/>
             </div>
         </div>
            
            </div>
        );   
        }
    }

export default Main;
if(document.getElementById('root')) {
    ReactDOM.render(<Main/>, document.getElementById('root'));
}