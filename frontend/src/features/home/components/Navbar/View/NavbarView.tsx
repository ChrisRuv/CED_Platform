"use client";
import React from 'react';
import { Menu, X } from 'lucide-react';
import { NAVBAR_STYLES } from '../Styles/NavbarStyles';
import { useNavbarViewModel } from '../ViewModel/useNavbarViewModel';
import NavbarBrand from './SubComponents/NavbarBrand';
import NavbarDesktopLinks from './SubComponents/NavbarDesktopLinks';
import NavbarMobileMenu from './SubComponents/NavbarMobileMenu';
import { NavbarViewProps } from '../Model/NavbarModel';

const NavbarView: React.FC<NavbarViewProps> = ({ onOpenLogin }) => {
    const { isMenuOpen, scrolled, toggleMenu, closeMenu, handleLoginClick } = useNavbarViewModel(onOpenLogin);
    const navStyles = NAVBAR_STYLES;
    return (
        <nav className={navStyles.nav(scrolled)}>
            <div className={navStyles.container}>
                <div className={navStyles.inner}>
                    <NavbarBrand />
                    <NavbarDesktopLinks onOpenLogin={handleLoginClick} />
                    <div className={navStyles.mobile_btn} onClick={toggleMenu}>
                        {isMenuOpen ? <X size={28} /> : <Menu size={28} />}
                    </div>
                </div>
            </div>
            <NavbarMobileMenu 
                isOpen={isMenuOpen} 
                onClose={closeMenu} 
                onOpenLogin={handleLoginClick} 
            />
        </nav>
    );
};
export default NavbarView;
