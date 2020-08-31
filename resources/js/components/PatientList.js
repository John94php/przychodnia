import React, {Component} from 'react';
import ReactDOM from 'react-dom';
class PatientList extends Component {
    render() {
        return(
          <div>
              <table class="table table-hovered">
                  <thead>
                      <th>Imię i nazwisko</th>
                      <th>PESEL</th>
                      <th>Akcje</th>
                  </thead>
                  <tbody>
                      <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>
                              <a href="#" class="btn btn-info">Podgląd</a>
                              <a href="#" class="btn btn-warning">Edycja</a>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>  
        );
    }
}

export default PatientList;
if(document.getElementById('list')) {
    ReactDOM.render(<PatientList/>, document.getElementById('list'));
}