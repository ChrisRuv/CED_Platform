"use client";
import React from 'react';
import Image from "next/image";
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { NOSOTROS_DATA } from '../../Model/NosotrosModel';
import FilosofiaCard from './FilosofiaCard';
const NosotrosPhilosophy: React.FC = () => {
    const styles = NOSOTROS_STYLES;
    const data = NOSOTROS_DATA;
    return (
        <section className={styles.section}>
            <div className={styles.container}>
                <div className={styles.header}>
                    <h2 className={styles.title}>{data.title}</h2>
                    <div className={styles.divider}></div>
                    <p className={styles.subtitle || "mt-4 text-xl text-gray-300"}>{data.subtitle}</p>
                </div>
                <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div className="order-2 md:order-1 relative h-[300px] md:h-[450px] w-full rounded-xl overflow-hidden shadow-2xl">
                        <Image
                            src="/images/ced_campus_life.jpg"
                            alt="Filosofía Educativa"
                            fill
                            className="object-cover"
                            sizes="(max-width: 768px) 100vw, 50vw"
                        />
                    </div>
                    <div className="order-1 md:order-2 space-y-6">
                        {data.cards.map((card, index) => (
                            <FilosofiaCard 
                                key={index}
                                title={card.title}
                                desc={card.desc}
                                icon={card.icon}
                                color={card.color}
                            />
                        ))}
                    </div>
                </div>
            </div>
        </section>
    );
};
export default NosotrosPhilosophy;
