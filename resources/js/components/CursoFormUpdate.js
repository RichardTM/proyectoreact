import React, { useState, useEffect} from 'react'
import {Redirect} from 'react-router-dom'


export default function CursoFormUpdate() {

    const [curso, setCurso] = useState({});
    const [redirect, setRedirect] = useState(false);
    const [lenguas, setLengua] = useState([]);
    const [desarrolladores, setDesarrollador] = useState([]);





    const onChange = (e) => {
        setCurso({
            ...curso,
            [e.target.name]: e.target.value
        })
        console.log(curso)
    }

    const onSubmit = (e) => {
        e.preventDefault();
        const url= '/cursos'
        axios.patch(url, curso)
        .then(res => {
            setRedirect(true)
          })
          .catch(error => {
            console.log('error');
          });
    }

    const cargarLengua = () => {
        let url= `/lenguas`
        axios.get(url)
            .then(respu => {
                setLengua(respu.data)
                console.log(respu.data)
            })
            .catch(err => {
                console.log('error al cargar las lenguas')
            })
    }
    useEffect(cargarLengua, [])


    const cargarDesarrollador = () => {
        let url= `/desarrolladores`
        axios.get(url)
            .then(respu => {
                setDesarrollador(respu.data)
                console.log(respu.data)
            })
            .catch(err => {
                console.log('error al cargar los desarrolladores')
            })
    }
    useEffect(cargarDesarrollador, [])

    if(redirect) {

        return <Redirect to='/'/>
    }
        return (



            <div className="row justify-content-center">

            <div className="card mt-5 py-5">

                <div className="card-body" >
                    <h2 className="card-title text-center mb-5">
                    EDITAR CURSO
                    </h2>
                    <form onSubmit={onSubmit}>

                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-3 col-form-label">
                            {/* {curs.curso ? curs.curso : 'Nombre del curso'} */}
                            Nombre del curso
                            </label>
                            <div className="col-sm-9 col-form-label">
                                <input
                                onChange={onChange}
                                name="curso"
                                type="text"
                                className="form-control"
                                placeholder="Nombre del Curso"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-3 col-form-label">
                            {/* {curs.descripcion ? curs.descripcion : 'Descripcion del curso'} */}
                            Descripcion
                            </label>
                            <div className="col-sm-9 col-form-label">
                                <input
                                onChange={onChange}
                                name="descripcion"
                                type="text"
                                className="form-control"
                                placeholder="Descripcion del Curso"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                            {/* {curs.imagen ? curs.imagen : 'Imagen del curso'} */}
                            Imagen
                            </label>
                            <div className="col-sm-4 col-form-label">
                                <input
                                onChange={onChange}
                                name="imagen"
                                type="text"
                                className="form-control"
                                />
                            </div>

                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Lengua
                            </label>
                            <div className="col-sm-4 col-form-label">
                                <select name="lengua_id" onChange={onChange} className="form-control" required="required">
                                    <option value="">seleccione</option>
                                            {
                                                lenguas.map(lengua_id => {
                                                    return(
                                                        <option  key={lengua_id.id} value={lengua_id.id}>{lengua_id.lengua}</option>
                                                    )
                                                })
                                            }
                                </select>
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-3 col-form-label">
                                Desarrollador
                            </label>
                            <div className="col-sm-9 col-form-label">
                            <select name="desarrollador_id" onChange={onChange} className="form-control" required="required">
                                    <option value="">seleccione</option>
                                    {
                                                desarrolladores.map(desarrollador_id => {
                                                    return(
                                                        <option  key={desarrollador_id.id} value={desarrollador_id.id}>{desarrollador_id.nombres} {desarrollador_id.apellidos}</option>
                                                    )
                                                })
                                            }
                                </select>
                            </div>
                        </div>

                        <input type="submit" className="btn btn-success btn-block py-3 mt-2" value="Guardar"/>
                    </form>
                    <br></br>


                </div>
            </div>
            </div>
        )
    }

