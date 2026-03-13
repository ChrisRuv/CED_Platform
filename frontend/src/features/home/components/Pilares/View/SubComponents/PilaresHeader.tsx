"use client";
import React from 'react';
import { PILARES_STYLES } from '../../Styles/PilaresStyles';
import { PILARES_DATA } from '../../Model/PilaresModel';
const PilaresHeader: React.FC = () => {
    const styles = PILARES_STYLES;
    const data = PILARES_DATA;
    return (
        <div className={styles.header}>
            <span className={styles.label}>{data.label}</span>
            <h3 className={styles.title}>
                {data.title.split(' ').slice(0, 2).join(' ')} <br />
                {data.title.split(' ').slice(2).join(' ')}
            </h3>
        </div>
    );
};
export default PilaresHeader;
