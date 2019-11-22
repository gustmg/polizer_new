<template>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner" >
            <div class="mdc-layout-grid__cell--span-3"></div>
            <div class="mdc-layout-grid__cell--span-6">
                <div class="mdc-text-field mdc-text-field--fullwidth mdc-card mdc-text-field--with-trailing-icon mdc-text-field--no-label" data-mdc-auto-init="MDCTextField">
                    <i class="material-icons mdc-text-field__icon">search</i>
                    <input class="mdc-text-field__input" id="search_company_input" placeholder="Buscar empresa" @input=searchCompany($event.target.value)>
                    <div class="mdc-line-ripple"></div>
                </div>
            </div>
        </div>        
    </div>    
</template>
<style>
    #search_company_input{
        padding-left: 16px !important;
    }
</style>
<script>
    import EventBus from "../../event-bus";
    export default {
        props: {
            companies: Array
        },

        data() {
            return {
                componentKey: 0
            }
        },

        methods: {
            searchCompany: function(search) {
                EventBus.$emit('search-company', search);
            }
        }
    }
</script>