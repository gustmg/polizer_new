<template>
    <div id="new-company-dialog" ref="newCompanyDialog" class="mdc-dialog"
    role="alertdialog"
    aria-modal="true"
    aria-labelledby="new-company-dialog"
    aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
        <div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <h2 class="mdc-dialog__title">Nueva Empresa</h2>
                <div class="mdc-dialog__content">
                    <div class="mdc-layout-grid company-form">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-8">
                                <div class="company-name-field mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyName" v-on:blur="validateCompanyName" class="mdc-text-field__input" id="company_name" maxlength="50" required>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="company_name" class="mdc-floating-label">Nombre</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-4">
                                <div class="company-rfc-field mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyRfc" v-on:blur="validateCompanyRfc" class="mdc-text-field__input" id="company_rfc" pattern=".{12,}" maxlength="13" required>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="company_rfc" class="mdc-floating-label">RFC</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyPendingCreditableVat" class="mdc-text-field__input" id="pending_creditable_vat">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="pending_creditable_vat" class="mdc-floating-label">IVA Acreditable Pendiente</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyPaidCreditableVat" class="mdc-text-field__input" id="paid_creditable_vat">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="paid_creditable_vat" class="mdc-floating-label">IVA Acreditable Pagado</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyTransferredVat" class="mdc-text-field__input" id="transferred_vat">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="transferred_vat" class="mdc-floating-label">IVA Trasladado</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyChargedTransferredVat" class="mdc-text-field__input" id="charged_transferred_vat">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="charged_transferred_vat" class="mdc-floating-label">IVA Trasladado Cobrado</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyFeesRetentionIsr" class="mdc-text-field__input" id="fees_retention_isr">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="fees_retention_isr" class="mdc-floating-label">Retención ISR Honorarios</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyFeesRetentionVat" class="mdc-text-field__input" id="fees_retention_vat">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="fees_retention_vat" class="mdc-floating-label">Retención IVA Honorarios</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                                <div class="mdc-text-field mdc-text-field--outlined full-width" data-mdc-auto-init="MDCTextField">
                                    <input v-model="newCompanyFreightRetentionVat" class="mdc-text-field__input" id="freight_retention_vat">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="freight_retention_vat" class="mdc-floating-label">Retención IVA Fletes</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mdc-dialog__actions">
                    <button v-on:click="resetNewCompanyInputs" type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                        <span class="mdc-button__label">Cancelar</span>
                    </button>
                    <button v-on:click="saveCompany" type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="accept" :disabled="validateForm">
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

        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                newCompanyName: null,
                newCompanyRfc: null,
                newCompanyPendingCreditableVat: null,
                newCompanyPaidCreditableVat: null,
                newCompanyTransferredVat: null,
                newCompanyChargedTransferredVat: null,
                newCompanyFeesRetentionIsr: null,
                newCompanyFeesRetentionVat: null,
                newCompanyFreightRetentionVat: null,
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
            saveCompany: function() {
                axios.post('http://localhost:8000/companies',{
                    company_name : this.newCompanyName,
                    company_rfc : this.newCompanyRfc,
                    pending_creditable_vat_account : this.newCompanyPendingCreditableVat,
                    paid_creditable_vat_account : this.newCompanyPaidCreditableVat,
                    transferred_vat_account : this.newCompanyTransferredVat,
                    charged_transferred_vat_account : this.newCompanyChargedTransferredVat,
                    fees_retention_isr_account : this.newCompanyFeesRetentionIsr,
                    fees_retention_vat_account : this.newCompanyFeesRetentionVat,
                    freight_retention_vat_account : this.newCompanyFreightRetentionVat,
                })
                .then((res)=>{
                    EventBus.$emit('company-added', res.data.company);
                    this.resetNewCompanyInputs();
                })
                .catch(function(err){
                    console.log(err);
                });
            },

            validateCompanyName: function(e) {
                if(!this.newCompanyName){
                    this.validCompanyName = false;
                    this.invalidCompanyName = true;
                }
                else{
                    this.validCompanyName = true;
                    this.invalidCompanyName = false;
                }
            },

            validateCompanyRfc: function(e) {
                if(!this.newCompanyRfc){
                    this.validCompanyRfc = false;
                    this.invalidCompanyRfc = true;
                }
                else{
                    this.validCompanyRfc = true;
                    this.invalidCompanyRfc = false;
                }
            },

            resetNewCompanyInputs: function() {
                this.newCompanyName= null;
                this.newCompanyRfc= null;
                this.newCompanyPendingCreditableVat= null;
                this.newCompanyPaidCreditableVat= null;
                this.newCompanyTransferredVat= null;
                this.newCompanyChargedTransferredVat= null;
                this.newCompanyFeesRetentionIsr= null;
                this.newCompanyFeesRetentionVat= null;
                this.newCompanyFreightRetentionVat= null;
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