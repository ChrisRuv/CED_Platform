import { useState, useEffect } from "react";
export const useHomeViewModel = () => {
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isLoginModalOpen, setIsLoginModalOpen] = useState(false);
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
    const openLoginModal = () => {
        setIsLoginModalOpen(true);
        setIsMenuOpen(false);
    };
    const closeLoginModal = () => setIsLoginModalOpen(false);
    return {
        isMenuOpen,
        isLoginModalOpen,
        scrolled,
        toggleMenu,
        closeMenu,
        openLoginModal,
        closeLoginModal
    };
};
