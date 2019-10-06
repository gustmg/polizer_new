<template>
    <div id="update-company-dialog" ref="updateCompanyDialog" class="mdc-dialog"
    role="alertdialog"
    aria-modal="true"
    aria-labelledby="update-company-dialog"
    aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
        <div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <h2 class="mdc-dialog__title">Editar Empresa</h2>
                <div class="mdc-dialog__content">
                    <div class="mdc-layout-grid company-form">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-8">
                                <div class="company-name-field mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyName" v-on:blur="validateCompanyName" class="mdc-text-field__input" id="update_company_name" maxlength="50" required>
                                    <div class="mdc-notched-outline mdc-notched-outline--notched">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_company_name" class="mdc-floating-label mdc-floating-label--float-above">Nombre</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-4">
                                <div id="update_company_rfc" class="company-rfc-field mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyRfc" v-on:blur="validateCompanyRfc" class="mdc-text-field__input" pattern=".{12,}" maxlength="13" required>
                                    <div class="mdc-notched-outline mdc-notched-outline--notched">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_company_rfc" class="mdc-floating-label">RFC</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_pending_creditable_vat" class="update-field mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyPendingCreditableVat" class="mdc-text-field__input" >
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_pending_creditable_vat" class="mdc-floating-label">IVA Acreditable Pendiente</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_paid_creditable_vat" class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyPaidCreditableVat" class="mdc-text-field__input" >
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_paid_creditable_vat" class="mdc-floating-label">IVA Acreditable Pagado</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_transferred_vat" class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyTransferredVat" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_transferred_vat" class="mdc-floating-label">IVA Trasladado</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_charged_transferred_vat" class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyChargedTransferredVat" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_charged_transferred_vat" class="mdc-floating-label">IVA Trasladado Cobrado</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_fees_retention_isr" class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyFeesRetentionIsr" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_fees_retention_isr" class="mdc-floating-label">Retención ISR Honorarios</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_fees_retention_vat" class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyFeesRetentionVat" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_fees_retention_vat" class="mdc-floating-label">Retención IVA Honorarios</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div id="update_freight_retention_vat" class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="updateCompanyFreightRetentionVat" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="update_freight_retention_vat" class="mdc-floating-label">Retención IVA Fletes</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mdc-dialog__actions">
                    <button v-on:click="resetUpdateCompanyInputs" type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                        <span class="mdc-button__label">Cancelar</span>
                    </button>
                    <button v-on:click="updateCompany" type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="accept" :disabled="validateForm">
                        <span class="mdc-button__label">Aceptar</span>
                    </button>
                </footer>
            </div>
        </div>
        <div class="mdc-dialog__scrim"></div>
    </div>
