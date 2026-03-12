"use client";
import React from 'react';
import { LOGIN_MODAL_STYLES } from '../../Styles/LoginModalStyles';
import { LoginSubmitButtonProps } from '../../Model/LoginModalModel';

const LoginSubmitButton: React.FC<LoginSubmitButtonProps> = ({ label }) => {
    const styles = LOGIN_MODAL_STYLES;
    return (
        <button className={styles.submit_btn} type="submit">
            {label}
        </button>
    );
};
export default LoginSubmitButton;
