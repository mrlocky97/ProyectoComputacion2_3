import { Component } from '@angular/core';
@Component({
    selector:'app-login',
    templateUrl:'./Login.component.html',
    styleUrls:['./Login.component.css'],
})
export class LoginComponent{
    iniciarSesion(event:any, email:string, password:string):void {
        event.preventDefault();
        console.log("INICIANDO SESION ...");
        console.log(email);
        console.log(password);
    }
}