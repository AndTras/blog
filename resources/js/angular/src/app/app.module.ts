import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router'; // CLI imports router

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { PostsComponent } from './posts/posts.component';
import { PostComponent } from './posts/post.component';
import { AutorsComponent } from './autors/autors.component';


const routes: Routes = [
  { path: '', component: PostsComponent },
  { path: 'post', component: PostComponent },
];

@NgModule({
  declarations: [
    AppComponent,
    PostsComponent,
    PostComponent,
    AutorsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    RouterModule.forRoot(routes),
  ],
  exports: [RouterModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
