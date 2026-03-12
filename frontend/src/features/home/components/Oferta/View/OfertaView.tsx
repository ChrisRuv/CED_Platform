"use client";
import React from 'react';
import { OFERTA_STYLES } from '../Styles/OfertaStyles';
import { OFERTA_DATA } from '../Model/OfertaModel';
import OfertaCard from './SubComponents/OfertaCard';
const OfertaView: React.FC = () => {
    const ofertaStyles = OFERTA_STYLES;
    const ofertaData = OFERTA_DATA;
    return (
        <section id="oferta" className={ofertaStyles.section}>
            <div className={ofertaStyles.container}>
                <div className={ofertaStyles.header}>
                    <div className={ofertaStyles.header_content}>
                        <span className={ofertaStyles.label}>{ofertaData.label}</span>
                        <h3 className={ofertaStyles.title}>{ofertaData.title}</h3>
                    </div>
                    <p className={ofertaStyles.desc}>{ofertaData.description}</p>
                </div>
                <div className={ofertaStyles.grid}>
                    {ofertaData.levels.map((level, index) => (
                        <OfertaCard 
                            key={index}
                            id={level.id}
                            title={level.title}
                            desc={level.desc}
                        />
                    ))}
                </div>
            </div>
        </section>
    );
};
export default OfertaView;
