"use client";
import React from 'react';
import { CONTACTO_STYLES } from '../Styles/ContactoStyles';
import ContactInfo from './SubComponents/ContactInfo';
import ContactForm from './SubComponents/ContactForm';
const ContactoView: React.FC = () => {
    const contactStyles = CONTACTO_STYLES;
    return (
        <section id="contacto" className={contactStyles.section}>
            <div className={contactStyles.container}>
                <div className={contactStyles.card_wrap}>
                    <ContactInfo />
                    <ContactForm />
                </div>
            </div>
        </section>
    );
};
export default ContactoView;
