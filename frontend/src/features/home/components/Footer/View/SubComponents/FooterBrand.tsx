"use client";
import React from 'react';
import { FOOTER_STYLES } from '../../Styles/FooterStyles';
import { FOOTER_DATA } from '../../Model/FooterModel';
const FooterBrand: React.FC = () => {
    const styles = FOOTER_STYLES;
    const data = FOOTER_DATA;
    return (
        <div className={styles.brand_col}>
            <span className={styles.brand_name}>
                COLEGIO <span className={styles.brand_accent}>CED</span>
            </span>
            <p className={styles.brand_desc}>{data.tagline}</p>
        </div>
    );
};
export default FooterBrand;
