"use client";
import React from 'react';
import { OFERTA_STYLES } from '../Styles/OfertaStyles';
import { OFERTA_DATA } from '../Model/OfertaModel';
import OfertaCard from './SubComponents/OfertaCard';
import FAQItem from './SubComponents/FAQItem';
import OfertaCommitment from './SubComponents/OfertaCommitment';
const OfertaView: React.FC = () => {
    const styles = OFERTA_STYLES;
    const data = OFERTA_DATA;
    return (
        <div id="oferta">
            <section className={styles.section}>
                <div className={styles.container}>
                    <div className={styles.grid}>
                        <div>
                            <h2 className={styles.title}>Oferta Educativa</h2>
                            <div className={styles.offer_list}>
                                {data.items.map((item) => (
                                    <OfertaCard 
                                        key={item.id} 
                                        id={item.id} 
                                        title={item.title} 
                                        desc={item.desc} 
                                    />
                                ))}
                            </div>
                        </div>
                        <div>
                            <h2 className={styles.title}>Preguntas Frecuentes</h2>
                            <div className={styles.faq_list}>
                                {data.faq.map((item, index) => (
                                    <FAQItem 
                                        key={index} 
                                        question={item.question} 
                                        answer={item.answer} 
                                    />
                                ))}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <OfertaCommitment 
                title={data.commitment.title}
                text={data.commitment.text}
                sub={data.commitment.sub}
            />
        </div>
    );
};
export default OfertaView;
