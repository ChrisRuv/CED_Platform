"use client";
import React from 'react';
import { FOOTER_STYLES } from '../../Styles/FooterStyles';
import { FOOTER_DATA } from '../../Model/FooterModel';
const FooterBrand: React.FC = () => {
    const styles = FOOTER_STYLES;
    const data = FOOTER_DATA;
    return (
        <div className={styles.brand_col}>
            <div className={styles.logo_wrap}>
                <div className={styles.logo_icon}>C</div>
                <span className={styles.logo_name}>{data.brand}</span>
            </div>
            <p className={styles.brand_desc}>{data.tagline}</p>
        </div>
    );
};
export default FooterBrand;
