<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Login Modal -->
<div id="login-modal" class="<?php echo $STYLES['overlay']; ?>">
    <div class="<?php echo $STYLES['backdrop']; ?>" onclick="<?php echo $ACTIONS['login_dismiss']; ?>"></div>

    <div class="<?php echo $STYLES['modal']; ?>" style="background: <?php echo $SITE->brand->dark; ?>;">
        <button onclick="<?php echo $ACTIONS['login_dismiss']; ?>" class="<?php echo $STYLES['close_btn']; ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="<?php echo $STYLES['header']; ?>">
            <div class="absolute inset-0 opacity-20">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-current">
                    <path d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.1,-19.2,95.8,-5.3C93.5,8.6,82.2,21.5,70.6,31.2C59,40.9,47.1,47.4,35.6,52.8C24.1,58.2,13,62.5,0.5,61.9C-12,61.3,-25.9,55.8,-38.2,48.6C-50.5,41.4,-61.2,32.5,-69.4,21.2C-77.6,9.9,-83.3,-3.8,-82.1,-16.6C-80.9,-29.4,-72.8,-41.3,-62.4,-50.8C-52,-60.3,-39.3,-67.4,-26.6,-73.8C-13.9,-80.2,-1.2,-85.9,12.3,-85.2C25.8,-84.5,40.5,-77.4,44.7,-76.4Z" transform="translate(100 100)" />
                </svg>
            </div>
            <div class="<?php echo $STYLES['header_content']; ?>">
                <img src="<?php echo htmlspecialchars($SITE->brand->logo, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="<?php echo htmlspecialchars($SITE->name, ENT_QUOTES, 'UTF-8'); ?> Logo"
                    class="<?php echo $STYLES['logo']; ?>">
                <p class="<?php echo $STYLES['platform_text']; ?>">PLATAFORMA EDUCATIVA</p>
            </div>
        </div>

        <div class="<?php echo $STYLES['form_wrap']; ?>">
            <?php
            $loginToken = '';
            if (class_exists('\core\session\manager')) {
                $loginToken = \core\session\manager::get_login_token();
            }
            ?>
            <form action="/login/index.php" method="post" id="login" autocomplete="off">
                <input type="hidden" name="logintoken" id="logintoken" value="<?php echo htmlspecialchars($loginToken, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="<?php echo $STYLES['fields']; ?>">
                    <div>
                        <label for="username" class="<?php echo $STYLES['label']; ?>">Nombre de usuario</label>
                        <div class="relative">
                            <div class="<?php echo $STYLES['icon_wrap']; ?>">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" name="username" id="username" autocomplete="username" class="<?php echo $STYLES['input']; ?>" placeholder="Usuario">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="<?php echo $STYLES['label']; ?>">Contraseña</label>
                        <div class="relative">
                            <div class="<?php echo $STYLES['icon_wrap']; ?>">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" name="password" id="password" autocomplete="current-password" class="<?php echo $STYLES['input']; ?>" placeholder="••••••••">
                        </div>
                    </div>
                    <div class="<?php echo $STYLES['actions_row']; ?>">
                        <div class="flex items-center">
                            <input id="rememberusername" name="rememberusername" type="checkbox" value="1" class="<?php echo $STYLES['checkbox']; ?>">
                            <label for="rememberusername" class="<?php echo $STYLES['checkbox_label']; ?>">Recordar usuario</label>
                        </div>
                        <div class="text-sm">
                            <a href="/login/forgot_password.php" class="<?php echo $STYLES['forgot_link']; ?>">¿Olvidó su contraseña?</a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button type="submit" id="loginbtn" class="<?php echo $STYLES['submit_btn']; ?>">Iniciar sesión</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="<?php echo $STYLES['footer']; ?>">
            <p>Al ingresar, confirmas la política de privacidad.</p>
            <div class="<?php echo $STYLES['footer_brand']; ?>">we<span class="text-ced-accent">learning</span></div>
        </div>
    </div>
</div>