"use client";
import React from 'react';
import { OFERTA_STYLES } from '../../Styles/OfertaStyles';
import { OfertaComponentContract } from '../../Model/OfertaModel';

const OfertaCard: React.FC<OfertaComponentContract> = ({ id, title, desc }) => {
    const styles = OFERTA_STYLES;
    return (
        <div className={styles.offer_card}>
            <span className={styles.offer_num}>{id}</span>
            <div>
                <h3 className={styles.offer_title}>{title}</h3>
                <p className={styles.offer_text}>{desc}</p>
            </div>
        </div>
    );
};
export default OfertaCard;
