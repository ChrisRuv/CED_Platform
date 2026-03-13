"use client";
import React from 'react';
import { PILARES_STYLES } from '../../Styles/PilaresStyles';
import { PilarComponentContract } from '../../Model/PilaresModel';
const PilarItem: React.FC<PilarComponentContract> = ({ index, title, desc }) => {
    const styles = PILARES_STYLES;
    return (
        <div className={styles.item}>
            <div className={styles.item_num}>
                {index + 1}
            </div>
            <div className={styles.item_content}>
                <h4 className={styles.item_title}>{title}</h4>
                <p className={styles.item_desc}>{desc}</p>
            </div>
        </div>
    );
};
export default PilarItem;
