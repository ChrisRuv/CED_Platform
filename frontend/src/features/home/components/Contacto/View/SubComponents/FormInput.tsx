
"use client";
import React from 'react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';
import { FormInputComponentContract } from '../../Model/ContactoModel';
const FormInput: React.FC<FormInputComponentContract> = ({ label, placeholder, type = "text" }) => {
    const styles = CONTACTO_STYLES;
    return (
        <div className={styles.field_group}>
            <label className={styles.field_label}>{label}</label>
            <input 
                type={type} 
                className={styles.input} 
                placeholder={placeholder} 
            />
        </div>
    );
};
export default FormInput;
