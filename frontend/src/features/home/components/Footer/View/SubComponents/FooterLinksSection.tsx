"use client";
import React from 'react';
import { FOOTER_STYLES } from '../../Styles/FooterStyles';
import { FooterLinksComponentContract } from '../../Model/FooterModel';
const FooterLinksSection: React.FC<FooterLinksComponentContract> = ({ title, links }) => {
    const styles = FOOTER_STYLES;
    return (
        <div>
            <h5 className={styles.col_title}>{title}</h5>
            <ul className={styles.link_list}>
                {links.map(link => (
                    <li key={link} className={styles.link_item}>{link}</li>
                ))}
            </ul>
        </div>
    );
};
export default FooterLinksSection;
