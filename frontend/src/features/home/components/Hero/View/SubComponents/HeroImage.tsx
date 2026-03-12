"use client";
import React from 'react';
import Image from "next/image";
import { HERO_STYLES } from '../../Styles/HeroStyles';
import { HERO_DATA } from '../../Model/HeroModel';
const HeroImage: React.FC = () => {
    const styles = HERO_STYLES;
    const data = HERO_DATA;
    return (
        <div className={styles.img_container}>
            <div className={styles.img_wrap}>
                <Image
                    src={data.image}
                    alt="Estudiante Colegio CED"
                    width={800}
                    height={1000}
                    className={styles.img}
                />
                <div className={styles.img_fade} />
            </div>
            <div className={styles.glow}></div>
        </div>
    );
};
export default HeroImage;
