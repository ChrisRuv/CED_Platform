"use client";

import React from 'react';
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { NOSOTROS_DATA } from '../../Model/NosotrosModel';
const NosotrosHeader: React.FC = () => {
    const styles = NOSOTROS_STYLES;
    const data = NOSOTROS_DATA;
    return (
        <div className={styles.header}>
            <span className={styles.label}>{data.title}</span>
            <h2 className={styles.title}>
                {data.subtitle.split(' ').slice(0, 3).join(' ')} <br />
                {data.subtitle.split(' ').slice(3).join(' ')}
            </h2>
            <div className={styles.divider}></div>
        </div>
    );
};
export default NosotrosHeader;
