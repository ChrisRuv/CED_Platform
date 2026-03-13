"use client";
import React from 'react';
import { Menu, X } from 'lucide-react';
import { HOME_STYLES } from '../Styles/HomeStyles';
import { NavbarComponentContract } from '../Model/NavbarModel';
import HomeNavbarBrand from './SubComponents/HomeNavbarBrand';
import HomeNavbarDesktopLinks from './SubComponents/HomeNavbarDesktopLinks';
import HomeNavbarMobileMenu from './SubComponents/HomeNavbarMobileMenu';

const NavbarView: React.FC<NavbarComponentContract> = ({ viewModel }) => {
    const { scrolled, isMenuOpen, toggleMenu, closeMenu, openLoginModal } = viewModel;
    const styles = HOME_STYLES.navbar;
    return (
        <nav className={styles.nav(scrolled)}>
            <div className={styles.container}>
                <div className={styles.inner}>
                    <HomeNavbarBrand />
                    <HomeNavbarDesktopLinks onOpenLogin={openLoginModal} />
                    <div className={styles.mobile_btn} onClick={toggleMenu}>
                        {isMenuOpen ? <X size={28} /> : <Menu size={28} />}
                    </div>
                </div>
            </div>
            <HomeNavbarMobileMenu 
                isOpen={isMenuOpen} 
                onClose={closeMenu} 
                onOpenLogin={openLoginModal} 
            />
        </nav>
    );
};
export default NavbarView;
