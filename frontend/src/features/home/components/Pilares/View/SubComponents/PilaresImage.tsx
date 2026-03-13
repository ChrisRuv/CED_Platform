"use client";
import React from 'react';
import Image from "next/image";
import { PILARES_STYLES } from '../../Styles/PilaresStyles';
import { PILARES_DATA } from '../../Model/PilaresModel';
const PilaresImage: React.FC = () => {
    const styles = PILARES_STYLES;
    const data = PILARES_DATA;
    return (
        <div className={styles.image_wrap}>
            <div className={styles.image_container}>
                <div className="relative w-full h-[250px] md:h-[450px]">
                    <Image
                        src={data.image}
                        alt="Modelo CED"
                        fill
                        className={styles.image}
                        sizes="100vw"
                    />
                    <div className={styles.image_overlay} />
                    <div className={styles.image_badge}>
                        <p className={styles.image_quote}>"{data.quote}"</p>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default PilaresImage;
