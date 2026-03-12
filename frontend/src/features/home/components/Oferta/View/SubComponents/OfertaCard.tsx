"use client";
import React from 'react';
import { OFERTA_STYLES } from '../../Styles/OfertaStyles';
import { OfertaCardProps } from '../../Model/OfertaModel';

const OfertaCard: React.FC<OfertaCardProps> = ({ id, title, desc }) => {
    const styles = OFERTA_STYLES;
    return (
        <div className={styles.card}>
            <span className={styles.card_id}>{id}</span>
            <h4 className={styles.card_title}>{title}</h4>
            <p className={styles.card_desc}>{desc}</p>
        </div>
    );
};
export default OfertaCard;
