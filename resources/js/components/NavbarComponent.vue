<template>
    <header id="app-bar" class="mdc-top-app-bar mdc-top-app-bar--fixed">
        <div class="mdc-top-app-bar__row">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <button class="mdc-icon-button material-icons mdc-top-app-bar__navigation-icon mdc-theme--on-secondary">menu</button>
                <button class="mdc-button mdc-theme--on-secondary" data-mdc-auto-init="MDCRipple" v-on:click="openCompanyWorkspaceDialog" :disabled="companies_number==0">
                    <span class="mdc-button__label">Elegir empresa como entorno de trabajo</span>
                    <i class="material-icons mdc-button__icon" aria-hidden="true">arrow_drop_down</i>
                </button>
            </section>
        </div>
    </header>
</template>

<script>
    import {MDCTopAppBar} from '@material/top-app-bar';
    import {MDCDrawer} from "@material/drawer";
    import EventBus from "../event-bus";
    export default {
        mounted() {
            console.log('Drawer component mounted.');
            var drawer = new mdc.drawer.MDCDrawer(document.querySelector('.mdc-drawer'));
            const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo(document.getElementById('app-bar'));
            topAppBar.listen('MDCTopAppBar:nav', () => {
                drawer.open = !drawer.open;
            });

            //TODO: Checkout session retrieve
            axios.get('http://localhost:8000/company_workspace')
            .then(response=>(this.company_workspace)=response.data.company_workspace)
            .catch(function (error) {
                console.log(error);
            });
        },

        props: {
            companies_number: Number
        },

        data() {
            return {
                company_workspace: null
            }
        },

        methods: {
            openCompanyWorkspaceDialog: function() {
                var company_workspace_dialog=document.getElementById("company-workspace-dialog");
                company_workspace_dialog.MDCDialog.escapeKeyAction="";
                company_workspace_dialog.MDCDialog.scrimClickAction="";
                
                axios.get('http://localhost:8000/companies')
                .then(function (response){
                    EventBus.$emit('get-companies', response.data.companies);
                    company_workspace_dialog.MDCDialog.open();
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        },
    }
</script>