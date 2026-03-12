export const NAVBAR_STYLES = {
    nav: (scrolled: boolean) => `fixed w-full z-50 top-0 transition-all duration-300 ${scrolled ? 'bg-ced-gray shadow-2xl py-2' : 'bg-transparent py-4'}`,
    container: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8",
    inner: "flex justify-between h-16 items-center",
    logo_wrap: "flex items-center gap-3 group cursor-pointer",
    logo_icon: "w-10 h-10 bg-ced-blue rounded-xl flex items-center justify-center font-bold text-white text-xl shadow-lg ring-4 ring-ced-blue/20 group-hover:rotate-12 transition-all",
    logo_text_wrap: "flex flex-col leading-none",
    logo_name: "font-black tracking-tighter text-white text-xl uppercase",
    logo_sub: "text-[10px] text-ced-accent font-bold tracking-[0.2em] uppercase",
    desktop_nav: "hidden md:flex space-x-10 items-center",
    link: "text-white/70 hover:text-white font-bold text-sm uppercase tracking-widest transition-colors relative group",
    link_accent: "absolute -bottom-1 left-0 w-0 h-0.5 bg-ced-accent transition-all group-hover:w-full",
    cta: "bg-ced-blue text-white px-7 py-3 rounded-full font-black text-xs uppercase tracking-widest hover:bg-ced-light transition-all transform hover:scale-105 shadow-xl shadow-ced-blue/30 flex items-center gap-2 ring-1 ring-white/20",
    mobile_btn: "md:hidden text-white cursor-pointer",
    mobile_menu: (isOpen: boolean) => `md:hidden absolute w-full bg-ced-gray border-t border-white/5 transition-all duration-300 ${isOpen ? 'opacity-100 visible h-auto py-8' : 'opacity-0 invisible h-0'}`,
    mobile_inner: "px-6 space-y-4",
    mobile_link: "block text-white font-bold text-lg uppercase tracking-widest py-2",
    mobile_cta: "w-full bg-ced-blue text-white py-4 rounded-xl font-black uppercase tracking-widest text-sm"
};
