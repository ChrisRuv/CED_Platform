import Image from "next/image";
import { Lock, Mail, ArrowRight, Github, Chrome } from "lucide-react";

export default function Home() {
    return (
        <main className="flex min-h-screen flex-col lg:flex-row bg-white">
            {/* Left Side: Visual/Branding (65%) */}
            <section className="relative w-full lg:w-[65%] h-[40vh] lg:h-screen overflow-hidden bg-slate-900 border-r border-slate-200">
                <Image
                    src="/images/ced-hero.png"
                    alt="CED Platform"
                    fill
                    className="object-cover opacity-60 brightness-75 scale-105 hover:scale-100 transition-transform duration-[10s] ease-out"
                    priority
                />
                <div className="absolute inset-0 bg-gradient-to-tr from-slate-950/80 via-transparent to-transparent" />

                <div className="absolute bottom-12 left-12 right-12 text-white">
                    <div className="flex items-center gap-2 mb-6">
                        <div className="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center font-bold text-2xl shadow-lg ring-4 ring-blue-500/20">C</div>
                        <h2 className="text-3xl font-bold tracking-tighter uppercase">CED PLATFORM</h2>
                    </div>
                    <h1 className="text-5xl lg:text-8xl font-black mb-6 leading-tight tracking-tighter">
                        THE HUB OF <br />
                        <span className="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">INTELLIGENCE.</span>
                    </h1>
                    <p className="text-xl text-slate-300 max-w-lg leading-relaxed font-medium">
                        Join the next generation of collaborative learning. Experience a platform built for future leaders.
                    </p>
                </div>
            </section>

            {/* Right Side: Login Form (35%) */}
            <section className="w-full lg:w-[35%] flex items-center justify-center p-8 lg:p-16 bg-slate-50">
                <div className="w-full max-w-sm">
                    <div className="mb-10">
                        <div className="lg:hidden flex items-center gap-2 mb-8">
                            <div className="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center font-bold text-white text-lg">C</div>
                            <span className="font-bold tracking-tight text-slate-900">CED PLATFORM</span>
                        </div>
                        <h2 className="text-3xl font-bold text-slate-900 mb-2">Welcome Back</h2>
                        <p className="text-slate-500">Sign in to access your dashboard.</p>
                    </div>

                    <form className="space-y-6">
                        <div className="space-y-2">
                            <label className="text-xs font-bold uppercase tracking-wider text-slate-500 ml-1">Email Address</label>
                            <div className="relative group">
                                <Mail className="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-600 transition-colors" size={18} />
                                <input
                                    type="email"
                                    placeholder="name@example.com"
                                    className="w-full pl-12 pr-4 py-4 bg-white border border-slate-200 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-600 transition-all shadow-sm font-medium"
                                />
                            </div>
                        </div>

                        <div className="space-y-2">
                            <div className="flex justify-between items-center ml-1">
                                <label className="text-xs font-bold uppercase tracking-wider text-slate-500">Password</label>
                                <a href="#" className="text-xs font-bold text-blue-600 hover:text-blue-700">Forgot?</a>
                            </div>
                            <div className="relative group">
                                <Lock className="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-600 transition-colors" size={18} />
                                <input
                                    type="password"
                                    placeholder="••••••••"
                                    className="w-full pl-12 pr-4 py-4 bg-white border border-slate-200 rounded-2xl outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-600 transition-all shadow-sm font-medium"
                                />
                            </div>
                        </div>

                        <div className="flex items-center gap-3 ml-1">
                            <input type="checkbox" id="remember" className="w-5 h-5 rounded-lg border-slate-300 text-blue-600 focus:ring-blue-500 transition-all cursor-pointer" />
                            <label htmlFor="remember" className="text-sm text-slate-600 cursor-pointer font-medium">Keep me signed in</label>
                        </div>

                        <button className="w-full py-4 bg-blue-600 text-white rounded-2xl font-bold hover:bg-blue-700 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-xl shadow-blue-200 group">
                            Sign In <ArrowRight size={20} className="group-hover:translate-x-1 transition-transform" />
                        </button>
                    </form>

                    <div className="relative my-10">
                        <div className="absolute inset-0 flex items-center">
                            <span className="w-full border-t border-slate-200"></span>
                        </div>
                        <div className="relative flex justify-center text-[10px] uppercase tracking-widest font-bold">
                            <span className="bg-slate-50 px-4 text-slate-400">Or continue with</span>
                        </div>
                    </div>

                    <div className="grid grid-cols-2 gap-4">
                        <button className="flex items-center justify-center gap-3 py-3 border border-slate-200 rounded-2xl hover:bg-white hover:border-slate-300 transition-all text-slate-700 font-bold text-sm shadow-sm group">
                            <Chrome size={18} className="group-hover:scale-110 transition-transform" /> Google
                        </button>
                        <button className="flex items-center justify-center gap-3 py-3 border border-slate-200 rounded-2xl hover:bg-white hover:border-slate-300 transition-all text-slate-700 font-bold text-sm shadow-sm group">
                            <Github size={18} className="group-hover:scale-110 transition-transform" /> Github
                        </button>
                    </div>

                    <div className="mt-12 text-center">
                        <p className="text-slate-500 text-sm font-medium">
                            New here? <a href="#" className="text-blue-600 font-bold hover:underline">Create an account</a>
                        </p>
                    </div>
                </div>
            </section>
        </main>
    );
}
