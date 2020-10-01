import { Injectable, Input } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, retry } from 'rxjs/operators';
import { HttpHeaders } from '@angular/common/http';
import { Autor } from './autor';
import { environment } from '../../environments/environment';

const httpOptions = {
    headers: new HttpHeaders({
      'Content-Type':  'application/json'
    })
  };

@Injectable({
  providedIn: 'root'
})

export class PostsService {
  public apiUrl: string;
  constructor(private http: HttpClient) {
    this.apiUrl = environment.baseUrl
   }

    getPosts(): Observable<Autor[]> {
        return this.http.get<Autor[]>(this.apiUrl+'api/autor')
      }
      
      getPost(id): Observable<Autor[]> {
        return this.http.get<Autor[]>(this.apiUrl+'api/autor/'+id)
      }
}