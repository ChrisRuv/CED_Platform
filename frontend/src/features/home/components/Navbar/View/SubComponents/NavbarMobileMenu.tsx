"use client";
import React from 'react';
import { NAVBAR_STYLES } from '../../Styles/NavbarStyles';
import { NAVBAR_DATA, NavbarMobileMenuComponentContract } from '../../Model/NavbarModel';
const NavbarMobileMenu: React.FC<NavbarMobileMenuComponentContract> = ({ isOpen, onClose, onOpenLogin }) => {
    const styles = NAVBAR_STYLES;
    const data = NAVBAR_DATA;
    return (
        <div className={styles.mobile_menu(isOpen)}>
            <div className={styles.mobile_inner}>
                {data.navigation.map((item) => (
                    <a key={item.id} href={`#${item.id}`} className={styles.mobile_link} onClick={onClose}>
                        {item.label}
                    </a>
                ))}
                <button onClick={onOpenLogin} className={styles.mobile_cta}>
                    Acceder al Campus
                </button>
            </div>
        </div>
    );
};
export default NavbarMobileMenu;
