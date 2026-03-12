"use client";
import React from 'react';
import { FOOTER_STYLES } from '../../Styles/FooterStyles';
const FooterNewsletter: React.FC = () => {
    const styles = FOOTER_STYLES;
    return (
        <div className={styles.newsletter_wrap}>
            <h5 className={styles.newsletter_title}>Newsletter</h5>
            <div className="relative">
                <input type="email" className={styles.input} placeholder="Email" />
                <button className={styles.btn}>Suscribirme</button>
            </div>
        </div>
    );
};
export default FooterNewsletter;
