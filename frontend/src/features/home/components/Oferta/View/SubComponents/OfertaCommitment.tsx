"use client";
import React from 'react';
import { OFERTA_STYLES } from '../../Styles/OfertaStyles';
import { CommitmentComponentContract } from '../../Model/OfertaModel';
const OfertaCommitment: React.FC<CommitmentComponentContract> = ({ title, text, sub }) => {
    const styles = OFERTA_STYLES;
    return (
        <section className={styles.commit_section}>
            <div className={styles.container}>
                <h2 className={styles.commit_title}>{title}</h2>
                <p className={styles.commit_text}>{text}</p>
                <p className={styles.commit_sub}>{sub}</p>
            </div>
        </section>
    );
};
export default OfertaCommitment;
