import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ListaAlmacenComponent } from './components/lista-almacen/lista-almacen.component';
import { RegistroAlmacenComponent } from './components/registro-almacen/registro-almacen.component';




const routes: Routes = [
    { path: 'almacen/lista', component: ListaAlmacenComponent },
    { path: 'almacen/registro', component: RegistroAlmacenComponent },


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
