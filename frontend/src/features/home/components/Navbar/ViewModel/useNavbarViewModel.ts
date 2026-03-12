import { useState, useEffect } from "react";
export const useNavbarViewModel = (onOpenLogin: () => void) => {
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [scrolled, setScrolled] = useState(false);
    useEffect(() => {
        const handleScroll = () => {
            setScrolled(window.scrollY > 50);
        };
        window.addEventListener("scroll", handleScroll);
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);
    const toggleMenu = () => setIsMenuOpen(!isMenuOpen);
    const closeMenu = () => setIsMenuOpen(false);
    const handleLoginClick = () => {
        onOpenLogin();
        closeMenu();
    };
    return {
        isMenuOpen,
        scrolled,
        toggleMenu,
        closeMenu,
        handleLoginClick
    };
};
