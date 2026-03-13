"use client";
import React from 'react';
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { FilosofiaComponentContract } from '../../Model/NosotrosModel';
const FilosofiaCard: React.FC<FilosofiaComponentContract> = ({ title, desc }) => {
    const styles = NOSOTROS_STYLES;
    return (
        <div className={styles.card}>
            <h3 className={styles.card_title}>{title}</h3>
            <p className={styles.card_desc}>{desc}</p>
        </div>
    );
};
export default FilosofiaCard;
