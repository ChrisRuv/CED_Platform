"use client";
import React from 'react';
import { Lock } from 'lucide-react';
import { HOME_STYLES } from '../../Styles/HomeStyles';
import { SITE_DATA } from '../../Model/SiteRepository';
interface HomeNavbarDesktopLinksActions {
    onOpenLogin: () => void;
}
const HomeNavbarDesktopLinks: React.FC<HomeNavbarDesktopLinksActions> = ({ onOpenLogin }) => {
    const styles = HOME_STYLES.navbar;
    const data = SITE_DATA;
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
export default HomeNavbarDesktopLinks;
