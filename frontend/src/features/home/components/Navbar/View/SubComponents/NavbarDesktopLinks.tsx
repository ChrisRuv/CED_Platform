"use client";
import React from 'react';
import { Lock } from 'lucide-react';
import { NAVBAR_STYLES } from '../../Styles/NavbarStyles';
import { NAVBAR_DATA, NavbarDesktopLinksComponentContract } from '../../Model/NavbarModel';
const NavbarDesktopLinks: React.FC<NavbarDesktopLinksComponentContract> = ({ onOpenLogin }) => {
    const styles = NAVBAR_STYLES;
    const data = NAVBAR_DATA;
    return (
        <div className={styles.desktop_nav}>
            {data.navigation.map((item) => (
                <a key={item.id} href={`#${item.id}`} className={styles.link}>
                    {item.label}
                    <span className={styles.link_accent}></span>
                </a>
            ))}
            <button onClick={onOpenLogin} className={styles.cta}>
                <Lock size={14} /> Campus Digital
            </button>
        </div>
    );
};
export default NavbarDesktopLinks;
