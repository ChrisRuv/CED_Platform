"use client";
import React from 'react';
import { ATLETAS_STYLES } from '../Styles/AtletasStyles';
import { ATLETAS_DATA } from '../Model/AtletasModel';
import AtletaCard from './SubComponents/AtletaCard';
const AtletasView: React.FC = () => {
    const atletasStyles = ATLETAS_STYLES;
    const atletasData = ATLETAS_DATA;
    return (
        <section id="atletas" className={atletasStyles.section}>
            <div className={atletasStyles.container}>
                <div className={atletasStyles.header}>
                    <span className={atletasStyles.label}>{atletasData.label}</span>
                    <h2 className={atletasStyles.title}>{atletasData.title}</h2>
                    <div className={atletasStyles.divider}></div>
                </div>
                <div className={atletasStyles.grid}>
                    {atletasData.items.map((atleta, index) => (
                        <AtletaCard 
                            key={index}
                            name={atleta.name}
                            sport={atleta.sport}
                            image={atleta.image}
                        />
                    ))}
                </div>
            </div>
        </section>
    );
};
export default AtletasView;
