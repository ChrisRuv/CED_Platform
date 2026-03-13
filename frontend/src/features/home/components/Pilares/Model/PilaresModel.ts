export interface PilarComponentContract {
    index: number;
    title: string;
    desc: string;
}
export const PILARES_DATA = {
    label: "El Método",
    title: "Educación que viaja contigo.",
    quote: "Nuestra meta es tu éxito profesional y deportivo.",
    items: [
        { title: 'Autogestión Asistida', desc: 'Aprendes a gestionar tu tiempo con tutores expertos que guían tu camino.' },
        { title: 'Dualidad Deportiva', desc: 'Calendario escolar adaptado a competencias y viajes sin sacrificar calidad.' },
        { title: 'Talento Sobresaliente', desc: 'Enfoque especializado para jóvenes que necesitan un ritmo acelerado.' },
        { title: 'Formación Integral', desc: 'Fomentamos la responsabilidad y la resiliencia en líderes del mañana.' }
    ],
    image: "/images/ced-hero.png"
};
