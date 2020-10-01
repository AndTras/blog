import { Injectable, Input } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, retry } from 'rxjs/operators';
import { HttpHeaders } from '@angular/common/http';
import { Post } from './post';
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

    getPosts(): Observable<Post[]> {
        return this.http.get<Post[]>(this.apiUrl+'api/post')
      }
      
      getPost(id): Observable<Post[]> {
        return this.http.get<Post[]>(this.apiUrl+'api/post/'+id)
      }
}