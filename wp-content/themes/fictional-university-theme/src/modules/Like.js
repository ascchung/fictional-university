import axios from 'axios';

class Like {
  constructor() {
    this.events();
  }
  events() {
    document
      .querySelector('.like-box')
      .addEventListener('click', e => this.ourClickDispatcher(e));
  }

  // methods
  ourClickDispatcher(e) {
    let currentLikeBox = e.currentTarget;
    if (currentLikeBox.getAttribute('data-exists') == 'yes') {
      this.deleteLike(currentLikeBox);
    } else {
      this.createLike(currentLikeBox);
    }
  }
  createLike() {
    alert('create test message');
  }
  deleteLike() {
    alert('delete test message');
  }
}

export default Like;
