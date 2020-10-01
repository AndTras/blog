import { Component, OnInit } from '@angular/core';
import { Post } from './post'
import { PostsService } from './posts.service'
import { environment } from '../../environments/environment';

@Component({
  selector: 'app-posts',
  templateUrl: './posts.component.html',
  styleUrls: ['./posts.component.css'],
  providers: [PostsService],
})
export class PostsComponent implements OnInit {
  baseUrl: string;
  posts: Post[];
  editPost: Post; // the hero currently being edited

  constructor(private potsService: PostsService) { }

  ngOnInit(): void {
    this.getPosts();
    this.baseUrl = environment.baseUrl;
  }

  getPosts(): void {
    this.potsService.getPosts()
      .subscribe(posts => (this.posts = posts));
  }
}
