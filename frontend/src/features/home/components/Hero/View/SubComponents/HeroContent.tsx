"use client";
import React from 'react';
import { ChevronRight } from "lucide-react";
import { HERO_STYLES } from '../../Styles/HeroStyles';
import { HERO_DATA } from '../../Model/HeroModel';
const HeroContent: React.FC = () => {
    const styles = HERO_STYLES;
    const data = HERO_DATA;
    return (
        <div className={styles.content_wrap}>
            <div className={styles.badge}>
                <span className={styles.badge_dot}></span>
                Inscripciones Abiertas 2026
            </div>
            <h1 className={styles.title}>
                {data.title_line1} <br />
                <span className={styles.title_accent}>{data.title_line2} {data.title_accent}</span>
            </h1>
            <p className={styles.desc}>
                {data.description}
            </p>
            <div className={styles.btn_row}>
                <a href={data.cta_primary.href} className={styles.btn_primary}>
                    {data.cta_primary.label} 
                    <ChevronRight size={18} className="translate-x-0 group-hover:translate-x-1 transition-transform" />
                </a>
                <a href={data.cta_secondary.href} className={styles.btn_secondary}>
                    {data.cta_secondary.label}
                </a>
            </div>
        </div>
    );
};
export default HeroContent;
