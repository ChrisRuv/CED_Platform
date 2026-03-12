export interface FilosofiaComponentContract {
    title: string;
    icon: string;
    color: string;
    desc: string;
}
export interface AudienceComponentContract {
    icon: string;
    title: string;
    desc: string;
}
export const NOSOTROS_DATA = {
    title: "Filosofía CED",
    subtitle: "Rompemos las barreras del aula convencional.",
    cards: [
        { 
            title: 'Quiénes Somos', 
            icon: 'Users',
            color: 'from-blue-600 to-blue-700', 
            desc: 'Entendemos que el mundo ha cambiado. La educación tradicional ya no es la única vía para alcanzar el éxito.' 
        },
        { 
            title: 'Nuestra Historia', 
            icon: 'Trophy',
            color: 'from-ced-accent to-sky-400', 
            desc: 'Más de 10 años de trayectoria por Mónica Tabares. Un modelo donde la dualidad Deporte-Estudio es el motor.' 
        },
        { 
            title: 'Libertad para Crecer', 
            icon: 'Rocket',
            color: 'from-slate-800 to-black', 
            desc: 'Tu ritmo, tus metas, tu mundo. Todo lo que necesitas para que tu talento brille sin restricciones de horario.' 
        }
    ],
    audience: [
        { icon: 'Rocket', title: 'Atletas de Alto Rendimiento', desc: 'Flexibilidad total para entrenar y competir sin descuidar la formación académica.' },
        { icon: 'Users', title: 'Artistas y Creativos', desc: 'Espacio para desarrollar vocación con libertad. Horarios que se ajustan a tu arte.' },
        { icon: 'GraduationCap', title: 'Aprendizaje Sobresaliente', desc: 'Programas diseñados para mentes que avanzan a un ritmo superior.' }
    ]
};
