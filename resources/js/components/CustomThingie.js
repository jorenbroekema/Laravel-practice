import { LitElement, html } from '@polymer/lit-element/lit-element.js';
import { style } from './CustomThingie-styles.js';

class CustomThingie extends LitElement {
  static get properties() {
    return {
      mood: { type: String }
    };
  }

  constructor() {
    super();
    this.mood = 'happy';
  }

  render() {
    return html`
      <style> ${style} </style>
      Web Components are <span class="mood">${this.mood}</span>!
    `;
  }
}
customElements.define('custom-thingie', CustomThingie);
