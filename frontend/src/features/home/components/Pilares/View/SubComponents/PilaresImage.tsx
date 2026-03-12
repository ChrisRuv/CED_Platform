"use client";
import React from 'react';
import Image from "next/image";
import { PILARES_STYLES } from '../../Styles/PilaresStyles';
import { PILARES_DATA } from '../../Model/PilaresModel';

const PilaresImage: React.FC = () => {
    const styles = PILARES_STYLES;
    const data = PILARES_DATA;
    return (
        <div className={styles.image_wrap}>
            <div className={styles.image_glow}></div>
            <div className={styles.image_container}>
                <Image
                    src={data.image}
                    alt="Modelo CED"
                    width={800}
                    height={1000}
                    className={styles.image}
                />
                <div className={styles.image_overlay} />
                <div className={styles.image_badge}>
                    <p className={styles.image_quote}>"{data.quote}"</p>
                </div>
            </div>
        </div>
    );
};
export default PilaresImage;
