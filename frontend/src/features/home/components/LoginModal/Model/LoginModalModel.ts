export interface LoginModalViewProps {
    onClose: () => void;
}
export interface LoginFormProps {
    viewModel: any;
}
export interface LoginInputProps {
    label: string;
    placeholder: string;
    type?: string;
    value: string;
    onChange: (val: string) => void;
    forgotLink?: { label: string; href: string };
}
export interface LoginSubmitButtonProps {
    label: string;
}
export const LOGIN_MODAL_DATA = {
    title: "Campus Digital",
    welcome: "Bienvenido de vuelta, Estudiante",
    form: {
        username: { label: "Usuario", placeholder: "Tu usuario" },
        password: { label: "Contraseña", placeholder: "••••••••", forgot: "¿Olvidaste tu contraseña?" },
        submit: "Acceder ahora"
    },
    footer_badges: ["Moodle 4.x", "Safe Protocol", "256-bit SSL"]
};
