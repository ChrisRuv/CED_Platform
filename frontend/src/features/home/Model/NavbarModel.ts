export interface NavbarComponentContract {
    viewModel: {
        scrolled: boolean;
        isMenuOpen: boolean;
        toggleMenu: () => void;
        closeMenu: () => void;
        openLoginModal: () => void;
    };
}