</template>
<style>
    .company-form{
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
</style>
<script>
    import EventBus from "../../event-bus";
    export default {
        mounted() {
            console.log("New company dialog mounted");
        },

        created() {
            EventBus.$on('open-update-company-dialog', company=>{
                var update_company_dialog=document.getElementById("update-company-dialog");
                update_company_dialog.MDCDialog.escapeKeyAction="";
                update_company_dialog.MDCDialog.scrimClickAction="";
                update_company_dialog.MDCDialog.open();
                
                this.updateCompanyId = company.company_id;
                this.updateCompanyName = company.company_name;

                var updateCompanyRfcField=document.getElementById("update_company_rfc");
                updateCompanyRfcField.MDCTextField.value=company.company_rfc;
                this.updateCompanyRfc = company.company_rfc;

                var updateCompanyPendingCreditableVatField=document.getElementById("update_pending_creditable_vat");
                if(company.pending_creditable_vat_account){
                    updateCompanyPendingCreditableVatField.MDCTextField.value=company.pending_creditable_vat_account;
                    this.updateCompanyPendingCreditableVat = company.pending_creditable_vat_account;
                }

                var updateCompanyPaidCreditableVatField=document.getElementById("update_paid_creditable_vat");
                if(company.paid_creditable_vat_account){
                    updateCompanyPaidCreditableVatField.MDCTextField.value=company.paid_creditable_vat_account;
                    this.updateCompanyPaidCreditableVat = company.paid_creditable_vat_account;
                }

                var updateCompanyTransferredVatField=document.getElementById("update_transferred_vat");
                if(company.transferred_vat_account){
                    updateCompanyTransferredVatField.MDCTextField.value=company.transferred_vat_account;
                    this.updateCompanyTransferredVat = company.transferred_vat_account;
                }

                var updateCompanyChargedTransferredVatField=document.getElementById("update_charged_transferred_vat");
                if(company.charged_transferred_vat_account){
                    updateCompanyChargedTransferredVatField.MDCTextField.value=company.charged_transferred_vat_account;
                    this.updateCompanyChargedTransferredVat = company.charged_transferred_vat_account;
                }

                var updateCompanyFeesRetentionIsrField=document.getElementById("update_fees_retention_isr");
                if(company.fees_retention_isr_account){
                    updateCompanyFeesRetentionIsrField.MDCTextField.value=company.fees_retention_isr_account;
                    this.updateCompanyFeesRetentionIsr = company.fees_retention_isr_account;
                }

                var updateCompanyFeesRetentionVatField=document.getElementById("update_fees_retention_vat");
                if(company.fees_retention_vat_account){
                    updateCompanyFeesRetentionVatField.MDCTextField.value=company.fees_retention_vat_account;
                    this.updateCompanyFeesRetentionVat = company.fees_retention_vat_account;
                }

                var updateCompanyFreightRetentionVat=document.getElementById("update_freight_retention_vat");
                if(company.freight_retention_vat_account){
                    updateCompanyFreightRetentionVat.MDCTextField.value=company.freight_retention_vat_account;
                    this.updateCompanyFreightRetentionVat = company.freight_retention_vat_account;
                }
            });
        },

        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                updateCompanyId: null,
                updateCompanyName: null,
                updateCompanyRfc: null,
                updateCompanyPendingCreditableVat: null,
                updateCompanyPaidCreditableVat: null,
                updateCompanyTransferredVat: null,
                updateCompanyChargedTransferredVat: null,
                updateCompanyFeesRetentionIsr: null,
                updateCompanyFeesRetentionVat: null,
                updateCompanyFreightRetentionVat: null,
                validCompanyName: false,
                invalidCompanyName: false,
                validCompanyRfc: false,
                invalidCompanyRfc: false,
            }
        },

        computed: {
            validateForm: function(e) {
                if(!this.validCompanyName || !this.validCompanyRfc){
                    return true;
                }
            }
        },

        methods: {
            updateCompany: function() {
                axios.put('http://localhost:8000/companies/'+this.updateCompanyId,{
                    company_name : this.updateCompanyName,
                    company_rfc : this.updateCompanyRfc,
                    pending_creditable_vat_account : this.updateCompanyPendingCreditableVat,
                    paid_creditable_vat_account : this.updateCompanyPaidCreditableVat,
                    transferred_vat_account : this.updateCompanyTransferredVat,
                    charged_transferred_vat_account : this.updateCompanyChargedTransferredVat,
                    fees_retention_isr_account : this.updateCompanyFeesRetentionIsr,
                    fees_retention_vat_account : this.updateCompanyFeesRetentionVat,
                    freight_retention_vat_account : this.updateCompanyFreightRetentionVat,
                })
                .then((res)=>{
                    EventBus.$emit('company-updated', res.data.company);
                    this.resetUpdateCompanyInputs();
                })
                .catch(function(err){
                    console.log(err);
                });
            },

            validateCompanyName: function(e) {
                if(!this.updateCompanyName){
                    this.validCompanyName = false;
                    this.invalidCompanyName = true;
                }
                else{
                    this.validCompanyName = true;
                    this.invalidCompanyName = false;
                }
            },

            validateCompanyRfc: function(e) {
                if(!this.updateCompanyRfc){
                    this.validCompanyRfc = false;
                    this.invalidCompanyRfc = true;
                }
                else{
                    this.validCompanyRfc = true;
                    this.invalidCompanyRfc = false;
                }
            },

            resetUpdateCompanyInputs: function() {
                var textFields=document.querySelectorAll(".mdc-text-field");
                textFields.forEach(textfield => {
                    textfield.MDCTextField.value='';
                });
                this.updateCompanyName= null;
                this.updateCompanyRfc= null;
                this.updateCompanyPendingCreditableVat= null;
                this.updateCompanyPaidCreditableVat= null;
                this.updateCompanyTransferredVat= null;
                this.updateCompanyChargedTransferredVat= null;
                this.updateCompanyFeesRetentionIsr= null;
                this.updateCompanyFeesRetentionVat= null;
                this.updateCompanyFreightRetentionVat= null;
                this.validCompanyName= false;
                this.invalidCompanyName= false;
                this.validCompanyRfc= false;
                this.invalidCompanyRfc= false;
                $('.company-name-field').removeClass('mdc-text-field--invalid');
                $('.company-rfc-field').removeClass('mdc-text-field--invalid');
            }
        }
    }
</script>