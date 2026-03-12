export interface AtletaCardProps {
    name: string;
    sport: string;
    image: string;
}
export const ATLETAS_DATA = {
    label: "Nuestros Campeones",
    title: "Atletas Destacados",
    items: [
        { name: "ALEXA MORENO", sport: "Gimnasia Artística", image: "/images/alexa_moreno.jpg" },
        { name: "PROSPECTO CED", sport: "Disciplina Élite", image: "/images/atleta_prospecto.jpg" },
        { name: "ESTUDIANTE CED", sport: "Alto Rendimiento", image: "/images/estudiante_ced.jpg" },
        { name: "CAMPEÓN CED", sport: "Liderazgo Deportivo", image: "/images/campeon_ced.jpg" }
    ]
};
