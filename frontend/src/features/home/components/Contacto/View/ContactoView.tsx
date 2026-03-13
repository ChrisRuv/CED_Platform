"use client";
import React from 'react';
import { CONTACTO_STYLES } from '../Styles/ContactoStyles';
import { useContactoViewModel } from '../ViewModel/useContactoViewModel';
import ContactInfoCard from './SubComponents/ContactInfoCard';
import ContactWhyCard from './SubComponents/ContactWhyCard';

const ContactoView: React.FC = () => {
    const { data, contactItems } = useContactoViewModel();
    const styles = CONTACTO_STYLES;

    return (
        <section id="contacto" className={styles.section}>
            <div className={styles.container}>
                <div className={styles.header}>
                    <h2 className={styles.title}>{data.title}</h2>
                    <p className={styles.subtitle}>{data.subtitle}</p>
                </div>
                <div className={styles.grid}>
                    <ContactInfoCard items={contactItems} />
                    <ContactWhyCard ventajas={data.ventajas} />
                </div>
            </div>
        </section>
    );
};

export default ContactoView;

