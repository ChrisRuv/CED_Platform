#!/usr/bin/env php
<?php
$path = __DIR__ . '/theme_ced/layout/frontpage.php';

if (!file_exists($path)) {
    fwrite(STDERR, "Error: No se encontró el archivo: $path\n");
    exit(1);
}

$content = file_get_contents($path);
$original = $content;
$colorReplacements = [
    "blue: '#0a2342'" => "blue: '#000000'",
    "light: '#1e4d8c'" => "light: '#111111'",
    "accent: '#00a8e8'" => "accent: '#00ff00'",
    "gray: '#f4f6f8'" => "gray: '#1a1a1a'",
];
foreach ($colorReplacements as $old => $new) {
    $content = str_replace($old, $new, $content);
}

$regexReplacements = [
    '/\bbg-white\b/' => 'bg-[#0a0a0a]',
    '/\btext-gray-800\b/' => 'text-gray-100',
    '/\btext-gray-700\b/' => 'text-gray-200',
    '/\btext-gray-600\b/' => 'text-gray-300',
    '/\bbg-gray-50\b/' => 'bg-[#111111]',
    '/\bborder-gray-300\b/' => 'border-gray-700',
    '/\bborder-gray-200\b/' => 'border-gray-800',
    '/\btext-blue-100\b/' => 'text-gray-300',
    '/\btext-blue-200\b/' => 'text-gray-400',
    '/\btext-blue-300\b/' => 'text-gray-500',
    '/border-blue-800/' => 'border-gray-800',
];
foreach ($regexReplacements as $pattern => $replacement) {
    $content = preg_replace($pattern, $replacement, $content);
}

$navbarOld = '<span class="font-heading font-bold text-3xl text-ced-blue tracking-tighter">COLEGIO <span
                            class="text-ced-accent">CED</span></span>';
$navbarNew = '<img src="<?php echo $OUTPUT->image_url(\'logo\', \'theme_ced\'); ?>" alt="Colegio CED Logo" class="h-12 w-auto object-contain">';
$content = str_replace($navbarOld, $navbarNew, $content);
$platOld = 'text-[1.1rem] tracking-[2px] shadow-sm pointer-events-none" style="transform: rotate(45deg); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); font-family: \'Montserrat\', sans-serif;">PLATAFORMA';
$platNew = 'text-[0.7rem] tracking-[3px] shadow-sm pointer-events-none" style="transform: rotate(45deg); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); font-family: \'Montserrat\', sans-serif;">PLATAFORMA';
$content = str_replace($platOld, $platNew, $content);

$content = str_replace(
    'absolute top-[35px] right-[-25px] w-[200px]',
    'absolute top-[35px] right-[-40px] w-[200px]',
    $content
);
$modalOld = '<span class="font-heading font-bold text-3xl tracking-tighter block mb-1">COLEGIO <span
                            class="text-ced-accent">CED</span></span>
                    <p class="text-blue-200 text-sm">PLATAFORMA EDUCATIVA</p>';
$modalNew = '<img src="<?php echo $OUTPUT->image_url(\'logo\', \'theme_ced\'); ?>" alt="Colegio CED Logo" class="h-24 w-auto mx-auto mb-2 object-contain">
                    <p class="text-ced-accent font-bold text-sm tracking-widest drop-shadow-md">PLATAFORMA EDUCATIVA</p>';
$content = str_replace($modalOld, $modalNew, $content);
$atletasHtml = '    <!-- Atletas Section -->
    <section id="atletas" class="py-20 bg-ced-gray clip-diagonal-reverse">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-ced-accent font-bold tracking-wider uppercase">Nuestros Campeones</span>
                <h2 class="text-3xl md:text-4xl font-bold text-ced-blue mt-2">Atletas Destacados</h2>
                <div class="w-24 h-1 bg-ced-accent mx-auto mt-4"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">';

for ($i = 1; $i <= 4; $i++) {
    $atletasHtml .= '
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover-card border-none bg-black">
                    <img src="https://via.placeholder.com/400x500/111111/00ff00?text=Atleta+' . $i . '" alt="Atleta" class="w-full h-80 object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6 text-white">
                        <h3 class="font-bold text-xl text-ced-accent">Nombre del Atleta</h3>
                        <p class="text-sm text-gray-300">Disciplina</p>
                    </div>
                </div>';
}

$atletasHtml .= '
            </div>
        </div>
    </section>

    <!-- Offerings & FAQ -->';

$content = str_replace('    <!-- Offerings & FAQ -->', $atletasHtml, $content);
$content = str_replace(
    '<a href="#pilares" class="nav-link font-heading font-semibold text-ced-blue">Pilares</a>',
    '<a href="#pilares" class="nav-link font-heading font-semibold text-ced-blue">Pilares</a>
                    <a href="#atletas" class="nav-link font-heading font-semibold text-ced-blue">Atletas</a>',
    $content
);
$content = str_replace(
    '<a href="#pilares" class="block text-ced-blue font-semibold">Pilares</a>',
    '<a href="#pilares" class="block text-ced-blue font-semibold">Pilares</a>
                <a href="#atletas" class="block text-ced-blue font-semibold">Atletas</a>',
    $content
);
if ($content === $original) {
    echo "⚠️  No se detectaron cambios. Puede que el tema ya estuviera actualizado.\n";
    exit(0);
}

file_put_contents($path, $content);
echo "✅ Tema actualizado correctamente en: $path\n";
