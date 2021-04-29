import { Component } from '@angular/core';
@Component({
    selector:'app-registro',
    templateUrl:'./registro.component.html',
    styleUrls:['./registro.component.css'],
})
export class RegistroComponent{
    registrarUsuario(event:any, nombre:string,apellidos:string,email:string, password:string):void {
        event.preventDefault();
        console.log("REGISTRANDO USUARIO ...");
        console.log(nombre);
        console.log(apellidos);
        console.log(email);
        console.log(password);
    }
}