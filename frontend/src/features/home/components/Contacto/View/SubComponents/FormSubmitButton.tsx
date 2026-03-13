
"use client";
import React from 'react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';
import { FormSubmitButtonComponentContract } from '../../Model/ContactoModel';

const FormSubmitButton: React.FC<FormSubmitButtonComponentContract> = ({ label, footer }) => {
    const styles = CONTACTO_STYLES;
    return (
        <>
            <button className={styles.submit_btn} type="button">
                {label}
            </button>
            <p className={styles.form_footer}>{footer}</p>
        </>
    );
};
export default FormSubmitButton;
