"use client";
import React from 'react';
import { HOME_STYLES } from '../../Styles/HomeStyles';
import { SITE_DATA } from '../../Model/SiteRepository';
const HomeNavbarBrand: React.FC = () => {
    const styles = HOME_STYLES.navbar;
    const data = SITE_DATA;
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
export default HomeNavbarBrand;
