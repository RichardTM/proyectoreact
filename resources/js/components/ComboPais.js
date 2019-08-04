import React, { useState, useEffect } from 'react'

export default function ComboPais(props) {

    const [paises, setPaises] = useState([])
    const getPaises = () => {
        let url = '/paises'
        axios.get(url)
            .then(resp => {
                setPaises(resp.data)
            })
            .catch(err => {
                console.log(err)
            })
    }

    const handlePaisChange = (e) => {
        props.handlePaisChange(e)
    }

    useEffect(getPaises, [])

    return (
        <select onChange={handlePaisChange} className="form-control">
            <option value={0}>Seleccione una Opcion</option>
            {
                paises.map(pais => <option key={pais.id} value={pais.id}>{pais.pais}</option>)
            }
        </select>
    )
}
