"use client";
import React from 'react';
import { LOGIN_MODAL_STYLES } from '../../Styles/LoginModalStyles';
import { LoginInputProps } from '../../Model/LoginModalModel';

const LoginInput: React.FC<LoginInputProps> = ({ label, placeholder, type = "text", value, onChange, forgotLink }) => {
    const styles = LOGIN_MODAL_STYLES;
    return (
        <div className={styles.field_group}>
            <div className="flex justify-between items-center px-1">
                <label className={styles.label}>{label}</label>
                {forgotLink && (
                    <a href={forgotLink.href} className={styles.forgot_link}>
                        {forgotLink.label}
                    </a>
                )}
            </div>
            <input 
                type={type} 
                className={styles.input} 
                placeholder={placeholder}
                value={value}
                onChange={(e) => onChange(e.target.value)}
            />
        </div>
    );
};
export default LoginInput;
