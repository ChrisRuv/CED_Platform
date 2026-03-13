"use client";
import React from 'react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';

interface ContactInfoCardProps {
    items: any[];
}

const ContactInfoCard: React.FC<ContactInfoCardProps> = ({ items }) => {
    const styles = CONTACTO_STYLES;
    return (
        <div className={styles.info_card}>
            <h3 className={styles.info_title}>Información de Contacto</h3>
            <div className={styles.info_items}>
                {items.map((item, index) => (
                    <div key={index} className="flex items-center group">
                        <div className={styles.icon_circle}>
                            <item.icon className={styles.icon_svg} />
                        </div>
                        <div>
                            <p className={styles.label}>{item.label}</p>
                            <p className={styles.value}>{item.value}</p>
                        </div>
                    </div>
                ))}
            </div>
            <div className={styles.glow} />
        </div>
    );
};

export default ContactInfoCard;
