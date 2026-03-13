
"use client";
import React from 'react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';
import { CONTACTO_DATA } from '../../Model/ContactoModel';
import FormInput from './FormInput';
import FormTextArea from './FormTextArea';
import FormSubmitButton from './FormSubmitButton';

const ContactForm: React.FC = () => {
    const contactStyles = CONTACTO_STYLES;
    const contactData = CONTACTO_DATA;
    return (
        <div className={contactStyles.form_col}>
            <form className={contactStyles.form}>
                <div className={contactStyles.grid}>
                    <FormInput 
                        label={contactData.form.fields[0].label} 
                        placeholder={contactData.form.fields[0].placeholder} 
                    />
                    <FormInput 
                        label={contactData.form.fields[1].label} 
                        placeholder={contactData.form.fields[1].placeholder} 
                    />
                </div>
                <FormTextArea 
                    label={contactData.form.fields[2].label} 
                    placeholder={contactData.form.fields[2].placeholder} 
                />
                <FormSubmitButton 
                    label={contactData.form.btnLabel} 
                    footer={contactData.form.footer} 
                />
            </form>
        </div>
    );
};
export default ContactForm;
