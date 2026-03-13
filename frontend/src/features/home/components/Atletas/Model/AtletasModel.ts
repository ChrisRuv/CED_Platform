export interface AtletaComponentContract {
    name: string;
    sport: string;
    image: string;
}
export const ATLETAS_DATA = {
    label: "Nuestros Campeones",
    title: "Atletas Destacados",
    items: [
        { name: "Ian Lozano", sport: "Gimnasia Varonil", image: "/images/ian_lozano.jpg" },
        { name: "Gretel Valdez", sport: "Baile", image: "/images/gretel_valdez.jpg" },
        { name: "Hugo Perez", sport: "Deporte de Élite", image: "/images/hugo_perez.jpg" },
        { name: "Campeonas CED", sport: "Demás Atletas", image: "/images/campeonas_ced.jpg" }
    ]
};
