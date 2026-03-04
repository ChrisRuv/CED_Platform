# 🎓 Colegio CED — Plataforma Educativa

> Plataforma Moodle personalizada para el Colegio Elite para Deportistas (CED).  
> Diseñada para atletas, artistas y mentes sobresalientes.

---

## 📐 Arquitectura del Proyecto

El proyecto sigue una arquitectura modular basada en **patrones de diseño** que separan claramente las responsabilidades:

| Patrón                         | Archivo                             | Responsabilidad                                             |
| ------------------------------ | ----------------------------------- | ----------------------------------------------------------- |
| **Repository**                 | `config/site_repository.php`        | Fuente única de verdad para todos los datos del negocio     |
| **Coordinator**                | `config/coordinator.php`            | Control exclusivo del flujo de navegación y orden de vistas |
| **Template + Style Constants** | `components/*/styles.php` + `*.php` | Renderizado visual con clases inyectables                   |

### Flujo de Datos

```
frontpage.php (Orquestador)
    │
    ├── Carga config/coordinator.php
    │       │
    │       └── Carga config/site_repository.php ($SITE)
    │           Define $NAVIGATION, $SECTIONS, $ACTIONS
    │
    └── Itera $SECTIONS → Renderiza components/{seccion}/{seccion}.php
                                │
                                └── Carga styles.php ($STYLES)
                                    Consume $SITE (datos) + $STYLES (clases)
```

---

## 📁 Estructura de Archivos

```
PLATAFORMA_CED/
├── docker-compose.yml
├── backend/                                  # Backend del proyecto
│   ├── Dockerfile                            # Docker para Node/TS
│   ├── package.json
│   ├── tsconfig.json
│   ├── src/
│   │   └── server.ts                         # Servidor Node/TS
│   └── php/                                  # Lógica PHP (Moodle)
│       ├── controllers/
│       │   └── StudentController.php         # 🎮 Punto de entrada, manejo de errores
│       ├── services/
│       │   └── StudentService.php            # ⚙️  Lógica de negocio
│       ├── repositories/
│       │   └── StudentRepository.php         # 🔍 Queries específicas de Student
│       ├── database/
│       │   ├── BaseDatabase.php              # 💾 CRUD genérico (abstract)
│       │   └── UserDatabase.php              # 💾 Tabla 'user' (extends Base)
│       ├── dto/
│       │   └── CreateStudentDTO.php          # 📋 Validación de entrada
│       └── models/
│           └── StudentModel.php              # 🧱 Estructura de la entidad
│
├── moodle_platform/
│   ├── scripts/                              # Puntos de entrada CLI
│   │   ├── create_student_cli.php            # Crear estudiantes (usa backend/)
│   │   └── update_theme.php                  # Aplicar cambios al tema
│   │
│   └── theme_ced/                            # Tema personalizado Moodle
│       ├── config.php                        # Configuración del tema (sheets, layouts)
│       ├── version.php                       # Versión del tema
│       │
│       ├── pix/                              # Assets de imagen
│       │   └── logo.png                      # Logo del colegio
│       │
│       ├── style/                            # Hojas de estilo
│       │   ├── general.css                   # Estilos generales del tema
│       │   └── login/                        # CSS modularizado del login
│       │       ├── base.css                  # Layout y fondo
│       │       ├── navigation.css            # Botón superior
│       │       ├── modal.css                 # Overlay y contenedor
│       │       ├── form.css                  # Campos y overrides Moodle
│       │       ├── buttons.css               # Botones (submit, guest, cookies)
│       │       └── footer-darkmode.css       # Footer y modo oscuro
│       │
│       └── layout/                           # Páginas y componentes
│           ├── frontpage.php                 # Orquestador principal
│           │
│           ├── config/                       # Configuración centralizada
│           │   ├── site_repository.php       # 📦 REPOSITORY: Datos del negocio
│           │   └── coordinator.php           # 🧭 COORDINATOR: Flujo de navegación
│           │
│           ├── components/                   # Componentes visuales
│           │   ├── navbar/
│           │   │   ├── styles.php            # Constantes de estilo
│           │   │   └── navbar.php            # Template
│           │   ├── hero/
│           │   │   ├── styles.php
│           │   │   └── hero.php
│           │   ├── nosotros/
│           │   │   ├── styles.php
│           │   │   └── nosotros.php
│           │   ├── pilares/
│           │   │   ├── styles.php
│           │   │   └── pilares.php
│           │   ├── atletas/
│           │   │   ├── styles.php
│           │   │   └── atletas.php
│           │   ├── oferta/
│           │   │   ├── styles.php
│           │   │   └── oferta.php
│           │   ├── contacto/
│           │   │   ├── styles.php
│           │   │   └── contacto.php
│           │   ├── footer/
│           │   │   ├── styles.php
│           │   │   └── footer.php
│           │   └── modal_login/
│           │       ├── styles.php
│           │       └── modal_login.php
│           │
│           ├── login/                        # Página de login Moodle
│           │   └── login.php
│           │
│           └── standard/                     # Layout estándar (post-login)
│               └── columns.php
```

