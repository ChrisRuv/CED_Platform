"use client";
import React from 'react';
import { LOGIN_MODAL_DATA, LoginFormComponentContract } from '../../Model/LoginModalModel';
import LoginInput from './LoginInput';
import LoginSubmitButton from './LoginSubmitButton';
const LoginForm: React.FC<LoginFormComponentContract> = ({ viewModel }) => {
    const loginData = LOGIN_MODAL_DATA;
    return (
        <form className="space-y-6" onSubmit={viewModel.handleLogin}>
            <LoginInput 
                label={loginData.form.username.label}
                placeholder={loginData.form.username.placeholder}
                value={viewModel.username}
                onChange={viewModel.setUsername}
            />
            <LoginInput 
                label={loginData.form.password.label}
                placeholder={loginData.form.password.placeholder}
                type="password"
                value={viewModel.password}
                onChange={viewModel.setPassword}
                forgotLink={{
                    label: loginData.form.password.forgot,
                    href: "#"
                }}
            />
            <LoginSubmitButton label={loginData.form.submit} />
        </form>
    );
};
export default LoginForm;
