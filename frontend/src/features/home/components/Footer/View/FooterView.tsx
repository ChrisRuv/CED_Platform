"use client";
import React from 'react';
import { FOOTER_STYLES } from '../Styles/FooterStyles';
import { FOOTER_DATA } from '../Model/FooterModel';
import FooterBrand from './SubComponents/FooterBrand';
import FooterNewsletter from './SubComponents/FooterNewsletter';
import FooterLinksSection from './SubComponents/FooterLinksSection';
import FooterBottom from './SubComponents/FooterBottom';
const FooterView: React.FC = () => {
    const footerStyles = FOOTER_STYLES;
    const footerData = FOOTER_DATA;
    return (
        <footer className={footerStyles.footer}>
            <div className={footerStyles.container}>
                <div className={footerStyles.grid}>
                    <FooterBrand />
                    {footerData.sections.map((section, index) => (
                        <FooterLinksSection 
                            key={index}
                            title={section.title}
                            links={section.links}
                        />
                    ))}
                    <FooterNewsletter />
                </div>
                <FooterBottom 
                    copyright={footerData.copyright} 
                    socials={footerData.socials} 
                />
            </div>
        </footer>
    );
};
export default FooterView;
