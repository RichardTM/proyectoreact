import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import ComboPais from './ComboPais';
import ComboDepartamento from './ComboDepartamento';

export default function Example() {

    const [paisId, setPaisId] = useState(0)

    const handlePaisChange = (e) => {
        setPaisId(e.target.value)
        console.log('cambio el pais', e.target.value)
    }
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Ejemplo de Combos Dependientes</div>

                            <div className="card-body">
                                <div className="form-group">
                                    <label>Pais</label>
                                    <ComboPais handlePaisChange={handlePaisChange}/>
                                </div>

                                <div className="form-group">
                                    <label>Departamento</label>
                                    <ComboDepartamento paisId={paisId}/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );

}

if (document.getElementById('mainapp')) {
    ReactDOM.render(<Example />, document.getElementById('mainapp'));
}
