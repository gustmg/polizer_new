/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');
window.mdc = require('material-components-web/dist/material-components-web');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.prototype.$eventBus = new Vue();

Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);
Vue.component('drawer-component', require('./components/DrawerComponent.vue').default);
Vue.component('company-framework-dialog-component', require('./components/CompanyFrameworkDialogComponent.vue').default);

//Companies
Vue.component('new-company-button-component', require('./components/companies/NewCompanyButtonComponent.vue').default);
Vue.component('new-company-dialog-component', require('./components/companies/NewCompanyDialogComponent.vue').default);
Vue.component('delete-company-dialog-component', require('./components/companies/DeleteCompanyDialogComponent.vue').default);
Vue.component('update-company-dialog-component', require('./components/companies/UpdateCompanyDialogComponent.vue').default);
Vue.component('companies-list-component', require('./components/companies/CompaniesListComponent.vue').default);
Vue.component('companies-searchbar-component', require('./components/companies/CompaniesSearchbarComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
