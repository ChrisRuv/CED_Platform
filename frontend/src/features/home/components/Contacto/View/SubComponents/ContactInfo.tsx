
"use client";
import React from 'react';
import { Mail, Phone, MapPin } from 'lucide-react';
import { CONTACTO_STYLES } from '../../Styles/ContactoStyles';
import { CONTACTO_DATA } from '../../Model/ContactoModel';

const ICON_MAP: Record<string, any> = {
    Mail: Mail,
    Phone: Phone,
    MapPin: MapPin
};

const ContactInfo: React.FC = () => {
    const styles = CONTACTO_STYLES;
    const data = CONTACTO_DATA;
    return (
        <div className={styles.info_col}>
            <div className={styles.header}>
                <h2 className={styles.title}>{data.title}</h2>
                <p className={styles.subtitle}>{data.subtitle}</p>
            </div>
            <div className={styles.info_list}>
                {data.info.map((item, idx) => {
                    const Icon = ICON_MAP[item.icon];
                    return (
                        <div key={idx} className={styles.info_item}>
                            <div className={`${styles.icon_wrap(item.color)} ${item.hoverColor} group-hover:text-white`}>
                                <Icon />
                            </div>
                            <div>
                                <p className={styles.info_label}>{item.label}</p>
                                <p className={styles.info_value}>{item.value}</p>
                            </div>
                        </div>
                    );
                })}
            </div>
        </div>
    );
};
export default ContactInfo;
