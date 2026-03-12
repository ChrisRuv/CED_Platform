export interface OfertaCardProps {
    id: string;
    title: string;
    desc: string;
}
export const OFERTA_DATA = {
    label: "Niveles",
    title: "Oferta Académica",
    description: "Avalados por la SEP con certificación bilingüe internacional.",
    levels: [
        { id: '01', title: 'Primaria', desc: 'Cimientos sólidos con flexibilidad total para iniciar su carrera desde temprano.' },
        { id: '02', title: 'Secundaria', desc: 'Desarrollo de autonomía y pensamiento crítico especializado para deportistas.' },
        { id: '03', title: 'Preparatoria', desc: 'Certificado oficial SEP y Transcripción Americana para universidades internacionales.' }
    ]
};
