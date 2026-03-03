<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio CED | Colegio Elite para Deportistas</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/montserrat@4.5.0/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/open-sans@4.5.0/index.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ced: {
                            blue: '#000000',
                            light: '#111111',
                            accent: '#00ff00',
                            gray: '#1a1a1a'
                        }
                    },
                    fontFamily: {
                        sans: ['Open Sans', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* ── Base Typography ─────────────────────────────── */
        body {
            font-family: 'Open Sans', sans-serif;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
        }

        /* ── Hover Card Effects ───────────────────────────── */
        .hover-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid transparent;
        }

        .hover-card:hover {
            transform: scale(1.05) translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: #00a8e8;
            z-index: 10;
        }

        /* ── Nav Links ────────────────────────────────────── */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #00a8e8;
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: #00a8e8;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ── Layout Utilities ─────────────────────────────── */
        html {
            scroll-behavior: smooth;
        }

        .clip-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .clip-diagonal-reverse {
            clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
        }

        /* ── Animations ───────────────────────────────────── */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        /* ── Misc ─────────────────────────────────────────── */
        details summary::-webkit-details-marker {
            display: none;
        }
    </style>
</head>

<body class="bg-ced-gray text-gray-100">

    <?php
    /**
     * Frontpage Layout — Colegio CED
     *
     * Cada sección vive en su propio archivo dentro de
     * layout/components/ para mantener el código organizado.
     */
    $componentsDir = __DIR__ . '/components';
    ?>

    <?php include $componentsDir . '/navbar.php'; ?>
    <?php include $componentsDir . '/hero.php'; ?>
    <?php include $componentsDir . '/nosotros.php'; ?>
    <?php include $componentsDir . '/pilares.php'; ?>
    <?php include $componentsDir . '/atletas.php'; ?>
    <?php include $componentsDir . '/oferta.php'; ?>
    <?php include $componentsDir . '/contacto.php'; ?>
    <?php include $componentsDir . '/footer.php'; ?>
    <?php include $componentsDir . '/modal_login.php'; ?>

    <!-- Moodle Required Placeholder -->
    <div style="display: none;">
        <?php echo $OUTPUT->main_content(); /* Moodle internal — already sanitized by core */ ?>
    </div>

    <?php
    // OWASP A3:2017 — Reflected XSS Prevention
    // Sanitizar parámetro GET con intval() para prevenir inyección.
    $showLoginError = isset($_GET['loginerror']) && intval($_GET['loginerror']) === 1;
    ?>
    <?php if ($showLoginError): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById('login-modal').classList.remove('hidden');
                var errorDiv = document.createElement('div');
                errorDiv.className = 'bg-red-500 text-white rounded p-3 mb-4 text-sm font-semibold text-center mt-4';
                errorDiv.textContent = 'Verifique sus credenciales o inicie sesión para continuar.';
                var loginForm = document.getElementById('login');
                loginForm.insertBefore(errorDiv, loginForm.firstChild);
            });
        </script>
    <?php endif; ?>

</body>

</html>