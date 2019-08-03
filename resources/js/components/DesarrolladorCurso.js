import React from 'react'


export default function DesarrolladorCurso(props) {

    const divStyle = {
        width: '250px'
    }
    return (

        <div className="card m-3 center" style={divStyle}>
            <br></br>
            <i class="fa fa fas fa-user-tie fa-5x"></i>
            <div className="card-body">

            <h2 className="card-title">{props.nombre}</h2>
            <p className="card-text">{props.apellido}</p>


            </div>


        </div>

    )
}
