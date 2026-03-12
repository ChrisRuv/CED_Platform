export const SITE_DATA = {
    name: "COLEGIO CED",
    tagline: "Elite Academy",
    description: "En Colegio CED, la educación no limita tu talento; lo impulsa. Diseñado para atletas de alto rendimiento y mentes sobresalientes.",
    email: "homeschoolced@gmail.com",
    phone: "646-116-3106",
    location: "Ensenada, B.C. México",
    year: new Date().getFullYear(),
    hero: {
        title_line1: "EL FUTURO",
        title_line2: "ES",
        title_accent: "AUTODIDACTA.",
        cta_primary: "Conoce el Modelo",
        cta_secondary: "Nuestra Historia"
    },
    nosotros: {
        title: "Filosofía CED",
        subtitle: "Rompemos las barreras del aula convencional.",
        cards: [
            { 
                title: 'Quiénes Somos', 
                color: 'from-blue-600 to-blue-700', 
                desc: 'Entendemos que el mundo ha cambiado. La educación tradicional ya no es la única vía para alcanzar el éxito.' 
            },
            { 
                title: 'Nuestra Historia', 
                color: 'from-ced-accent to-sky-400', 
                desc: 'Más de 10 años de trayectoria por Mónica Tabares. Un modelo donde la dualidad Deporte-Estudio es el motor.' 
            },
            { 
                title: 'Libertad para Crecer', 
                color: 'from-slate-800 to-black', 
                desc: 'Tu ritmo, tus metas, tu mundo. Todo lo que necesitas para que tu talento brille sin restricciones de horario.' 
            }
        ],
        audience: [
            { icon: 'Rocket', title: 'Atletas de Alto Rendimiento', desc: 'Flexibilidad total para entrenar y competir sin descuidar la formación académica.' },
            { icon: 'Users', title: 'Artistas y Creativos', desc: 'Espacio para desarrollar vocación con libertad. Horarios que se ajustan a tu arte.' },
            { icon: 'GraduationCap', title: 'Aprendizaje Sobresaliente', desc: 'Programas diseñados para mentes que avanzan a un ritmo superior.' }
        ]
    },
    pilares: [
        { title: '1. Autogestión Asistida', desc: 'Aprendes a gestionar tu tiempo con tutores expertos que guían tu camino.' },
        { title: '2. Dualidad Deportiva', desc: 'Calendario escolar adaptado a competencias y viajes sin sacrificar calidad.' },
        { title: '3. Talento Sobresaliente', desc: 'Enfoque especializado para jóvenes que necesitan un ritmo acelerado.' },
        { title: '4. Formación Integral', desc: 'Fomentamos la responsabilidad y la resiliencia en líderes del mañana.' }
    ],
    oferta: [
        { id: '01', title: 'Primaria', desc: 'Cimientos sólidos con flexibilidad total para iniciar su carrera desde temprano.' },
        { id: '02', title: 'Secundaria', desc: 'Desarrollo de autonomía y pensamiento crítico especializado para deportistas.' },
        { id: '03', title: 'Preparatoria', desc: 'Certificado oficial SEP y Transcripción Americana para universidades internacionales.' }
    ],
    navigation: [
        { id: 'inicio', label: 'Inicio' },
        { id: 'nosotros', label: 'Nosotros' },
        { id: 'modelo', label: 'Modelo' },
        { id: 'atletas', label: 'Atletas' },
        { id: 'oferta', label: 'Oferta' },
        { id: 'contacto', label: 'Contacto' }
    ]
};
