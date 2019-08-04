import React, { useState, useEffect } from 'react'

export default function ComboDepartamento({paisId}) {

    const [departamentos, setDepartamentos] = useState([]);

    const getDepartamentos = () => {
        if (paisId == 0) {
            setDepartamentos([])
            return
        }
        let url = `/departamentos`
        axios.get(url)
            .then(resp => {
                setDepartamentos(resp.data)
            })
            .catch(err => {
                console.log(err)
            })
    }

    useEffect(getDepartamentos,[paisId])

    return (
        <select className="form-control">
            {
                departamentos.map(departamento => <option key={departamento.id}>{departamento.departamento}
                </option>)
            }

        </select>
    )
}
