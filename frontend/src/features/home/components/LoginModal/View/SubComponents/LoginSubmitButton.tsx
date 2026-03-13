"use client";
import React from 'react';
import { LOGIN_MODAL_STYLES } from '../../Styles/LoginModalStyles';
import { LoginSubmitComponentContract } from '../../Model/LoginModalModel';
const LoginSubmitButton: React.FC<LoginSubmitComponentContract> = ({ label }) => {
    const styles = LOGIN_MODAL_STYLES;
    return (
        <button type="submit" className={styles.submit_btn}>
            {label}
        </button>
    );
};
export default LoginSubmitButton;
