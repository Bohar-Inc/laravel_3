import './bootstrap';
import { createApp } from 'vue'; // Import Vue
import ExampleComponent from '@/components/ExampleComponents.vue';
import ProductAdd from '@/components/products/ProductAdd.vue';


const app = createApp({}); // Create Vue app instance
app.component('ExampleComponent', ExampleComponent); // Register Vue component
app.component('ProductAdd',ProductAdd);
app.mount('#app'); // Mount the app to a DOM element with id="app"