---

## 🧩 Patrones de Diseño

### 1. Repository Pattern — `site_repository.php`

Centraliza **todos los datos del negocio** en un solo archivo. Los componentes nunca contienen datos hardcodeados.

```php
// Ejemplo: Cambiar el teléfono
$SITE->phone = '646-116-3106';

// Ejemplo: Agregar un atleta
$SITE->atletas[] = [
    'name'  => 'María López',
    'sport' => 'Natación',
    'image' => 'https://example.com/maria.jpg',
];
```

**¿Qué contiene?**

- Información de contacto (email, teléfono, ubicación)
- Branding (logo, colores)
- Contenido de todas las secciones (hero, pilares, FAQ, etc.)
- Datos de atletas y oferta educativa

### 2. Coordinator Pattern — `coordinator.php`

Controla **exclusivamente el flujo de navegación**:

```php
// Orden del menú
$NAVIGATION = [
    ['id' => 'inicio',   'label' => 'Inicio'],
    ['id' => 'nosotros', 'label' => 'Nosotros'],
    // ...
];

// Orden de renderizado de secciones
$SECTIONS = ['navbar', 'hero', 'nosotros', 'pilares', ...];

// Acciones de UI (abrir/cerrar modal, menú móvil)
$ACTIONS = [
    'login_trigger' => "document.getElementById('login-modal')...",
];
```

**Para reordenar secciones**, solo cambia el array `$SECTIONS`.  
**Para agregar un enlace al menú**, solo agrega al array `$NAVIGATION`.

### 3. Style Constants — `styles.php`

Cada componente tiene un archivo `styles.php` que define todas las clases Tailwind como constantes:

```php
// components/hero/styles.php
$STYLES = [
    'section'     => 'relative pt-20 pb-16 min-h-screen ...',
    'title'       => 'text-5xl md:text-6xl font-extrabold ...',
    'btn_primary' => 'px-8 py-4 bg-ced-blue text-white ...',
];
```

```php
// components/hero/hero.php
<section class="<?php echo $STYLES['section']; ?>">
    <h1 class="<?php echo $STYLES['title']; ?>">...</h1>
</section>
```

**Ventajas:**

- Cambiar el diseño de un componente sin tocar su HTML
- Reutilizar estilos entre elementos del mismo componente
- Visibilidad clara de todas las clases usadas

### 4. Backend — Controller → Service → Repository → Database → Model

La lógica de negocio del backend sigue una arquitectura por capas con separación estricta de responsabilidades:

```
CLI / API (punto de entrada)
    │
    └── Controller (recibe request, formatea errores)
            │
            └── Service (lógica de negocio)
                    │
                    └── Repository (queries específicas de Student)
                            │
                            └── Database (CRUD genérico por tabla)
                                    │
                                    └── Model (estructura de la entidad)
```

| Capa           | Archivo                              | Responsabilidad                                        |
| -------------- | ------------------------------------ | ------------------------------------------------------ |
| **Controller** | `controllers/StudentController.php`  | Punto de entrada, try/catch, formateo de respuesta     |
| **Service**    | `services/StudentService.php`        | Lógica: createOrUpdate, createBatch, changePassword    |
| **Repository** | `repositories/StudentRepository.php` | Queries: findByUsername, findByEmail, create           |
| **Database**   | `database/UserDatabase.php`          | CRUD genérico para tabla `user` (extends BaseDatabase) |
| **DTO**        | `dto/CreateStudentDTO.php`           | Validación: email, password, campos requeridos         |
| **Model**      | `models/StudentModel.php`            | Estructura de entidad, conversión a Moodle             |

