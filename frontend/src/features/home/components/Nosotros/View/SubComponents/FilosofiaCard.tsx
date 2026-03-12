"use client";
import React from 'react';
import { Users, Trophy, Rocket } from 'lucide-react';
import { NOSOTROS_STYLES } from '../../Styles/NosotrosStyles';
import { FilosofiaComponentContract } from '../../Model/NosotrosModel';
const ICON_MAP: Record<string, any> = {
    Users: Users,
    Trophy: Trophy,
    Rocket: Rocket
};
const FilosofiaCard: React.FC<FilosofiaComponentContract> = ({ title, icon, color, desc }) => {
    const styles = NOSOTROS_STYLES;
    const Icon = ICON_MAP[icon];
    return (
        <div className={styles.card}>
            <div className={styles.card_icon_wrap(color)}>
                <Icon size={32} />
            </div>
            <h4 className={styles.card_title}>{title}</h4>
            <p className={styles.card_desc}>"{desc}"</p>
        </div>
    );
};
export default FilosofiaCard;
