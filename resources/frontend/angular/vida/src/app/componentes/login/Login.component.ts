import { Component } from '@angular/core';
import { DataService } from '../../data.service';
@Component({
    selector:'app-login',
    templateUrl:'./Login.component.html',
    styleUrls:['./Login.component.css'],
})
export class LoginComponent{

    constructor(private dataService: DataService) { }

    public iniciarSesion(event:any, correo:string, contrasena:string):void {
        //llamar a la api y comprobar usuario valido
        event.preventDefault()
        var existe = 0;
        var passOK = 0;
        var isAdmin = 0;

        console.log("Correo: " + correo + "\nPass: " +
         contrasena);

        //Comprobar si existe el correo
        this.dataService.sendGetRequest('Usuarios/existeUsuario/' + correo).subscribe((data: any)=>{
            existe = data;
            console.log("Existe: " + existe);
            //Si existe comprobamos contrasena
            if(existe==1){
                this.dataService.sendGetRequest('Usuarios/checkPassword/' + correo + "/" + contrasena).subscribe((data: any)=>{
                    passOK = data;
                    console.log("passOK: " + passOK);

                    //Si la contrasena es correcta comprueba si es administrador
                if(passOK==1){
                    this.dataService.sendGetRequest('Usuarios/isAdmin/' + correo).subscribe((data: any)=>{
                        isAdmin = data;
                        console.log("isAdmin: " + isAdmin);

                        if(isAdmin==1){
                            console.log("Iniciaste sesión como Administrador")
                        }
    
                        else{
                            console.log("Iniciaste sesión como Usuario")
                        }
                    });

                    
                }

                else{
                    console.log("Correo y/o contraseña incorrecta")
                }
                });
                
            }

            else{
                console.log("Correo y/o contraseña incorrecta")
            }
                
            });
        
        
        

    }
}