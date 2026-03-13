"use client";
import React from 'react';
import { Rocket, Users, GraduationCap } from 'lucide-react';
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { AudienceComponentContract } from '../../Model/NosotrosModel';
const iconMap = {
    Rocket: Rocket,
    Users: Users,
    GraduationCap: GraduationCap
};
const AudienceItem: React.FC<AudienceComponentContract> = ({ icon, title, desc }) => {
    const styles = NOSOTROS_STYLES;
    const IconComponent = iconMap[icon as keyof typeof iconMap] || Rocket;
    return (
        <div className={styles.audience_card}>
            <div className={styles.audience_icon_wrap}>
                <IconComponent size={32} />
            </div>
            <h3 className={styles.audience_title_main}>{title}</h3>
            <p className={styles.audience_text}>{desc}</p>
        </div>
    );
};
export default AudienceItem;
