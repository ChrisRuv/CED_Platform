<!-- Login Modal -->
<div id="login-modal" class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4">
    <!-- Blurred Background Overlay -->
    <div class="absolute inset-0 bg-ced-blue/60 backdrop-blur-md"
        onclick="document.getElementById('login-modal').classList.add('hidden')"></div>

    <!-- Modal Content -->
    <div
        class="relative w-full max-w-md bg-[#0a0a0a] rounded-2xl shadow-2xl overflow-hidden animate-fade-in border border-white/20">
        <!-- Close Button -->
        <button onclick="document.getElementById('login-modal').classList.add('hidden')"
            class="absolute top-4 right-4 text-gray-400 hover:text-ced-accent transition-colors z-10 w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>

        <!-- Modal Header -->
        <div class="bg-gradient-to-r from-ced-blue to-ced-light p-8 text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-20">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-current">
                    <path
                        d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.1,-19.2,95.8,-5.3C93.5,8.6,82.2,21.5,70.6,31.2C59,40.9,47.1,47.4,35.6,52.8C24.1,58.2,13,62.5,0.5,61.9C-12,61.3,-25.9,55.8,-38.2,48.6C-50.5,41.4,-61.2,32.5,-69.4,21.2C-77.6,9.9,-83.3,-3.8,-82.1,-16.6C-80.9,-29.4,-72.8,-41.3,-62.4,-50.8C-52,-60.3,-39.3,-67.4,-26.6,-73.8C-13.9,-80.2,-1.2,-85.9,12.3,-85.2C25.8,-84.5,40.5,-77.4,44.7,-76.4Z"
                        transform="translate(100 100)" />
                </svg>
            </div>
            <div class="relative z-10 flex flex-col items-center">
                <?php $logoUrl = $OUTPUT->image_url('logo', 'theme_ced'); ?>
                <img src="<?php echo htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Colegio CED Logo"
                    class="h-16 w-auto mb-2 drop-shadow-lg">
                <p class="text-white font-medium tracking-wide text-sm drop-shadow-md">PLATAFORMA EDUCATIVA</p>
            </div>
        </div>

        <!-- Login Form -->
        <div class="p-8">
            <?php
            // CSRF Protection — token generado por Moodle core
            $loginToken = '';
            if (class_exists('\core\session\manager')) {
                $loginToken = \core\session\manager::get_login_token();
            }
            ?>
            <form action="/login/index.php" method="post" id="login" autocomplete="off">
                <input type="hidden" name="logintoken" id="logintoken"
                    value="<?php echo htmlspecialchars($loginToken, ENT_QUOTES, 'UTF-8'); ?>">

                <div class="space-y-5">
                    <div>
                        <label for="username" class="block text-sm font-semibold text-gray-200 mb-1">Nombre de
                            usuario</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" name="username" id="username" autocomplete="username"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-700 rounded-lg focus:ring-ced-accent focus:border-ced-accent sm:text-sm bg-[#111111] text-white"
                                placeholder="Usuario">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-200 mb-1">Contraseña</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-700 rounded-lg focus:ring-ced-accent focus:border-ced-accent sm:text-sm bg-[#111111] text-white"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center">
                            <input id="rememberusername" name="rememberusername" type="checkbox" value="1"
                                class="h-4 w-4 text-ced-blue focus:ring-ced-accent border-gray-700 rounded">
                            <label for="rememberusername" class="ml-2 block text-sm text-gray-300">
                                Recordar usuario
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="/login/forgot_password.php"
                                class="font-medium text-ced-accent hover:text-ced-blue transition-colors">¿Olvidó su
                                contraseña?</a>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" id="loginbtn"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-ced-blue hover:bg-ced-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ced-accent transition-colors">
                            Iniciar sesión
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div
            class="bg-[#111111] px-8 py-4 border-t border-gray-800 flex justify-between items-center text-xs text-white">
            <p>Al ingresar, confirmas la política de privacidad.</p>
            <div class="font-bold tracking-tighter text-gray-400">we<span class="text-ced-accent">learning</span>
            </div>
        </div>
    </div>
</div>