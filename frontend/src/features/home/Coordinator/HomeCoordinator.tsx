"use client";
import React from 'react';
import NavbarView from '../components/Navbar/View/NavbarView';
import HeroView from '../components/Hero/View/HeroView';
import NosotrosView from '../components/Nosotros/View/NosotrosView';
import PilaresView from '../components/Pilares/View/PilaresView';
import AtletasView from '../components/Atletas/View/AtletasView';
import OfertaView from '../components/Oferta/View/OfertaView';
import ContactoView from '../components/Contacto/View/ContactoView';
import FooterView from '../components/Footer/View/FooterView';
import LoginModalView from '../components/LoginModal/View/LoginModalView';
import { useHomeViewModel } from '../ViewModel/useHomeViewModel';
const HomeCoordinator: React.FC = () => {
    const viewModel = useHomeViewModel();
    return (
        <div className="min-h-screen bg-[#020617] font-sans selection:bg-ced-blue selection:text-white antialiased">
            <NavbarView onOpenLogin={viewModel.openLoginModal} />
            <main>
                <HeroView />
                <NosotrosView />
                <PilaresView />
                <AtletasView />
                <OfertaView />
                <ContactoView />
            </main>
            <FooterView />
            {viewModel.isLoginModalOpen && (
                <LoginModalView onClose={viewModel.closeLoginModal} />
            )}
        </div>
    );
};
export default HomeCoordinator;
