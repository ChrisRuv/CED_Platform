"use client";
import React from 'react';
import { Rocket, Users, GraduationCap } from 'lucide-react';
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { AudienceComponentContract } from '../../Model/NosotrosModel';
const ICON_MAP: Record<string, any> = {
    Rocket: Rocket,
    Users: Users,
    GraduationCap: GraduationCap
};
const AudienceItem: React.FC<AudienceComponentContract> = ({ icon, title, desc }) => {
    const styles = NOSOTROS_STYLES;
    const Icon = ICON_MAP[icon];
    return (
        <div className={styles.audience_item}>
            <div className={styles.audience_icon_wrap}>
                <Icon className="text-blue-600" size={24} />
            </div>
            <div>
                <h5 className={styles.audience_title}>{title}</h5>
                <p className={styles.audience_desc}>{desc}</p>
            </div>
        </div>
    );
};
export default AudienceItem;
