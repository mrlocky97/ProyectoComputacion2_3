import { Component } from '@angular/core';
@Component({
    selector:'app-login',
    templateUrl:'./Login.component.html',
    styleUrls:['./Login.component.css'],
})
export class LoginComponent{
    public iniciarSesion(nombre:string, contrasena:string):void {
        //llamar a la api y comprobar usuario valido
    }
}