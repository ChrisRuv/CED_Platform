"use client";
import React from 'react';
import { HOME_STYLES } from '../../Styles/HomeStyles';
import { SITE_DATA } from '../../Model/SiteRepository';
interface HomeNavbarMobileMenuActions {
    isOpen: boolean;
    onClose: () => void;
    onOpenLogin: () => void;
}
const HomeNavbarMobileMenu: React.FC<HomeNavbarMobileMenuActions> = ({ isOpen, onClose, onOpenLogin }) => {
    const styles = HOME_STYLES.navbar;
    const data = SITE_DATA;
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
export default HomeNavbarMobileMenu;
