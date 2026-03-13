"use client";
import React from 'react';
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { NOSOTROS_DATA } from '../../Model/NosotrosModel';
import AudienceItem from './AudienceItem';
const NosotrosAudience: React.FC = () => {
    const styles = NOSOTROS_STYLES;
    const data = NOSOTROS_DATA;
    return (
        <section className={styles.audience_section}>
            <div className={styles.container}>
                <div className={styles.audience_header}>
                    <h2 className={styles.audience_title}>Un Colegio Que Se Adapta A Ti</h2>
                    <p className={styles.audience_desc}>
                        Somos la institución de elección para quienes requieren
                        un modelo educativo que respete y potencie su estilo de vida.
                    </p>
                </div>
                <div className={styles.audience_grid}>
                    {data.audience.map((item, index) => (
                        <AudienceItem 
                            key={index}
                            title={item.title}
                            desc={item.desc}
                            icon={item.icon}
                        />
                    ))}
                </div>
            </div>
        </section>
    );
};
export default NosotrosAudience;
