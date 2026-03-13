export interface FooterLinksComponentContract {
    title: string;
    links: string[];
}
export interface FooterBottomComponentContract {
    copyright: string;
    socials: string[];
}
export const FOOTER_DATA = {
    brand: "COLEGIO CED",
    tagline: '"Transformamos la experiencia educativa para mentes que no se detienen."',
    sections: [
        {
            title: "Explora",
            links: ['Nosotros', 'Modelo Educativo', 'Atletas', 'Oferta Académica']
        },
        {
            title: "Legales",
            links: ['RVOE Oficial', 'Términos de Uso', 'Privacidad', 'Cookies']
        }
    ],
    socials: ['Instagram', 'Facebook', 'YouTube'],
    copyright: `© ${new Date().getFullYear()} Colegio CED. Todos los derechos reservados.`
};
