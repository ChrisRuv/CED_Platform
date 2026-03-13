export interface OfertaComponentContract {
    id: string;
    title: string;
    desc: string;
}
export interface FAQComponentContract {
    question: string;
    answer: string;
}
export interface CommitmentComponentContract {
    title: string;
    text: string;
    sub: string;
}
export const OFERTA_DATA = {
    label: "Niveles",
    title: "Oferta Académica",
    items: [
        { id: '01', title: 'Secundaria', desc: 'Formación crítica y creativa para adolescentes en movimiento.' },
        { id: '02', title: 'Bachillerato', desc: 'Preparación de alto nivel con flexibilidad total para tu carrera.' },
        { id: '03', title: 'Licenciaturas', desc: 'Carreras profesionales adaptadas a la era digital y global.' }
    ],
    faq: [
        { question: '¿Los títulos tienen validez oficial?', answer: 'Sí, todos nuestros programas cuentan con RVOE oficial ante la SEP.' },
        { question: '¿Cómo funcionan las clases?', answer: 'Modelo 100% autodidacta con apoyo de mentores y plataforma 24/7.' },
        { question: '¿Es solo para atletas?', answer: 'Aunque nacimos para atletas, cualquier mente creativa y autodidacta es bienvenida.' }
    ],
    commitment: {
        title: "Nuestro Compromiso",
        text: '"En Colegio CED, no solo obtienes un certificado académico; obtienes la libertad de construir tu futuro mientras vives tu presente."',
        sub: '"Tu ritmo, tus metas, tu mundo. Bienvenido a la evolución educativa."'
    }
};
