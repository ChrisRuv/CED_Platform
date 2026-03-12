export interface FormInputProps {
    label: string;
    placeholder: string;
    type?: string;
}
export interface FormTextAreaProps {
    label: string;
    placeholder: string;
    rows?: number;
}
export interface FormSubmitButtonProps {
    label: string;
    footer: string;
}
export const CONTACTO_DATA = {
    title: "¿Listo para evolucionar?",
    subtitle: "Déjanos tus datos y un mentor CED te contactará.",
    info: [
        { label: "Email", value: "homeschoolced@gmail.com", icon: "Mail", color: "text-blue-400", hoverColor: "group-hover:bg-blue-600" },
        { label: "WhatsApp", value: "646-116-3106", icon: "Phone", color: "text-ced-accent", hoverColor: "group-hover:bg-ced-accent" },
        { label: "Sede", value: "Ensenada, B.C. México", icon: "MapPin", color: "text-slate-400", hoverColor: "group-hover:bg-white group-hover:text-black" }
    ],
    form: {
        fields: [
            { id: "name", label: "Nombre", placeholder: "Escribe tu nombre", type: "text" },
            { id: "whatsapp", label: "WhatsApp", placeholder: "10 dígitos", type: "text" },
            { id: "message", label: "Mensaje", placeholder: "¿En qué podemos ayudarte?", type: "textarea" }
        ],
        btnLabel: "Enviar solicitud",
        footer: "Respuesta en menos de 24 horas"
    }
};
