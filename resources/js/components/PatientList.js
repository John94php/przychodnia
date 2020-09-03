import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import Patient from './Patient';
class Patientlist extends Component {
  
    constructor() {
        super();
        this.state = {
            patients: []
        }
    }
componentDidMount() {
    fetch(`/api/patients`)
        .then(response => {
            return response.json();
            })
        .then(patients => {
               this.setState({patients}) 
            });
        }
        handleClick(patient) {
            this.setState({currentPatient : patient});
        }
        renderPatients() {
            return this.state.patients.map(patient => {
                return (
                    <tbody>
                        <tr onClick={() => this.handleClick(patient)}
                         key={patient.id} >
                            
                            <td>{patient.fname}</td>
                            <td>{patient.PESEL}</td>
                            
                        </tr>
                    </tbody>
                );
            })
        }
        render() {
            return(
                <div id="app">
                    <h3>Lista wszystkich Pacjentów</h3>
                    <table className="table table-hovered">
                        <thead>
                            <th>Imię i Nazwisko</th>
                            <th>PESEL</th>
                        </thead>
                        {this.renderPatients()}
                    
                    </table>
                
                <div className="col-8">
                    <Patient patient={this.state.currentPatient ?? ''}/>
                </div>
                </div>
            );
        }
    }



export default Patientlist;
if(document.getElementById('patientlist')) {
    ReactDOM.render(<Patientlist/>, document.getElementById('patientlist'));
}