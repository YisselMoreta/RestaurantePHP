import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RegistroAlmacenComponent } from './components/registro-almacen/registro-almacen.component';
import { ProductoListaComponent } from './components/producto/producto-lista.component';





const routes: Routes = [
    { path: 'almacen/registro', component: RegistroAlmacenComponent },
    { path: 'almacen/producto', component: ProductoListaComponent },



];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
