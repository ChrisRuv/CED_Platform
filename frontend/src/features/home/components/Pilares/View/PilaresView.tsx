"use client";
import React from 'react';
import { PILARES_STYLES } from '../Styles/PilaresStyles';
import { PILARES_DATA } from '../Model/PilaresModel';
import PilarItem from './SubComponents/PilarItem';
import PilaresHeader from './SubComponents/PilaresHeader';
import PilaresImage from './SubComponents/PilaresImage';

const PilaresView: React.FC = () => {
    const styles = PILARES_STYLES;
    const data = PILARES_DATA;
    return (
        <section id="modelo" className={styles.section}>
            <div className={styles.container}>
                <PilaresHeader />
                <div className={styles.list_wrap}>
                    {data.items.map((item, index) => (
                        <PilarItem 
                            key={index}
                            {...item}
                            index={index + 1}
                        />
                    ))}
                </div>
                <PilaresImage />
            </div>
        </section>
    );
};
export default PilaresView;
