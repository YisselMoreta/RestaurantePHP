import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Producto } from 'src/app/models/producto.model';
import { HttpClientModule } from '@angular/common/http';


@Injectable({
  providedIn: 'root'
})
export class AlmacenService {
  private productosUrl = `http://127.0.0.1:8000/api/almacenes`;
  constructor(private http:HttpClient) { 
    
    
  }

  getProducts():Observable<Producto[]>{
    return this.http.get<Producto[]>(this.productosUrl);
  }

}
