"use client";
import React from 'react';
import { CheckCircle } from 'lucide-react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';

interface ContactWhyCardProps {
    ventajas: string[];
}

const ContactWhyCard: React.FC<ContactWhyCardProps> = ({ ventajas }) => {
    const styles = CONTACTO_STYLES;
    return (
        <div className={styles.why_card}>
            <h3 className={styles.why_title}>¿Por qué elegir CED?</h3>
            <ul className={styles.why_list}>
                {ventajas.map((ventaja, index) => (
                    <li key={index} className={styles.check_item}>
                        <CheckCircle className={styles.check_icon} />
                        <span>{ventaja}</span>
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default ContactWhyCard;
