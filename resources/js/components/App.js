import React  from 'react';
import ReactDOM from 'react-dom';
import {HashRouter, Route, Switch} from "react-router-dom";
import CourseList from './CourseList';
import NotFound from './NotFound';
import CursoLista from './CursoLista';
import CursoForm from './CursoForm';
import { Link } from 'react-router-dom';
import CursoFormUpdate from './CursoFormUpdate';




const App = () => {
    return (

        <div className="container">
            <div className="title m-b-md">
                <h1 className="display-1">CURSO REACT</h1>
            </div>
            <div className="row justify-content-center">

               <Link to={'/curso/create' }  className="btn btn-success" >
                    Crear Curso
                </Link>
               <CourseList/>

            </div>


        </div>
    )
}

const Root = () => (
    <HashRouter>
        <Switch>

            <Route path="/" exact component={App}/>
            <Route path="/cursos/:id" exact component={CursoLista} />
            <Route path="/cursos/editar/:id" exact component={CursoFormUpdate} />
            <Route path="/curso/create" exact component={CursoForm} />
            <Route component={NotFound} />
        </Switch>
    </HashRouter>
);

if (document.getElementById('app')) {
    ReactDOM.render(<Root />, document.getElementById('app'));
}
