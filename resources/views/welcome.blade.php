<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight:900;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                text-shadow: 0px 2px 3px #212121;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a> -->
                        <button class="mdc-button mdc-button--outlined" onclick="openLoginDialog();">Iniciar sesión</button>

                        @if (Route::has('register'))
                        <button class="mdc-button mdc-button--outlined" onclick="openRegisterDialog();">Crear cuenta</button>
                        @endif
                    @endauth
                </div>
            @endif

            <div id="app" class="content">
                <div class="title m-b-md mdc-theme--primary">
                    polizer
                </div>
                
                <div id="login-dialog" class="mdc-dialog"
                    role="alertdialog"
                    aria-modal="true"
                    aria-labelledby="my-dialog-title"
                    aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
                    <div class="mdc-dialog__container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mdc-dialog__surface">
                                <h2 class="mdc-dialog__title" id="my-dialog-title">Inicio de sesión</h2>
                                <div class="mdc-dialog__content" id="my-dialog-content">
                                    <div class="mdc-layout-grid">
                                        <div class="mdc-layout-grid__inner">
                                            <div class="mdc-layout-grid__cell--span-12">
                                                <div class="mdc-text-field mdc-text-field--outlined login-email-field" data-mdc-auto-init="MDCTextField">
                                                    <input class="mdc-text-field__input" id="login-email" name="email" type="email" required>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="login-email" class="mdc-floating-label">Usuario</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mdc-layout-grid__cell--span-12">
                                                <div class="mdc-text-field mdc-text-field--outlined login-password-field" data-mdc-auto-init="MDCTextField">
                                                    <input class="mdc-text-field__input" id="login-password" name="password" type="password" required>
                                                    <div class="mdc-notched-outline">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="login-password" class="mdc-floating-label">Contraseña</label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <footer class="mdc-dialog__actions">
                                    <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                                    <span class="mdc-button__label">Cancelar</span>
                                    </button>
                                    <button type="submit" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="accept">
                                    <span class="mdc-button__label">Entrar</span>
                                    </button>
                                </footer>
                            </div>
                        </form>
                    </div>
                    <div class="mdc-dialog__scrim"></div>
                </div>
                <div id="register-dialog" class="mdc-dialog"
                    role="alertdialog"
                    aria-modal="true"
                    aria-labelledby="my-dialog-title"
                    aria-describedby="my-dialog-content" data-mdc-auto-init="MDCDialog">
                    <div class="mdc-dialog__container">
                        <div class="mdc-dialog__surface">
                        <h2 class="mdc-dialog__title" id="my-dialog-title">Registro</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mdc-dialog__content" id="my-dialog-content">
                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell--span-12">
                                            <div class="mdc-text-field mdc-text-field--outlined register-name-field" data-mdc-auto-init="MDCTextField">
                                                <input class="mdc-text-field__input" id="name" name="name" type="text" required>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="name" class="mdc-floating-label">Nombre(s)</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell--span-12">
                                            <div class="mdc-text-field mdc-text-field--outlined register-last-name-field" data-mdc-auto-init="MDCTextField">
                                                <input class="mdc-text-field__input" id="last-name" name="last_name" type="text" required>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="last-name" class="mdc-floating-label">Apellidos</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="mdc-layout-grid__cell--span-12">
                                            <div class="mdc-text-field mdc-text-field--outlined register-email-field" data-mdc-auto-init="MDCTextField">
                                                <input class="mdc-text-field__input" id="email" name="email" type="email" required>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="email" class="mdc-floating-label">E-mail</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell--span-12">
                                            <div class="mdc-text-field mdc-text-field--outlined register-password-field" data-mdc-auto-init="MDCTextField">
                                                <input class="mdc-text-field__input" id="password" type="password" name="password" required>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="password" class="mdc-floating-label">Contraseña</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell--span-12">
                                            <div class="mdc-text-field mdc-text-field--outlined register-password-confirm-field" data-mdc-auto-init="MDCTextField">
                                                <input class="mdc-text-field__input" id="password-confirm" type="password" name="password_confirmation" required>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="password-confirm" class="mdc-floating-label">Repite tu contraseña</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer class="mdc-dialog__actions">
                                <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                                <span class="mdc-button__label">Cancelar</span>
                                </button>
                                <button type="submit" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="accept">
                                <span class="mdc-button__label">Registrarse</span>
                                </button>
                            </footer>
                        </form>
                        </div>
                    </div>
                    <div class="mdc-dialog__scrim"></div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            window.mdc.autoInit();
            var login_dialog=document.getElementById("login-dialog");
            var register_dialog=document.getElementById("register-dialog");
            login_dialog.MDCDialog.escapeKeyAction="";
            register_dialog.MDCDialog.escapeKeyAction="";
            login_dialog.MDCDialog.scrimClickAction="";
            register_dialog.MDCDialog.scrimClickAction="";

            login_dialog.MDCDialog.listen('MDCDialog:opening', function(){
                removeLoginValidations();
                removeLoginValues();
            });

            register_dialog.MDCDialog.listen('MDCDialog:opening', function(){
                removeRegisterValidations();
                removeRegisterValues();
            });

            function openLoginDialog() {
                login_dialog.MDCDialog.open();
            }
            function openRegisterDialog() {
                register_dialog.MDCDialog.open();
            }

            function removeLoginValues() {
                $('#login-email').val('');
                $('#login-password').val('');
            }

            function removeLoginValidations() {
                $('.login-email-field').removeClass('mdc-text-field--invalid');
                $('.login-password-field').removeClass('mdc-text-field--invalid');
            }

            function removeRegisterValues() {
                $('#name').val('');
                $('#last-name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#password-confirm').val('');
            }

            function removeRegisterValidations() {
                $('.register-name-field').removeClass('mdc-text-field--invalid');
                $('.register-last-name-field').removeClass('mdc-text-field--invalid');
                $('.register-email-field').removeClass('mdc-text-field--invalid');
                $('.register-password-field').removeClass('mdc-text-field--invalid');
                $('.register-password-confirm-field').removeClass('mdc-text-field--invalid');
            }
        </script>
    </body>
</html>
