import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListaAlmacenComponent } from './components/lista-almacen/lista-almacen.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { RegistroAlmacenComponent } from './components/registro-almacen/registro-almacen.component';


@NgModule({
  declarations: [
    AppComponent,
    ListaAlmacenComponent,
    RegistroAlmacenComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
