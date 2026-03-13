"use client";
import React from 'react';
import NosotrosPhilosophy from './SubComponents/NosotrosPhilosophy';
import NosotrosAudience from './SubComponents/NosotrosAudience';
const NosotrosView: React.FC = () => {
    return (
        <div id="nosotros">
            <NosotrosPhilosophy />
            <NosotrosAudience />
        </div>
    );
};
export default NosotrosView;
