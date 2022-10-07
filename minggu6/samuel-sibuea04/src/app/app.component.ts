import { Component, ViewChild } from '@angular/core';
import { ArticleComponent } from './article/article.component';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  public childItems = [];
  public duplicateChild(title: HTMLInputElement, link: HTMLInputElement){
    this.childItems.push(
      {
      title: title.value,
      link: link.value
      }
    );
    title.value = '';
    link.value = '';
  }
}
