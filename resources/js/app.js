import './bootstrap'; // Import your bootstrap setup
import { createApp } from 'vue'; // Import createApp from Vue 3
import ExampleComponent from '@/components/ExampleComponents.vue'; // Import your Vue component

const app = createApp({});
app.component('example-component', ExampleComponent);
app.mount('#app');
