"use client";
import React from 'react';
import { ChevronDown } from 'lucide-react';
import { OFERTA_STYLES } from '../../Styles/OfertaStyles';
import { FAQComponentContract } from '../../Model/OfertaModel';

const FAQItem: React.FC<FAQComponentContract> = ({ question, answer }) => {
    const styles = OFERTA_STYLES;
    return (
        <details className={styles.faq_item}>
            <summary className={styles.faq_summary}>
                <span>{question}</span>
                <ChevronDown size={20} className="transition-transform group-open:rotate-180 text-ced-accent" />
            </summary>
            <p className={styles.faq_answer}>{answer}</p>
        </details>
    );
};
export default FAQItem;