```php
// Ejemplo: Crear un estudiante desde cualquier punto de entrada
$controller = new StudentController($DB, $CFG);
$result = $controller->store([
    'username'  => 'maria',
    'password'  => 'MiPassword123!',
    'email'     => 'maria@ced.local',
    'firstname' => 'María',
    'lastname'  => 'López',
]);
// $result = ['action' => 'created', 'username' => 'maria', 'user_id' => 42, ...]

// Ejemplo: Crear múltiples estudiantes
$results = $controller->storeBatch([...]);

// Ejemplo: Cambiar contraseña
$result = $controller->updatePassword('maria', 'NuevaPass789!');
```

**Para agregar una nueva entidad** (ej. `Course`):

```
1. database/CourseDatabase.php     ← class CourseDatabase extends BaseDatabase { TABLE = 'course'; }
2. models/CourseModel.php          ← Estructura de la entidad
3. dto/CreateCourseDTO.php         ← Validación
4. repositories/CourseRepository.php ← Queries específicas
5. services/CourseService.php      ← Lógica de negocio
6. controllers/CourseController.php  ← Punto de entrada
```

**Reglas:**

- Los scripts CLI **solo llaman al Controller** — nunca tocan $DB
- El Controller **maneja todos los errores** (try/catch)
- El Service **contiene la lógica de negocio** pura
- El Repository **ejecuta queries** específicas de la entidad
- La Database **provee CRUD genérico** para una tabla
- El DTO **valida y sanitiza** datos de entrada
- El Model **define la estructura** de la entidad

---

## 🔒 Seguridad (OWASP Top 10)

| Vulnerabilidad     | Mitigación                                                 |
| ------------------ | ---------------------------------------------------------- |
| **XSS (A3)**       | Todo output PHP escapado con `htmlspecialchars()`          |
| **CSRF (A5)**      | Login token de Moodle protegido con `class_exists()` guard |
| **Injection (A1)** | Parámetros GET sanitizados con `intval()`                  |
| **DOM XSS**        | Uso de `textContent` en vez de `innerHTML`/`innerText`     |

---

## 🚀 Guía Rápida

### Cambiar datos del sitio

Edita **solo** `layout/config/site_repository.php`:

```php
$SITE->email = 'nuevo@email.com';
$SITE->phone = '123-456-7890';
```

### Cambiar el orden de las secciones

Edita **solo** `layout/config/coordinator.php`:

```php
$SECTIONS = ['navbar', 'hero', 'atletas', 'nosotros', ...]; // nuevo orden
```

### Cambiar el diseño de un componente

Edita **solo** `components/{nombre}/styles.php`:

```php
$STYLES['section'] = 'py-32 bg-red-500'; // nuevo estilo
```

### Agregar una nueva sección

1. Crea la carpeta: `components/nueva_seccion/`
2. Crea `styles.php` con las constantes
3. Crea `nueva_seccion.php` con el template
4. Agrega `'nueva_seccion'` al array `$SECTIONS` en `coordinator.php`

### Purgar caché después de cambios

```bash
docker exec -w /var/www/html plataforma_ced-moodle-1 php admin/cli/purge_caches.php
```

---

## 🛠 Stack Tecnológico

- **Backend PHP:** Model / DTO / Repository (lógica Moodle)
- **Backend Node:** Express + TypeScript
- **Frontend:** Tailwind CSS (CDN), Montserrat + Open Sans
- **CMS:** Moodle 4.x (PHP)
- **Infraestructura:** Docker + Docker Compose
- **Base de datos:** MariaDB

---

## 📞 Contacto

- **Email:** homeschoolced@gmail.com
- **Teléfono:** 646-116-3106
- **Ubicación:** Ensenada, Baja California

---

_© 2026 Colegio CED. Todos los derechos reservados._
