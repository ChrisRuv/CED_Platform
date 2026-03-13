"use client";
import React from 'react';
import { HERO_STYLES } from '../../Styles/HeroStyles';
import { HERO_DATA } from '../../Model/HeroModel';

const HeroVideo: React.FC = () => {
    const styles = HERO_STYLES;
    const data = HERO_DATA;
    return (
        <div className={styles.img_container}>
            <div className={styles.img_wrap}>
                <video 
                    src={data.video}
                    controls
                    className={styles.img}
                />
                <div className={styles.img_fade} />
            </div>
            <div className={styles.glow} />
        </div>
    );
};
export default HeroVideo;
