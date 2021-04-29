import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { ComboBoxModule } from '@syncfusion/ej2-angular-dropdowns';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { LoginComponent } from './componentes/login/Login.component';
import { RegistroComponent } from './componentes/registro/registro.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegistroComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    ComboBoxModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
