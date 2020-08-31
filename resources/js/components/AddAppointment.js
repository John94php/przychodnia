import React, {Component} from 'react';
import ReactDOM from 'react-dom';
class AddApointment extends Component {
    
    render() {
        return (
          <div >

                 <table class="table">
                     <tr>
                         <td><label class="badge badge-info">PESEL:</label></td>
                     <td><input type="text" name="#" className="form-control"/></td>
                     </tr>
                     <tr>
                         <td><label class="badge badge-info">Imię Nazwisko Pacjenta</label></td>
                     <td><input type="text" name="#" className="form-control"/></td>
                     </tr>
                     <tr>
                         <td><label class="badge badge-info">Usługa</label></td>
                     <td><input type="text" name="#" className="form-control"/></td>
                     </tr>
                     <tr>
                         
                         <td><label class="badge badge-info">Imię Nazwisko lekarza</label></td>
                     <td><input type="text" name="#" className="form-control"/></td>
                     </tr>

                     <tr>
                         <td><label class="badge badge-info">Termin</label></td>
                     <td><input type="text" name="#" className="form-control"/></td>
                     </tr>
                     <tr>
                         <td>&nbsp;</td>
                         <td><button type="submit" class="btn btn-outline-success btn-block">Zapisz</button></td>
                     </tr>
                 </table>
              </div>
            
        );
    }
    
};

export default AddApointment;
if(document.getElementById('addappointment')) {
    ReactDOM.render(<AddApointment/>, document.getElementById('addappointment'));
}