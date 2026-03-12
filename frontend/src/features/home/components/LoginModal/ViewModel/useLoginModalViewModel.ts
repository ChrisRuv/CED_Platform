import { useState } from "react";
export const useLoginModalViewModel = (onClose: () => void) => {
    const [username, setUsername] = useState("");
    const [password, setPassword] = useState("");
    const handleLogin = (e: React.FormEvent) => {
        e.preventDefault();
        console.log("Login attempt:", { username, password });
    };
    return {
        username,
        setUsername,
        password,
        setPassword,
        handleLogin,
        onClose
    };
};
