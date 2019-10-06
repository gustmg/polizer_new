<template>
    <div id="company-framework-dialog" ref="companyFrameworkDialog" class="mdc-dialog"
        role="alertdialog"
        aria-modal="true"
        aria-labelledby="my-dialog-title"
        aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
        <div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <h2 class="mdc-dialog__title" id="my-dialog-title">Elegir empresa como entorno de trabajo</h2>
                <div class="mdc-dialog__content" id="my-dialog-content">
                    <ul class="mdc-list mdc-dialog__content" role="radiogroup" data-mdc-auto-init="MDCList">
                        <li v-for="(company, index) in companies" v-bind:key="company.company_id" class="mdc-list-item" role="radio" aria-checked="false">
                            <span class="mdc-list-item__graphic">
                                <div class="mdc-radio">
                                    <input class="mdc-radio__native-control"
                                    type="radio"
                                    id="demo-list-radio-item-1"
                                    name="demo-list-radio-item-group"
                                    :value="company.company_id">
                                    <div class="mdc-radio__background">
                                        <div class="mdc-radio__outer-circle"></div>
                                        <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                </div>
                            </span>
                            <label class="mdc-list-item__text" for="demo-list-radio-item-1">Option 1</label>
                        </li>
                        <!-- <li class="mdc-list-item" role="radio" aria-checked="false">
                            <span class="mdc-list-item__graphic">
                                <div class="mdc-radio">
                                    <input class="mdc-radio__native-control"
                                    type="radio"
                                    id="demo-list-radio-item-1"
                                    name="demo-list-radio-item-group"
                                    value="1">
                                    <div class="mdc-radio__background">
                                        <div class="mdc-radio__outer-circle"></div>
                                        <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                </div>
                            </span>
                            <label class="mdc-list-item__text" for="demo-list-radio-item-1">Option 1</label>
                        </li>
                        <li class="mdc-list-item" role="radio" aria-checked="false">
                            <span class="mdc-list-item__graphic">
                                <div class="mdc-radio">
                                    <input class="mdc-radio__native-control"
                                    type="radio"
                                    id="demo-list-radio-item-2"
                                    name="demo-list-radio-item-group"
                                    value="2">
                                    <div class="mdc-radio__background">
                                        <div class="mdc-radio__outer-circle"></div>
                                        <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                </div>
                            </span>
                            <label class="mdc-list-item__text" for="demo-list-radio-item-2">Option 2</label>
                        </li> -->
                    </ul>
                </div>
                <footer class="mdc-dialog__actions">
                    <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                    <span class="mdc-button__label">Cancelar</span>
                    </button>
                    <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="accept">
                    <span class="mdc-button__label">Aceptar</span>
                    </button>
                </footer>
            </div>
        </div>
        <div class="mdc-dialog__scrim"></div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log("Company framework dialog mounted");
            // console.log(this.companies);
        },

        props: {
            companies: Array
        }
    }
</script>