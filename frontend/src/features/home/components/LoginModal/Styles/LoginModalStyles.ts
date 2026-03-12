export const LOGIN_MODAL_STYLES = {
    overlay: "fixed inset-0 z-[100] flex items-center justify-center p-4",
    backdrop: "absolute inset-0 bg-ced-gray/95 backdrop-blur-2xl",
    modal: "relative bg-white w-full max-w-lg rounded-[4rem] overflow-hidden shadow-[0_50px_100px_rgba(0,0,0,0.5)] transform animate-in slide-in-from-bottom-2 duration-500",
    close_btn: "absolute top-8 right-8 w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 hover:bg-blue-600 hover:text-white transition-all z-10",
    content: "p-12 md:p-16 space-y-12",
    header: "text-center space-y-4",
    icon_wrap: "inline-flex items-center justify-center w-20 h-20 bg-blue-50 rounded-3xl text-blue-600 mb-4",
    title: "text-4xl font-black text-slate-900 tracking-tighter",
    welcome: "text-slate-500 font-bold uppercase text-[10px] tracking-[0.2em]",
    form: "space-y-6",
    field_group: "space-y-2",
    label: "text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1",
    input: "w-full px-8 py-5 bg-slate-50 border border-slate-100 rounded-[2rem] focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all font-bold",
    forgot_link: "text-[10px] font-black uppercase tracking-[0.2em] text-blue-600",
    submit_btn: "w-full py-6 bg-ced-blue text-white rounded-[2rem] font-black uppercase tracking-widest text-sm hover:bg-ced-light transition-all shadow-2xl shadow-ced-blue/30 transform hover:scale-[1.02] mt-4",
    footer: "pt-8 border-t border-slate-100 flex justify-center gap-10 opacity-30",
    footer_text: "text-[10px] font-black"
};
