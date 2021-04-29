import { Component } from '@angular/core';
@Component({
    selector:'app-login',
    templateUrl:'./Login.component.html',
    styleUrls:['./Login.component.css'],
})
export class LoginComponent{
    public iniciarSesion(event:any, email:string, password:string):void {
        event.preventDefault();
        console.log("hola desde login");
        console.log(email);
        console.log(password);
    }
}