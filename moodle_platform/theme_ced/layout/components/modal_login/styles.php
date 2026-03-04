<?php
$STYLES = [
    // Overlay & Backdrop
    'overlay' => 'fixed inset-0 z-[9999] hidden flex items-center justify-center p-4',
    'backdrop' => 'absolute inset-0 bg-ced-blue/60 backdrop-blur-md',

    // Modal Container
    'modal' => 'relative w-full max-w-md rounded-2xl shadow-2xl overflow-hidden animate-fade-in border border-white/20',
    'close_btn' => 'absolute top-4 right-4 text-gray-400 hover:text-ced-accent transition-colors z-10 w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100',
    'close_icon' => 'w-5 h-5',

    // Header
    'header' => 'bg-gradient-to-r from-ced-blue to-ced-light p-8 text-center text-white relative overflow-hidden',
    'header_bg' => 'absolute inset-0 opacity-20',
    'header_bg_img' => 'w-full h-full',
    'header_content' => 'relative z-10 flex flex-col items-center',
    'logo' => 'h-20 w-auto mb-2 drop-shadow-lg',
    'platform_text' => 'text-white font-medium tracking-wide text-sm drop-shadow-md',

    // Form
    'form_wrap' => 'p-8',
    'fields' => 'space-y-5',
    'field_group' => 'relative',
    'label' => 'block text-sm font-semibold text-gray-200 mb-1',
    'icon_wrap' => 'absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400',
    'icon' => 'h-5 w-5',
    'input' => 'block w-full pl-10 pr-3 py-3 border border-gray-700 rounded-lg focus:ring-ced-accent focus:border-ced-accent sm:text-sm bg-[#111111] text-white',

    // Actions
    'actions_row' => 'flex items-center justify-between mt-4',
    'remember_wrap' => 'flex items-center',
    'checkbox' => 'h-4 w-4 text-ced-blue focus:ring-ced-accent border-gray-700 rounded',
    'checkbox_label' => 'ml-2 block text-sm text-gray-300',
    'forgot_wrap' => 'text-sm',
    'forgot_link' => 'font-medium text-ced-accent hover:text-ced-blue transition-colors',

    // Submit
    'submit_wrap' => 'pt-4',
    'submit_btn' => 'w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-ced-blue hover:bg-ced-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ced-accent transition-colors',

    // Footer
    'footer' => 'bg-[#111111] px-8 py-4 border-t border-gray-800 flex justify-between items-center text-xs text-white',
    'footer_brand' => 'font-bold tracking-tighter text-gray-400',
    'footer_accent' => 'text-ced-accent',
];
