<template>
    <button class="mdc-fab mdc-fab--extended new-company-button mdc-theme--primary-bg" v-on:click="openNewCompanyDialog">
        <span class="material-icons mdc-fab__icon">add</span>
        <span class="mdc-fab__label">Agregar empresa</span>
    </button>
</template>
<style>
    .new-company-button{
        position: fixed;
        bottom: 24px;
        right: 24px;
    }
</style>
<script>
    import {MDCRipple} from '@material/ripple';

    export default {
        mounted() {
            console.log("New company button component mounted.");
            const newCompanyButton = new MDCRipple(document.querySelector('.new-company-button'));
        },

        methods: {
            openNewCompanyDialog: function() {
                var new_company_dialog=document.getElementById("new-company-dialog");
                new_company_dialog.MDCDialog.escapeKeyAction="";
                new_company_dialog.MDCDialog.scrimClickAction="";
                new_company_dialog.MDCDialog.open();
            }
        }
    }
</script>
