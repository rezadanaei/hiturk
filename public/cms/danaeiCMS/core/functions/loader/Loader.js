import ElementLoader from './ElementLoader.js';

export class Loader {
  constructor() {
    this.elementLoader = new ElementLoader();

  }

  loadAll() {
    this.elementLoader.load();
    
  }
}
