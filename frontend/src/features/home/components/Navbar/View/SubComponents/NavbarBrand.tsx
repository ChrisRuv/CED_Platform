"use client";
import React from 'react';
import { NAVBAR_STYLES } from '../../Styles/NavbarStyles';
import { NAVBAR_DATA } from '../../Model/NavbarModel';
const NavbarBrand: React.FC = () => {
    const styles = NAVBAR_STYLES;
    const data = NAVBAR_DATA;
    return (
        <div className={styles.logo_wrap}>
            <div className={styles.logo_icon}>C</div>
            <div className={styles.logo_text_wrap}>
                <span className={styles.logo_name}>{data.name}</span>
                <span className={styles.logo_sub}>{data.tagline}</span>
            </div>
        </div>
    );
};
export default NavbarBrand;
