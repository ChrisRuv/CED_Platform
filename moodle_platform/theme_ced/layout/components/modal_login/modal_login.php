<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Login Modal -->
<div id="login-modal" class="<?php echo $STYLES['overlay']; ?>">
    <div class="<?php echo $STYLES['backdrop']; ?>" onclick="<?php echo $ACTIONS['login_dismiss']; ?>"></div>

    <div class="<?php echo $STYLES['modal']; ?>" style="background: <?php echo $SITE->brand->dark; ?>;">
        <button onclick="<?php echo $ACTIONS['login_dismiss']; ?>" class="<?php echo $STYLES['close_btn']; ?>">
            <svg class="<?php echo $STYLES['close_icon']; ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Header -->
        <div class="<?php echo $STYLES['header']; ?>">
            <div class="<?php echo $STYLES['header_bg']; ?>">
                <img src="<?php echo htmlspecialchars($OUTPUT->image_url('branding/blob-decoration', 'theme_ced'), ENT_QUOTES, 'UTF-8'); ?>"
                    alt="" aria-hidden="true" class="<?php echo $STYLES['header_bg_img']; ?>">
            </div>
            <div class="<?php echo $STYLES['header_content']; ?>">
                <img src="<?php echo htmlspecialchars($SITE->brand->logo, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="<?php echo htmlspecialchars($SITE->name, ENT_QUOTES, 'UTF-8'); ?> Logo"
                    class="<?php echo $STYLES['logo']; ?>">
                <p class="<?php echo $STYLES['platform_text']; ?>">PLATAFORMA EDUCATIVA</p>
            </div>
        </div>

        <!-- Form -->
        <div class="<?php echo $STYLES['form_wrap']; ?>">
            <?php
            $loginToken = '';
            if (class_exists('\core\session\manager')) {
                $loginToken = \core\session\manager::get_login_token();
            }
            ?>
            <form action="/login/index.php" method="post" id="login" autocomplete="off">
                <input type="hidden" name="logintoken" id="logintoken"
                    value="<?php echo htmlspecialchars($loginToken, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="<?php echo $STYLES['fields']; ?>">
                    <!-- Username -->
                    <div>
                        <label for="username" class="<?php echo $STYLES['label']; ?>">Nombre de usuario</label>
                        <div class="<?php echo $STYLES['field_group']; ?>">
                            <div class="<?php echo $STYLES['icon_wrap']; ?>">
                                <svg class="<?php echo $STYLES['icon']; ?>" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" name="username" id="username" autocomplete="username"
                                class="<?php echo $STYLES['input']; ?>" placeholder="Usuario">
                        </div>
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="<?php echo $STYLES['label']; ?>">Contraseña</label>
                        <div class="<?php echo $STYLES['field_group']; ?>">
                            <div class="<?php echo $STYLES['icon_wrap']; ?>">
                                <svg class="<?php echo $STYLES['icon']; ?>" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                class="<?php echo $STYLES['input']; ?>" placeholder="••••••••">
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="<?php echo $STYLES['actions_row']; ?>">
                        <div class="<?php echo $STYLES['remember_wrap']; ?>">
                            <input id="rememberusername" name="rememberusername" type="checkbox" value="1"
                                class="<?php echo $STYLES['checkbox']; ?>">
                            <label for="rememberusername" class="<?php echo $STYLES['checkbox_label']; ?>">Recordar
                                usuario</label>
                        </div>
                        <div class="<?php echo $STYLES['forgot_wrap']; ?>">
                            <a href="/login/forgot_password.php" class="<?php echo $STYLES['forgot_link']; ?>">¿Olvidó
                                su contraseña?</a>
                        </div>
                    </div>
                    <!-- Submit -->
                    <div class="<?php echo $STYLES['submit_wrap']; ?>">
                        <button type="submit" id="loginbtn" class="<?php echo $STYLES['submit_btn']; ?>">Iniciar
                            sesión</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="<?php echo $STYLES['footer']; ?>">
            <p>Al ingresar, confirmas la política de privacidad.</p>
            <div class="<?php echo $STYLES['footer_brand']; ?>">we<span
                    class="<?php echo $STYLES['footer_accent']; ?>">learning</span></div>
        </div>
    </div>
</div>