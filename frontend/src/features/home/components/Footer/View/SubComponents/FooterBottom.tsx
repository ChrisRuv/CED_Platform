"use client";
import React from 'react';
import { FOOTER_STYLES } from '../../Styles/FooterStyles';
import { FooterBottomComponentContract } from '../../Model/FooterModel';
const FooterBottom: React.FC<FooterBottomComponentContract> = ({ copyright, socials }) => {
    const styles = FOOTER_STYLES;
    return (
        <div className={styles.bottom}>
            <p>{copyright}</p>
            <div className="flex gap-10">
                {socials.map(social => (
                    <span key={social}>{social}</span>
                ))}
            </div>
        </div>
    );
};
export default FooterBottom;
