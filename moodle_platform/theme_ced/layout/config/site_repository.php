<?php
/**
 * Site Repository — Colegio CED
 * Patrón: Repository
 *
 * Fuente única de verdad para TODOS los datos del negocio.
 * Contiene información de contacto, branding, contenido de cada
 * sección, ofertas, FAQ, atletas, etc.
 *
 * Los componentes consumen $SITE para renderizar.
 * NO contiene lógica de navegación ni flujo — eso es del Coordinator.
 */

defined('MOODLE_INTERNAL') || die();

$SITE = new stdClass();

// ─── Información del Negocio ────────────────────────────────────────────────

$SITE->name = 'Colegio CED';
$SITE->tagline = 'Colegio Elite para Deportistas';
$SITE->email = 'homeschoolced@gmail.com';
$SITE->phone = '646-116-3106';
$SITE->location = 'Ensenada, Baja California';
$SITE->year = date('Y');

// ─── Branding ───────────────────────────────────────────────────────────────

$SITE->brand = (object) [
    'logo' => $OUTPUT->image_url('logo', 'theme_ced'),
    'accent' => '#00ff00',
    'ribbon' => '#00cc00',
    'dark' => '#0a0a0a',
];

// ─── Hero ───────────────────────────────────────────────────────────────────

$SITE->hero = (object) [
    'title_line1' => 'El Futuro es',
    'title_line2' => 'Autodidacta',
    'description' => 'En Colegio CED, la educación no limita tu talento; lo impulsa. Un modelo diseñado para atletas, artistas y mentes sobresalientes.',
    'cta_primary' => ['label' => 'Conoce el Modelo', 'href' => '#pilares'],
    'cta_secondary' => ['label' => 'Nuestra Historia', 'href' => '#nosotros'],
    'image' => 'https://image.qwenlm.ai/public_source/ad81d270-0856-47ed-8a2f-40621ffc424c/167cb49ac-0d41-4655-aea9-4c6862e896ac.png',
];

// ─── Filosofía / Nosotros ───────────────────────────────────────────────────

$SITE->nosotros = (object) [
    'title' => 'Filosofía CED',
    'subtitle' => '"Nacimos para romper las barreras del aula convencional"',
    'image' => 'https://image.qwenlm.ai/public_source/ad81d270-0856-47ed-8a2f-40621ffc424c/12b5c4df8-d02f-4bd5-8ba5-56e5bef89b2f.png',
    'cards' => [
        ['title' => 'Quiénes Somos', 'border' => 'border-ced-blue', 'description' => 'Entendemos que el mundo ha cambiado. Sabemos que la educación tradicional ya no es la única vía para alcanzar el éxito, y que hoy más que nunca, el tiempo es el activo más valioso de nuestros estudiantes.'],
        ['title' => 'Nuestra Historia', 'border' => 'border-ced-accent', 'description' => 'Con más de 10 años de trayectoria, nuestro proyecto nació de una necesidad genuina de nuestra fundadora, Mónica Tabares Rada. Como madre de deportistas de alto rendimiento, creó un modelo donde la dualidad Deporte-Estudio es un motor de crecimiento.'],
        ['title' => 'Libertad para Crecer', 'border' => 'border-ced-blue', 'description' => 'Si buscas una educación que te permita viajar, dedicarte a tu deporte favorito o aprender a tu propio ritmo, estás en el lugar correcto. Tu ritmo, tus metas, tu mundo.'],
    ],
    'audience' => [
        ['icon' => '🏃', 'title' => 'Atletas de Alto Rendimiento', 'description' => 'Flexibilidad total para entrenar y competir sin descuidar su formación académica. Tu carrera deportiva es prioridad.'],
        ['icon' => '🎨', 'title' => 'Artistas y Creativos', 'description' => 'Espacio para desarrollar su vocación con libertad. Horarios que se ajustan a ensayos, grabaciones y proyectos.'],
        ['icon' => '🧠', 'title' => 'Aprendizaje Sobresaliente', 'description' => 'Programas diseñados para mentes que avanzan a un ritmo superior y necesitan desafíos constantes.'],
    ],
];

// ─── Pilares ────────────────────────────────────────────────────────────────

$SITE->pilares = [
    ['icon' => '🎓', 'title' => '1. Autogestión Asistida', 'description' => 'El alumno aprende a gestionar su tiempo y objetivos, con el respaldo de tutores expertos que guían su camino.'],
    ['icon' => '⚖️', 'title' => '2. Dualidad y Flexibilidad', 'description' => 'El calendario escolar se adapta a las competencias, viajes y entrenamientos, sin sacrificar la calidad.'],
    ['icon' => '🚀', 'title' => '3. Talento Sobresaliente', 'description' => 'Enfoque especializado para jóvenes con capacidades sobresalientes, ofreciendo un ritmo acelerado.'],
    ['icon' => '🤝', 'title' => '4. Formación Integral', 'description' => 'Fomentamos la responsabilidad, la resiliencia y la ética, preparando a los jóvenes para el liderazgo.'],
];

$SITE->pilares_image = 'https://image.qwenlm.ai/public_source/ad81d270-0856-47ed-8a2f-40621ffc424c/1efd90157-98d4-4f2f-a060-e97f11508666.png';

// ─── Atletas ────────────────────────────────────────────────────────────────

$SITE->atletas = [
    ['name' => 'Nombre del Atleta', 'sport' => 'Disciplina', 'image' => 'https://via.placeholder.com/400x500/111111/00ff00?text=Atleta+1'],
    ['name' => 'Nombre del Atleta', 'sport' => 'Disciplina', 'image' => 'https://via.placeholder.com/400x500/111111/00ff00?text=Atleta+2'],
    ['name' => 'Nombre del Atleta', 'sport' => 'Disciplina', 'image' => 'https://via.placeholder.com/400x500/111111/00ff00?text=Atleta+3'],
    ['name' => 'Nombre del Atleta', 'sport' => 'Disciplina', 'image' => 'https://via.placeholder.com/400x500/111111/00ff00?text=Atleta+4'],
];

// ─── Oferta Educativa ───────────────────────────────────────────────────────

$SITE->oferta = [
    ['number' => '01', 'title' => 'Primaria', 'description' => 'Cimientos sólidos con flexibilidad.'],
    ['number' => '02', 'title' => 'Secundaria', 'description' => 'Desarrollo integral y autonomía.'],
    ['number' => '03', 'title' => 'Preparatoria', 'description' => 'Certificado oficial SEP y Transcripción Americana.'],
];

// ─── FAQ ────────────────────────────────────────────────────────────────────

$SITE->faq = [
    ['question' => '¿Cuál es la modalidad de estudio?', 'answer' => 'Contamos con un modelo híbrido y flexible. Combinamos tecnología digital con acompañamiento docente.'],
    ['question' => '¿Los estudios tienen validez oficial?', 'answer' => 'Sí. Todos nuestros programas cuentan con RVOE. Obtienes certificado oficial SEP y transcripción americana.'],
    ['question' => '¿Cómo se adaptan a mi ritmo?', 'answer' => 'Nuestra plataforma está disponible 24/7. Tú organizas tus horas de estudio según tus entrenamientos o viajes.'],
    ['question' => '¿Tendré profesores que me orienten?', 'answer' => '¡Por supuesto! Contamos con tutores y mentores especializados que realizan sesiones de seguimiento.'],
];

// ─── Ventajas (sidebar contacto) ────────────────────────────────────────────

$SITE->ventajas = [
    'Más de 10 años de experiencia',
    'Certificado oficial SEP',
    'Plataforma 24/7',
    'Tutores especializados',
];
