import { Component, OnInit} from '@angular/core';
import { Municipio } from './modelo/municipio';
import { DataService } from '../../data.service';

@Component({
    selector:'app-registro',
    templateUrl:'./registro.component.html',
    styleUrls:['./registro.component.css'],
})
export class RegistroComponent implements OnInit{

    //LLAMAR A LA API, PARA QUE EXTRAIGO LOS OBJETOS DE LOS MUNICIPIS (METODO INDEX -> MunicipiosController).
    //municipios: string[] = ['Getafe', 'Madrid', 'Villaciciosa de Odon', 'Mostoles', 'Alcorcon'];

    /* PRUEBA DE RELLANAR EL ARRAY DE MUNICIPIOS.
    municipios1 = new Municipio(222, 'Getafe', 111);
    municipios2 = new Municipio(333, 'Alcorcon', 111);

    municipios: Municipio[] = [this.municipios1, this.municipios2]; //rellenarlo
    */
    municipios: Municipio[] =[];

    constructor(private dataService: DataService) { }

    ngOnInit(): void {
        this.dataService.sendGetRequest('Municipios').subscribe((data: any)=>{
            this.municipios = data;
        });
    }

    public localFields: Object = { text: 'MUNICIPIO', value: 'CODMU' };
    public localWaterMark: string = 'Selecciona un municipio';

    // set the height of the popup element.
    public height: string = '250px';

    registrarUsuario(event:any, nombre:string,apellidos:string,email:string, password:string, cb_municipio:any):void {
        event.preventDefault();
        console.log("REGISTRANDO USUARIO ...");
        console.log(nombre);
        console.log(apellidos);
        console.log(email);
        console.log(password);
        console.log(cb_municipio);
        //buenas tardess
    }
}