<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nova — Tailwind Main Page</title>
  <meta name="description" content="A free, production‑ready Tailwind CSS homepage template." />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#eff6ff',
              100: '#dbeafe',
              200: '#bfdbfe',
              300: '#93c5fd',
              400: '#60a5fa',
              500: '#3b82f6',
              600: '#2563eb',
              700: '#1d4ed8',
              800: '#1e40af',
              900: '#1e3a8a'
            }
          },
          boxShadow: {
            soft: '0 10px 30px -10px rgba(2, 6, 23, 0.25)'
          },
          backgroundImage: {
            grid: 'radial-gradient(circle at 1px 1px, rgba(0,0,0,.06) 1px, transparent 0)'
          }
        }
      },
      darkMode: 'class'
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    html { font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji"; }
    .glass { backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
  </style>
</head>
<body class="bg-white text-slate-900 dark:bg-slate-950 dark:text-slate-100">
  <!-- Top bar -->
  <div class="bg-gradient-to-r from-brand-600 to-brand-800 text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex items-center justify-between">
      <p class="font-medium">✨ Fresh launch discount — 20% off this month.</p>
      <a href="#pricing" class="underline underline-offset-2 hover:opacity-90">See pricing</a>
    </div>
  </div>

  <!-- Header -->
  <header class="sticky top-0 z-40 bg-white/70 dark:bg-slate-950/60 glass border-b border-slate-200/60 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16">
        <a href="#" class="flex items-center gap-2 font-extrabold text-lg tracking-tight">
          <span class="inline-flex h-8 w-8 rounded-xl bg-brand-600 text-white items-center justify-center shadow-soft">N</span>
          Nova
        </a>
        <nav class="hidden md:flex items-center gap-8 text-sm">
          <a href="#features" class="hover:text-brand-600">Features</a>
          <a href="#showcase" class="hover:text-brand-600">Showcase</a>
          <a href="#pricing" class="hover:text-brand-600">Pricing</a>
          <a href="#faq" class="hover:text-brand-600">FAQ</a>
        </nav>
        <div class="flex items-center gap-3">
          <button id="themeToggle" class="p-2 rounded-xl border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-900" aria-label="Toggle dark mode">
            <svg id="sun" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v2m0 14v2m7-7h2M3 12H1m15.364-6.364l1.414 1.414M6.222 17.778l-1.414 1.414m0-12.728l1.414 1.414m10.606 10.606l1.414-1.414M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
            <svg id="moon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:hidden" viewBox="0 0 24 24" fill="currentColor"><path d="M21.752 15.002A9.718 9.718 0 0112 21.75 9.75 9.75 0 1113.001 2.25a.75.75 0 01.154 1.482A8.25 8.25 0 1019.268 14.85a.75.75 0 011.482.153z"/></svg>
          </button>
          <a href="#pricing" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 text-white dark:bg-white dark:text-slate-900 hover:opacity-90 shadow-soft text-sm font-semibold">Get Started</a>
          <button class="md:hidden p-2" id="openMenu" aria-label="Open menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Nav -->
    <div id="mobileMenu" class="md:hidden hidden border-t border-slate-200 dark:border-slate-800 bg-white/90 dark:bg-slate-950/90 glass">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 grid gap-4 text-sm">
        <a href="#features" class="hover:text-brand-600">Features</a>
        <a href="#showcase" class="hover:text-brand-600">Showcase</a>
        <a href="#pricing" class="hover:text-brand-600">Pricing</a>
        <a href="#faq" class="hover:text-brand-600">FAQ</a>
      </div>
    </div>
  </header>

  <!-- Hero -->
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 -z-10 bg-grid bg-[size:20px_20px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-20 sm:py-28">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <div class="inline-flex items-center gap-2 text-xs px-3 py-1 rounded-full bg-brand-50 text-brand-700 ring-1 ring-brand-200">New in 2.0 • Faster builds</div>
          <h1 class="mt-5 text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight">Build a beautiful <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-500 to-brand-700">main page</span> in minutes.</h1>
          <p class="mt-5 text-slate-600 dark:text-slate-300 text-lg">Nova ships with sections you actually need: features, screenshots, pricing, testimonials, and FAQ. Copy‑paste and ship.</p>
          <div class="mt-8 flex flex-col sm:flex-row gap-3">
            <a href="#pricing" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-brand-600 text-white hover:bg-brand-700 shadow-soft font-semibold">Start for Free</a>
            <a href="#showcase" class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-900 font-semibold">See it in action</a>
          </div>
          <div class="mt-6 flex items-center gap-6 text-sm text-slate-500 dark:text-slate-400">
            <div class="flex items-center gap-2"><span class="inline-block h-2.5 w-2.5 rounded-full bg-green-500"></span> No signup required</div>
            <div>MIT License</div>
          </div>
        </div>
        <div class="relative">
          <div class="relative rounded-2xl border border-slate-200 dark:border-slate-800 shadow-soft overflow-hidden bg-white dark:bg-slate-900">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop" alt="App screenshot" class="w-full h-80 object-cover"/>
            <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent text-white flex items-center justify-between">
              <p class="font-semibold">Lightning-fast homepage</p>
              <a href="#showcase" class="text-sm underline underline-offset-2">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Logos -->
  <section class="py-10 border-y border-slate-200/70 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <p class="text-center text-sm text-slate-500 mb-6">Trusted by indie devs & small teams</p>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 opacity-70">
        <div class="h-10 bg-slate-200/50 dark:bg-slate-800 rounded"></div>
        <div class="h-10 bg-slate-200/50 dark:bg-slate-800 rounded"></div>
        <div class="h-10 bg-slate-200/50 dark:bg-slate-800 rounded"></div>
        <div class="h-10 bg-slate-200/50 dark:bg-slate-800 rounded"></div>
        <div class="h-10 bg-slate-200/50 dark:bg-slate-800 rounded"></div>
        <div class="h-10 bg-slate-200/50 dark:bg-slate-800 rounded"></div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center max-w-2xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Everything you need, nothing you don't</h2>
        <p class="mt-4 text-slate-600 dark:text-slate-300">Drop-in sections built with accessible HTML and Tailwind. Responsive and dark‑mode ready out of the box.</p>
      </div>
      <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a1 1 0 011 1v2.382a1 1 0 01-.553.894l-2.894 1.447a1 1 0 00-.553.894V14.5a2.5 2.5 0 101 0V9.618a1 1 0 01.553-.894l2.894-1.447A1 1 0 0013 6.382V3a1 1 0 011-1z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">Copy‑paste sections</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Hero, features, screenshots, testimonials, pricing, and FAQ — wired up and responsive.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4V4zm0 7h16v2H4v-2zm0 7h16v2H4v-2z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">Accessible by default</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Semantic markup, focus states, and adequate contrast baked in.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">Polished details</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Soft shadows, glassy headers, and delightful hovers — without heavy JS.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3a2 2 0 00-2 2v5h2V5h5V3H5zm9 0v2h5v5h2V5a2 2 0 00-2-2h-5zM3 14v5a2 2 0 002 2h5v-2H5v-5H3zm18 0h-2v5h-5v2h5a2 2 0 002-2v-5z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">Fully responsive</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Looks great on phones, tablets, and wide desktops.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 6a1 1 0 011-1h9l3 3h4a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V6z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">MIT licensed</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Use it for personal or commercial projects with attribution optional.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 6a6 6 0 100 12 6 6 0 000-12z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">Dark mode</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Toggle theme instantly; remembers your preference.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Showcase / Screenshot -->
  <section id="showcase" class="py-20 bg-slate-50 dark:bg-slate-900/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid lg:grid-cols-2 gap-10 items-center">
        <div>
          <h2 class="text-3xl font-extrabold tracking-tight">Show your product</h2>
          <p class="mt-4 text-slate-600 dark:text-slate-300">Swap this image with a screenshot, a short demo GIF, or a gallery. The card includes a caption bar and supports any media.</p>
          <ul class="mt-6 space-y-3 text-slate-600 dark:text-slate-300">
            <li class="flex gap-3"><span class="mt-1 h-5 w-5 rounded-full bg-brand-600 text-white inline-flex items-center justify-center text-xs">1</span> Drag‑drop sections in any order.</li>
            <li class="flex gap-3"><span class="mt-1 h-5 w-5 rounded-full bg-brand-600 text-white inline-flex items-center justify-center text-xs">2</span> Keep the DOM light — no frameworks required.</li>
            <li class="flex gap-3"><span class="mt-1 h-5 w-5 rounded-full bg-brand-600 text-white inline-flex items-center justify-center text-xs">3</span> Works with any backend (Laravel, Rails, Node, etc.).</li>
          </ul>
        </div>
        <div class="relative">
          <div class="relative rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-soft bg-white dark:bg-slate-900">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1600&auto=format&fit=crop" alt="Dashboard screenshot" class="w-full h-96 object-cover"/>
            <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent text-white flex items-center justify-between">
              <p class="font-medium">Dashboard overview</p>
              <a href="#" class="text-sm underline underline-offset-2">Read docs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center max-w-2xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Simple pricing</h2>
        <p class="mt-4 text-slate-600 dark:text-slate-300">Start free. Upgrade when you grow. No hidden fees.</p>
      </div>
      <div class="mt-12 grid md:grid-cols-3 gap-6">
        <!-- Free -->
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <h3 class="font-semibold text-lg">Free</h3>
          <p class="mt-2 text-sm text-slate-500">For hobby projects</p>
          <div class="mt-6 text-4xl font-extrabold">$0</div>
          <ul class="mt-6 space-y-3 text-sm text-slate-600 dark:text-slate-300">
            <li>All core sections</li>
            <li>MIT license</li>
            <li>Community support</li>
          </ul>
          <a href="#" class="mt-6 inline-flex w-full justify-center px-4 py-2.5 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-900 font-semibold">Download</a>
        </div>
        <!-- Pro -->
        <div class="p-6 rounded-2xl border-2 border-brand-600 bg-gradient-to-b from-white to-brand-50 dark:from-slate-900 dark:to-slate-900/60 shadow-soft">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-100 text-brand-800 text-xs font-semibold">Most Popular</div>
          <h3 class="mt-3 font-semibold text-lg">Pro</h3>
          <p class="mt-2 text-sm text-slate-500">For startups</p>
          <div class="mt-6 text-4xl font-extrabold">$39<span class="text-base font-medium text-slate-500">/mo</span></div>
          <ul class="mt-6 space-y-3 text-sm text-slate-600 dark:text-slate-300">
            <li>Everything in Free</li>
            <li>Additional sections & layouts</li>
            <li>Email support</li>
          </ul>
          <a href="#" class="mt-6 inline-flex w-full justify-center px-4 py-2.5 rounded-xl bg-brand-600 text-white hover:bg-brand-700 font-semibold">Get Pro</a>
        </div>
        <!-- Team -->
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <h3 class="font-semibold text-lg">Team</h3>
          <p class="mt-2 text-sm text-slate-500">For small teams</p>
          <div class="mt-6 text-4xl font-extrabold">$99<span class="text-base font-medium text-slate-500">/mo</span></div>
          <ul class="mt-6 space-y-3 text-sm text-slate-600 dark:text-slate-300">
            <li>Priority support</li>
            <li>Unlimited projects</li>
            <li>Design files</li>
          </ul>
          <a href="#" class="mt-6 inline-flex w-full justify-center px-4 py-2.5 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-900 font-semibold">Contact sales</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-20 bg-slate-50 dark:bg-slate-900/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid md:grid-cols-3 gap-6">
        <figure class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <blockquote class="text-slate-700 dark:text-slate-200">“Swapped it in for our old homepage over a weekend. Clean, fast, and easy.”</blockquote>
          <figcaption class="mt-4 text-sm text-slate-500">— Jordan, Indie dev</figcaption>
        </figure>
        <figure class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <blockquote class="text-slate-700 dark:text-slate-200">“Love the defaults. I barely touched the CSS.”</blockquote>
          <figcaption class="mt-4 text-sm text-slate-500">— Casey, Product designer</figcaption>
        </figure>
        <figure class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <blockquote class="text-slate-700 dark:text-slate-200">“Great starting point for our SaaS marketing site.”</blockquote>
          <figcaption class="mt-4 text-sm text-slate-500">— Taylor, Founder</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
      <h2 class="text-3xl font-extrabold tracking-tight text-center">Frequently asked questions</h2>
      <div class="mt-10 divide-y divide-slate-200 dark:divide-slate-800 rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden">
        <details class="group p-6 open:bg-white open:dark:bg-slate-900">
          <summary class="flex cursor-pointer items-center justify-between font-semibold">Can I use this commercially?
            <span class="transition-transform group-open:rotate-180">▼</span></summary>
          <p class="mt-3 text-slate-600 dark:text-slate-300">Yes. This template is MIT licensed. Attribution appreciated but not required.</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer items-center justify-between font-semibold">Does it support dark mode?
            <span class="transition-transform group-open:rotate-180">▼</span></summary>
          <p class="mt-3 text-slate-600 dark:text-slate-300">Yep! Click the moon icon in the header. It persists via localStorage.</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer items-center justify-between font-semibold">Can I use it with Laravel?
            <span class="transition-transform group-open:rotate-180">▼</span></summary>
          <p class="mt-3 text-slate-600 dark:text-slate-300">Absolutely. It's just HTML. Drop it into your Blade layout and extract sections into components if you like.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="rounded-2xl border border-slate-200 dark:border-slate-800 p-8 sm:p-10 bg-gradient-to-br from-brand-50 to-white dark:from-slate-900 dark:to-slate-900 shadow-soft flex flex-col sm:flex-row items-center justify-between gap-6">
        <div>
          <h3 class="text-2xl font-extrabold tracking-tight">Ready to ship your homepage?</h3>
          <p class="text-slate-600 dark:text-slate-300 mt-2">Grab Nova, plug in your content, and go live today.</p>
        </div>
        <a href="#pricing" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-brand-600 text-white hover:bg-brand-700 font-semibold">Get started</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-10 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <a class="font-extrabold tracking-tight" href="#">Nova</a>
        <nav class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-600 dark:text-slate-300">
          <a href="#features" class="hover:text-brand-600">Features</a>
          <a href="#pricing" class="hover:text-brand-600">Pricing</a>
          <a href="#faq" class="hover:text-brand-600">FAQ</a>
          <a href="#" class="hover:text-brand-600">Terms</a>
          <a href="#" class="hover:text-brand-600">Privacy</a>
        </nav>
        <p class="text-xs text-slate-500">© <span id="year"></span> Nova. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    // Theme toggle
    const root = document.documentElement;
    const toggle = document.getElementById('themeToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const openMenu = document.getElementById('openMenu');

    function setTheme(dark) {
      if (dark) {
        root.classList.add('dark');
        localStorage.setItem('theme', 'dark');
      } else {
        root.classList.remove('dark');
        localStorage.setItem('theme', 'light');
      }
    }

    // Init
    const saved = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(saved ? saved === 'dark' : prefersDark);

    toggle.addEventListener('click', () => {
      setTheme(!root.classList.contains('dark'));
    });

    // Mobile menu
    openMenu.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Year
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
