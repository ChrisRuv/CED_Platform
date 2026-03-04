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

        html {
            scroll-behavior: smooth;
        }

        .clip-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .clip-diagonal-reverse {
            clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
        }

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
     * Arquitectura:
     *   Repository  → config/site_repository.php  → Datos ($SITE)
     *   Coordinator → config/coordinator.php       → Flujo ($NAVIGATION, $SECTIONS, $ACTIONS)
     *   Components  → components/*.php             → Vistas (solo renderizado)
     */

    // 1. Cargar Coordinator (carga Repository internamente)
    require_once(__DIR__ . '/config/coordinator.php');

    // 2. Renderizar secciones en el orden definido por el Coordinator
    $componentsDir = __DIR__ . '/components';
    foreach ($SECTIONS as $section) {
        $file = $componentsDir . '/' . $section . '/' . $section . '.php';
        if (file_exists($file)) {
            include $file;
        }
    }
    ?>

    <!-- Moodle Required Placeholder -->
    <div style="display: none;">
        <?php echo $OUTPUT->main_content(); ?>
    </div>

    <?php
    $showLoginError = isset($_GET['loginerror']) && intval($_GET['loginerror']) === 1;
    ?>
    <?php if ($showLoginError): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                <?php echo $ACTIONS['login_trigger']; ?>;
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