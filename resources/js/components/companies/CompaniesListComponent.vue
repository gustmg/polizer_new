<template>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div v-for="(company, index) in filteredCompanies" v-bind:key="company.company_id" class="mdc-layout-grid__cell--span-3 mdc-card">
                <div class="card-content">
                    <h5 class="card-title mdc-typography--headline5 mdc-theme--primary">{{company.company_name}}</h5>
                    <span class="rfc mdc-typography--subtitle2">{{company.company_rfc}}</span>
                </div>
                <div class="mdc-card__actions">
                    <button class="material-icons mdc-icon-button mdc-card__action mdc-card__action--icon" title="Información de la empresa">info</button>
                    <button class="material-icons mdc-icon-button mdc-card__action mdc-card__action--icon" title="Estadísticas de uso">bar_chart</button>
                    <button v-on:click="openUpdateCompanyDialog(company)" class="material-icons mdc-icon-button mdc-card__action mdc-card__action--icon" title="Editar empresa">edit</button>
                    <button v-on:click="openDeleteCompanyDialog(company)" class="material-icons mdc-icon-button mdc-card__action mdc-card__action--icon" title="Eliminar empresa">delete</button>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .card-title{
        margin-top: 16px !important;
        margin-bottom: 8px !important;
    }
    .card-content{
        padding-left:16px;
        padding-right:16px;
        padding-bottom:16px;
    }
    .rfc{
        opacity: 0.42;
    }
</style>
<script>
    import EventBus from "../../event-bus";
    export default {
        mounted(){
            axios.get('http://localhost:8000/companies')
            .then(response=>(this.companies)=response.data.companies)
            .catch(function (error) {
                console.log(error);
            });
        },

        data() {
            return {
                companies: [],
                search: ''
            }
        },

        created() {
            EventBus.$on('company-added', data=>{
                this.companies.push(data);
            });

            EventBus.$on('company-updated', data=>{
                var index = this.companies.findIndex(company => company.company_id === data.company_id);
                this.companies[index].company_name = data.company_name;
                this.companies[index].company_rfc = data.company_rfc;
                this.companies[index].pending_creditable_vat_account = data.pending_creditable_vat_account;
                this.companies[index].paid_creditable_vat_account = data.paid_creditable_vat_account;
                this.companies[index].transferred_vat_account = data.transferred_vat_account;
                this.companies[index].charged_transferred_vat_account = data.charged_transferred_vat_account;
                this.companies[index].fees_retention_isr_account = data.fees_retention_isr_account;
                this.companies[index].fees_retention_vat_account = data.fees_retention_vat_account;
                this.companies[index].freight_retention_vat_account = data.freight_retention_vat_account;
            });

            EventBus.$on('delete-company', data=>{
                this.companies.splice(this.companies.indexOf(data),1);
            });

            EventBus.$on('search-company', data=>{
                this.search=data;
            });
        },

        methods: {
            openDeleteCompanyDialog: function(company) {
                EventBus.$emit('confirm-delete-company', company);
            },

            openUpdateCompanyDialog: function(company) {
                EventBus.$emit('open-update-company-dialog', company);
            }
        },

        computed: {
            filteredCompanies: function() {
                return this.companies.filter((company)=>{
					return company.company_name.toLowerCase().indexOf(this.search.toLowerCase()) >= 0;
				});  
            }
        }
    }
</script>