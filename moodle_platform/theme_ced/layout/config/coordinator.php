<?php
/**
 * Page Coordinator — Colegio CED
 * Patrón: Coordinator
 *
 * Responsable EXCLUSIVAMENTE del flujo de navegación:
 *   - Qué secciones se muestran
 *   - En qué orden se renderizan
 *   - Qué enlaces aparecen en la navegación
 *   - Qué vista se activa al hacer click (login modal, etc.)
 *
 * NO contiene datos del negocio — eso es del Repository.
 */

defined('MOODLE_INTERNAL') || die();

// Primero cargar los datos del Repository
require_once(__DIR__ . '/site_repository.php');

// ─── Navegación (orden = orden de aparición en menú) ────────────────────────

$NAVIGATION = [
    ['id' => 'inicio', 'label' => 'Inicio'],
    ['id' => 'nosotros', 'label' => 'Nosotros'],
    ['id' => 'pilares', 'label' => 'Pilares'],
    ['id' => 'atletas', 'label' => 'Atletas'],
    ['id' => 'oferta', 'label' => 'Oferta'],
    ['id' => 'contacto', 'label' => 'Contacto', 'cta' => true],
];

// ─── Flujo de Secciones (orden = orden de renderizado en la página) ─────────

$SECTIONS = [
    'navbar',
    'hero',
    'nosotros',
    'pilares',
    'atletas',
    'oferta',
    'contacto',
    'footer',
    'modal_login',
];

// ─── Acciones de Navegación ─────────────────────────────────────────────────

$ACTIONS = [
    'login_trigger' => "document.getElementById('login-modal').classList.remove('hidden')",
    'login_dismiss' => "document.getElementById('login-modal').classList.add('hidden')",
    'mobile_toggle' => "document.getElementById('mobile-menu').classList.toggle('hidden')",
];
