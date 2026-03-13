"use client";
import React from 'react';
import { HERO_STYLES } from '../Styles/HeroStyles';
import HeroContent from './SubComponents/HeroContent';
import HeroVideo from './SubComponents/HeroVideo';
const HeroView: React.FC = () => {
    const heroStyles = HERO_STYLES;
    return (
        <section id="inicio" className={heroStyles.section}>
            <div className={heroStyles.bg_overlay}>
                <div className={heroStyles.bg_circle1}></div>
                <div className={heroStyles.bg_circle2}></div>
            </div>
            <div className={heroStyles.container}>
                <div className={heroStyles.grid}>
                    <HeroContent />
                    <HeroVideo />
                </div>
            </div>
        </section>
    );
};
export default HeroView;
