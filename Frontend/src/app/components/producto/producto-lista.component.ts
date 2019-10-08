import { Component, OnInit } from '@angular/core';
import { AlmacenService } from 'src/app/services/almacen.service';
import { Producto } from 'src/app/models/producto.model';

import {  Subscription } from 'rxjs';

@Component({
  selector: 'app-producto-lista',
  templateUrl: './producto-lista.component.html',
  styleUrls: ['./producto-lista.component.scss']
})
export class ProductoListaComponent implements OnInit {
   private id: number;
   private nombre: string;
   private descripcion: string;
   public paramsSubscription:Subscription;
   public producto: Producto[];
   
  constructor(public almacenService: AlmacenService) { }

  ngOnInit() {
   this.almacenService.getProducts();
  }
  }


