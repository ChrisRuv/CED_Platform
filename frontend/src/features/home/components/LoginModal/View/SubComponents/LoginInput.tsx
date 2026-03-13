"use client";
import React from 'react';
import { User, Lock } from 'lucide-react';
import { LOGIN_MODAL_STYLES } from '../../Styles/LoginModalStyles';
import { LoginInputComponentContract } from '../../Model/LoginModalModel';
const LoginInput: React.FC<LoginInputComponentContract> = ({ label, placeholder, type = "text" }) => {
    const styles = LOGIN_MODAL_STYLES;
    const Icon = label.toLowerCase().includes('usuario') || label.toLowerCase().includes('correo') ? User : Lock;
    return (
        <div className={styles.field_group}>
            <label className={styles.label}>{label}</label>
            <Icon size={18} className={styles.input_icon} />
            <input 
                type={type} 
                className={styles.input} 
                placeholder={placeholder}
            />
        </div>
    );
};
export default LoginInput;
