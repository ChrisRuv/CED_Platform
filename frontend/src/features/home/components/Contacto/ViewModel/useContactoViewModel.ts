import { Mail, Phone, MapPin } from 'lucide-react';
import { CONTACTO_DATA } from '../Model/ContactoModel';

export const useContactoViewModel = () => {
    const data = CONTACTO_DATA;
    
    const contactItems = [
        { label: 'Email', value: data.email, icon: Mail },
        { label: 'Teléfono', value: data.phone, icon: Phone },
        { label: 'Ubicación', value: data.location, icon: MapPin },
    ];

    return {
        data,
        contactItems
    };
};
