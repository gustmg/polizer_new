<template>
    <div>
        <aside id="menu-drawer" class="mdc-drawer mdc-drawer--modal">
            <div class="mdc-drawer__content">
                <nav class="mdc-list mdc-list--dense" data-mdc-auto-init="MDCList">
                    <a class="mdc-list-item mdc-list-item--activated" href="#" aria-current="page">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">home</i>
                        <span class="mdc-list-item__text">Inicio</span>
                    </a>
                    <hr class="mdc-list-divider">
                    <h6 class="mdc-list-group__subheader">Mis catálogos</h6>
                    <a class="mdc-list-item" href="/companies">
                        <span class="mdc-list-item__text">Empresas</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <span class="mdc-list-item__text">Proveedores</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <span class="mdc-list-item__text">Clientes</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <span class="mdc-list-item__text">Cuentas Contables</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                        <span class="mdc-list-item__text">Cuentas Bancarias</span>
                    </a>
                    <hr class="mdc-list-divider">
                    <h6 class="mdc-list-group__subheader">Integración de pólizas</h6>
                    <a class="mdc-list-item" href="#">
                      <span class="mdc-list-item__text">Provisión</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                      <span class="mdc-list-item__text">Facturación</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                      <span class="mdc-list-item__text">Pago a proveedores</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                      <span class="mdc-list-item__text">Depósito de clientes</span>
                    </a>
                    <hr class="mdc-list-divider">
                    <a class="mdc-list-item" href="#">
                      <i class="material-icons mdc-list-item__graphic" aria-hidden="true">help</i>
                      <span class="mdc-list-item__text">Ayuda</span>
                    </a>
                    <a class="mdc-list-item" href="#">
                      <i class="material-icons mdc-list-item__graphic" aria-hidden="true">mode_comment</i>
                      <span class="mdc-list-item__text">Enviar sugerencias</span>
                    </a>
                    <a class="mdc-list-item" href="/logout">
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">exit_to_app</i>
                      <span class="mdc-list-item__text">Cerrar sesión</span>
                    </a>
                </nav>
            </div>
        </aside>
        <div class="mdc-drawer-scrim"></div>
    </div>
</template>
<style>
    .mdc-list-item{
        margin: 4px 0px !important;
        padding-left: 24px !important;
    }
    .mdc-list--dense .mdc-list-item__graphic{
        margin-right: 24px !important;
    }
    .mdc-drawer .mdc-list-group__subheader{
        padding: 0 24px !important;
    }
</style>
<script>
    export default {
        mounted() {
            console.log('Navbar component mounted.');
        },
    }
</script>