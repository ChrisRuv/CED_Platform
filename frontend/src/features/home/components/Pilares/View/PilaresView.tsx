"use client";
import React from 'react';
import { PILARES_STYLES } from '../Styles/PilaresStyles';
import { PILARES_DATA } from '../Model/PilaresModel';
import PilarItem from './SubComponents/PilarItem';
import PilaresHeader from './SubComponents/PilaresHeader';
import PilaresImage from './SubComponents/PilaresImage';

const PilaresView: React.FC = () => {
    const pilaresStyles = PILARES_STYLES;
    const pilaresData = PILARES_DATA;
    return (
        <section id="modelo" className={pilaresStyles.section}>
            <div className={pilaresStyles.container}>
                <div className={pilaresStyles.grid}>
                    <div className={pilaresStyles.content_wrap}>
                        <PilaresHeader />
                        <div className={pilaresStyles.list_wrap}>
                            {pilaresData.items.map((item, index) => (
                                <PilarItem 
                                    key={index}
                                    index={index}
                                    title={item.title}
                                    desc={item.desc}
                                />
                            ))}
                        </div>
                    </div>
                    <PilaresImage />
                </div>
            </div>
        </section>
    );
};
export default PilaresView;
