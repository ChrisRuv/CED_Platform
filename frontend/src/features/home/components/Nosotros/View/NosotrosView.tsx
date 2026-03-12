"use client";
import React from 'react';
import { NOSOTROS_STYLES } from '../Styles/NosotrosStyles';
import { NOSOTROS_DATA } from '../Model/NosotrosModel';
import FilosofiaCard from './SubComponents/FilosofiaCard';
import AudienceItem from './SubComponents/AudienceItem';
import NosotrosHeader from './SubComponents/NosotrosHeader';
const NosotrosView: React.FC = () => {
    const nosotrosStyles = NOSOTROS_STYLES;
    const nosotrosData = NOSOTROS_DATA;
    return (
        <section id="nosotros" className={nosotrosStyles.section}>
            <div className={nosotrosStyles.container}>
                <NosotrosHeader />
                <div className={nosotrosStyles.grid_cards}>
                    {nosotrosData.cards.map((card, index) => (
                        <FilosofiaCard 
                            key={index}
                            title={card.title}
                            icon={card.icon}
                            color={card.color}
                            desc={card.desc}
                        />
                    ))}
                </div>
                <div className={nosotrosStyles.grid_audience}>
                    {nosotrosData.audience.map((item, index) => (
                        <AudienceItem 
                            key={index}
                            icon={item.icon}
                            title={item.title}
                            desc={item.desc}
                        />
                    ))}
                </div>
            </div>
        </section>
    );
};
export default NosotrosView;
