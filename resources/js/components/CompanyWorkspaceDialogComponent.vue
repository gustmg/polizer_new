<template>
    <div id="company-workspace-dialog" ref="companyWorkspaceDialog" class="mdc-dialog"
        role="alertdialog"
        aria-modal="true"
        aria-labelledby="my-dialog-title"
        aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
        <div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <div class="mdc-dialog__content" id="my-dialog-content">
                    <div align="center">
                        <i class="material-icons large-icon">business_center</i>
                        <h6 class="mdc-typography--headline6 dialog-title">Comisión Federal de Electricidad</h6>
                        <span class="mdc-typography--caption">Empresa actualmente en uso</span>
                    </div>
                </div>
                <div class="mdc-list-divider"></div>
                <div class="companies-list">
                    <ul class="mdc-list" role="listbox" data-mdc-auto-init="MDCList">
                        <li v-for="(company, index) in companies" v-bind:key="company.company_id" class="mdc-list-item" role="option" aria-checked="false">
                            <i class="material-icons">business_center</i><span class="mdc-list-item__text padding-left-24">{{company.company_name}}</span>
                        </li>
                    </ul>
                </div>
                <footer class="mdc-dialog__actions">
                    <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                        <span class="mdc-button__label">Cancelar</span>
                    </button>
                </footer>
            </div>
        </div>
        <div class="mdc-dialog__scrim"></div>
    </div>
</template>
<style>
    .large-icon{
        font-size:48px !important;
    }
    .dialog-title{
        margin-top:0 !important;
        margin-bottom:0 !important;
    }
    .padding-left-24{
        padding-left:8px !important;
    }
    .companies-list{
        max-height: 350px;
        overflow-y: auto;
    }
</style>
<script>
    import EventBus from "../event-bus";
    export default {
        mounted() {
            console.log("Company workspace dialog mounted");
        },

        data() {
            return {
                companies: []
            }
        },

        created() {
            EventBus.$on('get-companies', data=>{
                this.companies=data;
            });
        }
    }
</script>