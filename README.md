# CED Educational Platform

Welcome to the CED Educational Platform project structure. This codebase is split into two main parts: a modern React frontend using Next.js and a robust Node.js backend using Express and TypeScript.

## 📁 Project Structure

```text
PLATAFORMA_CED/
├── backend/            # Express.js (Node.js) Server (API & TS logic)
│   ├── src/            # Source code (TypeScript)
│   ├── package.json    # Backend dependencies
│   └── Dockerfile      # Dedicated Docker build for the backend
├── frontend/           # Next.js (React) Application
│   ├── src/app/        # App router (Latest Next.js strategy)
│   ├── public/         # Static assets
│   └── tailwind...     # Tailwind configuration
├── moodle_platform/    # PHP - Core Learning Management System
│   ├── theme_ced/      # Custom premium theme for Moodle (Strict Architecture)
│   │   ├── layout/     # View Controllers separated by domain (login/ & standard/)
│   │   ├── style/      # CSS Files separated by domain (login/ & standard/)
│   │   ├── templates/  # Pure Mustache HTML templating (Views)
│   │   │   └── login_view.mustache # MAIN ENTRY VIEW for the login modal
│   │   ├── pix/        # Core Moodle assets (Icons, Hero background)
│   │   └── config.php  # Theme registration
│   └── config.php      # Main Moodle instance configuration
├── .gitignore          # Excludes DB data, Node modules, and .env files
├── .env                # Global environment variables
└── docker-compose.yml  # Infrastructure Orchestration
```

### 🎨 Moodle Theme Architecture (theme_ced)
El tema personalizado de Moodle (`theme_ced`) fue construido siguiendo el modelo **MVC (Model-View-Controller)** moderno exigido por Moodle para asegurar mantenibilidad a nivel empresarial:
- **Vista Principal (`login_view.mustache`)**: Este archivo es el **corazón del diseño visual**. Toda la estructura HTML (el modal flotante superpuesto, el fondo de pantalla completa, botones personalizados y re-estructuración visual de Moodle) reside aquí como plantillas Mustache en estado puro.
- **Controlador (`layout/login/login.php`)**: Funciona unicamente como puente. Recibe las instrucciones nativas de Moodle e inyecta la plantilla `login_view.mustache` a través del motor `render_from_template`.
- **CSS Avanzado (`style/login/login.css`)**: Estilizado mediante **Flexbox**, ordena inyección dinámica de módulos (Guest Login, Forgot Password, Lang Menu) sin utilizar "hacks", manipulando la jerarquía nativa de componentes de Moodle y aplicando diseño *Glassmorphism* (Modal).

## 🚀 Getting Started

### Prerequisites
- Node.js (v18 or higher)
- Docker & Docker Compose

### Setup

1. **Environment Variables**:
   A `.env` file exists in the root. Ensure it contains the necessary database and authentication credentials.

2. **Database & Platforms (Docker)**:
   Run the full Moodle, DB, and Backend ecosystem:
   ```bash
   docker-compose up -d --build
   ```

3. **Moodle (PHP) Theme Cache**:
   If changes are made to the `moodle_platform/theme_ced` structure, enter the container to clear cache:
   ```bash
   docker exec plataforma_ced-moodle-1 php /var/www/html/admin/cli/purge_caches.php
   ```

4. **Frontend (TypeScript)**:
   ```bash
   cd frontend
   npm install
   npm run dev
   ```

## 🛠 Architecture Decisions
- **Segregation of Concerns**: PHP remains strictly in `/moodle_platform` while TypeScript lives in `/frontend` and `/backend`. 
- **Modular Styles & Layouts**: Moodle's theme uses MVC concepts, separating UI logic (`layout/*.php`), presentation structure (`templates/*.mustache`), and design (`style/*.css`).
- **Data Protection**: Sensitive files and auto-generated data (`moodledata`, DB volumes) are explicitly ignored via `.gitignore`.
- **Frontend**: Next.js 14, Tailwind CSS, Lucide Icons, Framer Motion.
- **Backend**: Express, JWT Auth, Sequelize ORM ready, Zod validation.
- **Design**: Premium, modern aesthetic with focus on usability and responsiveness.
- **Config**: Pre-configured environment variables and TypeScript settings.

---
Created with 💙 for the CED Educational Platform.
