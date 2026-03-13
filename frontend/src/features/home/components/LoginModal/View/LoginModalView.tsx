"use client";
import React from 'react';
import { X, Lock } from 'lucide-react';
import { LOGIN_MODAL_STYLES } from '../Styles/LoginModalStyles';
import { LOGIN_MODAL_DATA, LoginModalComponentContract } from '../Model/LoginModalModel';
import { useLoginModalViewModel } from '../ViewModel/useLoginModalViewModel';
import LoginForm from './SubComponents/LoginForm';

const LoginModalView: React.FC<LoginModalComponentContract> = ({ onClose }) => {
    const viewModel = useLoginModalViewModel(onClose);
    const modalStyles = LOGIN_MODAL_STYLES;
    const modalData = LOGIN_MODAL_DATA;
    return (
        <div className={modalStyles.overlay}>
            <div className={modalStyles.backdrop} onClick={onClose}></div>
            <div className={modalStyles.modal}>
                <button onClick={onClose} className={modalStyles.close_btn}>
                    <X size={24} />
                </button>
                <div className={modalStyles.content}>
                    <div className={modalStyles.header}>
                        <div className={modalStyles.icon_wrap}>
                            <Lock size={36} />
                        </div>
                        <h3 className={modalStyles.title}>{modalData.title}</h3>
                        <p className={modalStyles.welcome}>{modalData.welcome}</p>
                    </div>
                    <LoginForm viewModel={viewModel} />
                    <div className={modalStyles.footer}>
                        {modalData.footer_badges.map((badge, index) => (
                            <span key={index} className={modalStyles.footer_text}>{badge}</span>
                        ))}
                    </div>
                </div>
            </div>
        </div>
    );
};
export default LoginModalView;
