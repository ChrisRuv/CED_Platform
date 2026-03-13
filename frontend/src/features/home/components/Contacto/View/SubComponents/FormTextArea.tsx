
"use client";

import React from 'react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';
import { FormTextAreaComponentContract } from '../../Model/ContactoModel';
const FormTextArea: React.FC<FormTextAreaComponentContract> = ({ label, placeholder, rows = 4 }) => {
    const styles = CONTACTO_STYLES;
    return (
        <div className={styles.field_group}>
            <label className={styles.field_label}>{label}</label>
            <textarea 
                rows={rows} 
                className={styles.textarea} 
                placeholder={placeholder}
            ></textarea>
        </div>
    );
};
export default FormTextArea;
