<template>
    <header id="app-bar" class="mdc-top-app-bar mdc-top-app-bar--fixed">
        <div class="mdc-top-app-bar__row">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <button class="mdc-icon-button material-icons mdc-top-app-bar__navigation-icon mdc-theme--on-secondary">menu</button>
                <button class="mdc-button mdc-theme--on-secondary" data-mdc-auto-init="MDCRipple" v-on:click="openCompanyFrameworkDialog" :disabled="companies_number==0">
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

    export default {
        mounted() {
            console.log('Drawer component mounted.');
            var drawer = new mdc.drawer.MDCDrawer(document.querySelector('.mdc-drawer'));
            const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo(document.getElementById('app-bar'));
            topAppBar.listen('MDCTopAppBar:nav', () => {
                drawer.open = !drawer.open;
            });
        },

        props: {
            companies_number: Number
        },

        methods: {
            openCompanyFrameworkDialog: function() {
                var company_framework_dialog=document.getElementById("company-framework-dialog");
                company_framework_dialog.MDCDialog.escapeKeyAction="";
                company_framework_dialog.MDCDialog.scrimClickAction="";
                company_framework_dialog.MDCDialog.open();
            }
        },
    }
</script>