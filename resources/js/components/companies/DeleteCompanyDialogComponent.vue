<template>
    <div id="delete-company-dialog" ref="deleteCompanyDialog" class="mdc-dialog"
    role="alertdialog"
    aria-modal="true"
    aria-labelledby="new-company-dialog"
    aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
        <div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <h2 class="mdc-dialog__title">Eliminar Empresa</h2>
                <div class="mdc-dialog__content">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-12">
                                Al eliminar la empresa, los catálogos y estadísticas de ella serán eliminadas.
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mdc-dialog__actions">
                    <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                        <span class="mdc-button__label">Cancelar</span>
                    </button>
                    <button v-on:click="deleteCompany" type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="accept">
                        <span class="mdc-button__label">Aceptar</span>
                    </button>
                </footer>
            </div>
        </div>
        <div class="mdc-dialog__scrim"></div>
    </div>
</template>
<script>
    import EventBus from "../../event-bus";
    export default {
        mounted() {
            console.log("Delete company dialog component mounted.");
        },

        data() {
            return {
                delete_company: null,
            }
        },

        created() {
            EventBus.$on('confirm-delete-company', company=>{
                this.delete_company=company;
                var delete_company_dialog=document.getElementById("delete-company-dialog");
                delete_company_dialog.MDCDialog.escapeKeyAction="";
                delete_company_dialog.MDCDialog.scrimClickAction="";
                delete_company_dialog.MDCDialog.open();
            });
        },

        methods: {
            deleteCompany: function() {
                axios.delete('http://localhost:8000/companies/'+this.delete_company.company_id)
                .then(response=>EventBus.$emit('delete-company', this.delete_company))
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>