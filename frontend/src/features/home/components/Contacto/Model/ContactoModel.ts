export interface FormInputComponentContract {
    label: string;
    placeholder: string;
    type?: string;
}

export interface FormTextAreaComponentContract {
    label: string;
    placeholder: string;
    rows?: number;
}

export interface FormSubmitButtonComponentContract {
    label: string;
    footer: string;
}

export const CONTACTO_DATA = {
    title: "Contacto",
    subtitle: "¿Listo para comenzar tu evolución educativa?",
    email: "correo@colegioced.com",
    phone: "+52 (55) 1234 5678",
    location: "Ensenada, Baja California, México",
    ventajas: [
        "Modelo 100% Flexible",
        "Validez Oficial SEP",
        "Acompañamiento por Mentores",
        "Plataforma Digital 24/7",
        "Enfoque en Alto Rendimiento"
    ],
    form: {
        fields: [
            { label: 'Nombre', placeholder: 'Tu nombre completo' },
            { label: 'Teléfono', placeholder: 'Tu número de contacto' },
            { label: 'Mensaje', placeholder: '¿Cómo podemos ayudarte?' }
        ],
        btnLabel: 'Enviar Mensaje',
        footer: 'Tu información está segura con nosotros.'
    },
    info: [
        { label: 'Email', value: 'correo@colegioced.com', icon: 'Mail', color: 'from-blue-400 to-indigo-500', hoverColor: 'group-hover:bg-indigo-500' },
        { label: 'Teléfono', value: '+52 (55) 1234 5678', icon: 'Phone', color: 'from-emerald-400 to-teal-500', hoverColor: 'group-hover:bg-teal-500' },
        { label: 'Ubicación', value: 'Ensenada, Baja California, México', icon: 'MapPin', color: 'from-orange-400 to-red-500', hoverColor: 'group-hover:bg-red-500' }
    ]
};
