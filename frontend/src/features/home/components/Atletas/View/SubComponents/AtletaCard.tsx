"use client";
import React from 'react';
import Image from "next/image";
import { ATLETAS_STYLES } from '../../Styles/AtletasStyles';
import { AtletaComponentContract } from '../../Model/AtletasModel';
const AtletaCard: React.FC<AtletaComponentContract> = ({ name, sport, image }) => {
    const styles = ATLETAS_STYLES;
    return (
        <div className={styles.card}>
            <div className="relative w-full h-80">
                <Image
                    src={image}
                    alt={name}
                    fill
                    className={styles.card_img}
                    sizes="(max-width: 768px) 100vw, 25vw"
                />
                <div className={styles.card_overlay}>
                    <div className={styles.card_content}>
                        <p className={styles.card_label}>{sport}</p>
                        <h4 className={styles.card_name}>{name}</h4>
                        <div className={styles.card_divider}></div>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default AtletaCard;
