import { Component, OnInit } from '@angular/core';
import { Post } from './post'
import { PostsService } from './posts.service'
import { Router, ActivatedRoute, ParamMap } from '@angular/router';
import { environment } from '../../environments/environment';

@Component({
  selector: 'app-posts',
  templateUrl: './post.component.html',
  providers: [PostsService],
})
export class PostComponent implements OnInit {
  baseUrl: string;
  post: object;
  id: number;

  editPost: Post;
  constructor(
    private route: ActivatedRoute,
    private potsService: PostsService,
  ) { }

  ngOnInit(): void {
    this.baseUrl = environment.baseUrl;
    this.route.queryParams.subscribe(params => {
      this.id = params['id'];
    });
    this.getPost(this.id);

  }

  getPost(id): void {
    this.potsService.getPost(id)
      .subscribe(post => (this.post = post));
  }
}
