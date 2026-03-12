export const NOSOTROS_STYLES = {
    section: "py-32 bg-white relative",
    container: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8",
    header: "flex flex-col items-center text-center mb-24 space-y-6",
    label: "text-ced-blue font-black text-xs uppercase tracking-[0.4em] bg-ced-blue/5 px-4 py-2 rounded-lg",
    title: "text-5xl md:text-7xl font-black text-slate-900 tracking-tighter",
    divider: "w-24 h-2 bg-ced-accent rounded-full",
    grid_cards: "grid grid-cols-1 md:grid-cols-3 gap-10",
    card: "group bg-slate-50 p-12 rounded-[3.5rem] hover:bg-white hover:shadow-[0_40px_80px_rgba(0,0,0,0.08)] transition-all duration-500 border border-slate-100 flex flex-col items-center text-center",
    card_icon_wrap: (color: string) => `w-20 h-20 rounded-3xl bg-gradient-to-br ${color} flex items-center justify-center text-white mb-10 shadow-xl group-hover:scale-110 transition-transform`,
    card_title: "text-3xl font-black text-slate-900 mb-6",
    card_desc: "text-slate-500 leading-relaxed font-semibold italic",
    grid_audience: "mt-20 grid grid-cols-1 md:grid-cols-3 gap-12 pt-20 border-t border-slate-100",
    audience_item: "flex gap-6 items-start",
    audience_icon_wrap: "w-16 h-16 bg-white rounded-2xl shadow-xl flex items-center justify-center shrink-0 border border-slate-50",
    audience_title: "text-xl font-bold text-slate-900 mb-2",
    audience_desc: "text-slate-500 text-sm leading-relaxed"
};
