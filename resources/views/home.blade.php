<!DOCTYPE html>
<html lang="ko" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Groupket — B2B blog service</title>
  <meta name="description" content="A free, production‑ready Tailwind CSS homepage template." />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
  <style>
    .glass { backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
  </style>
</head>
<body class="font-inter bg-white text-slate-900 dark:bg-slate-950 dark:text-slate-100">
  <!-- Top bar -->
  <div class="bg-gradient-to-r from-brand-600 to-brand-800 text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex items-center justify-between">
      <p class="font-medium">✨ Fresh launch discount — 20% off this month.</p>
      <a href="#pricing" class="underline underline-offset-2 hover:opacity-90">See pricing</a>
    </div>
  </div>

  <x-nav />
  <!-- Hero -->
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 -z-10 bg-grid bg-[size:20px_20px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-20 sm:py-28">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <div class="inline-flex items-center gap-2 text-xs px-3 py-1 rounded-full bg-brand-50 text-brand-700 ring-1 ring-brand-200">New in 2.0 • Faster builds</div>
          <h1 class="mt-5 text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight">고객의 신뢰는 <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-500 to-brand-700">자사 블로그</span>가 만듭니다.</h1>
          <p class="mt-5 text-slate-600 dark:text-slate-300 text-lg">안정적인 콘텐츠 발행, 구독자 관리, 데이터 분석, 고객 신뢰 확보가 회사 경쟁력이 됩니다.</p>
          <div class="mt-8 flex flex-col sm:flex-row gap-3">
            <a href="#pricing" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-brand-600 text-white hover:bg-brand-700 shadow-soft font-semibold">가격 알아보기</a>
            <a href="#showcase" class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-900 font-semibold">활용 방법 보기</a>
          </div>
          <!--div class="mt-6 flex items-center gap-6 text-sm text-slate-500 dark:text-slate-400">
            <div class="flex items-center gap-2"><span class="inline-block h-2.5 w-2.5 rounded-full bg-green-500"></span> 주중 09:00 ~ 18:00</div>
            <div>주말과 공휴일은 쉽니다.</div>
          </div-->
        </div>
        <div class="relative">
          <div class="relative rounded-2xl border border-slate-200 dark:border-slate-800 shadow-soft overflow-hidden bg-white dark:bg-slate-900">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop" alt="App screenshot" class="w-full h-80 object-cover"/>
            <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent text-white flex items-center justify-between">
              <p class="font-semibold">가볍고 빠른 블로그 페이지</p>
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
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">기업 블로그에 필요한 모든 기능을 담았습니다.</h2>
        <p class="mt-4 text-slate-600 dark:text-slate-300">Groupket 블로그 페이지 운영 경험으로 기업이 필요한 부분을 잡았습니다.<br>당신의 기업이 우리의 고민을 다시 하지 않도록 만들었습니다.</p>
      </div>
      <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a1 1 0 011 1v2.382a1 1 0 01-.553.894l-2.894 1.447a1 1 0 00-.553.894V14.5a2.5 2.5 0 101 0V9.618a1 1 0 01.553-.894l2.894-1.447A1 1 0 0013 6.382V3a1 1 0 011-1z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">안정적인 콘텐츠 발행</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Hero, features, screenshots, testimonials, pricing, and FAQ — wired up and responsive.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v2H4V4zm0 7h16v2H4v-2zm0 7h16v2H4v-2z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">구독자 관리</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Semantic markup, focus states, and adequate contrast baked in.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">데이터 분석</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Soft shadows, glassy headers, and delightful hovers — without heavy JS.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3a2 2 0 00-2 2v5h2V5h5V3H5zm9 0v2h5v5h2V5a2 2 0 00-2-2h-5zM3 14v5a2 2 0 002 2h5v-2H5v-5H3zm18 0h-2v5h-5v2h5a2 2 0 002-2v-5z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">고객 신뢰 확보</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Looks great on phones, tablets, and wide desktops.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 6a1 1 0 011-1h9l3 3h4a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V6z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">보안 강화</h3>
          <p class="mt-2 text-slate-600 dark:text-slate-300">Use it for personal or commercial projects with attribution optional.</p>
        </div>
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <div class="h-10 w-10 rounded-xl bg-brand-600 text-white flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 6a6 6 0 100 12 6 6 0 000-12z"/></svg>
          </div>
          <h3 class="font-semibold text-lg">뉴스레터</h3>
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
          <h2 class="text-3xl font-extrabold tracking-tight">회사 블로그는 고객 신뢰를 더하고 홍보가 됩니다.</h2>
          <p class="mt-4 text-slate-600 dark:text-slate-300">브랜드를 알리고, 고객과 소통하며, 장기적인 성장 기회를 만들어 보세요.</p>
          <ul class="mt-6 space-y-3 text-slate-600 dark:text-slate-300">
            <li class="flex items-start gap-3">
              <div class="flex-shrink-0 flex items-center justify-center h-5 w-5 rounded-full bg-brand-600 text-white text-xs font-semibold">
                1
              </div>
              <p class="-mt-0.5">블로그 글 작성 – 회사의 전문성과 소식을 정기적으로 콘텐츠로 기록합니다.</p>
            </li>

            <li class="flex items-start gap-3">
              <div class="flex-shrink-0 flex items-center justify-center h-5 w-5 rounded-full bg-brand-600 text-white text-xs font-semibold">
                2
              </div>
              <p class="-mt-0.5">소셜 미디어 공유 – 작성한 글을 X, Facebook 등 다양한 채널에 공유합니다.</p>
            </li>

            <li class="flex items-start gap-3">
              <div class="flex-shrink-0 flex items-center justify-center h-5 w-5 rounded-full bg-brand-600 text-white text-xs font-semibold">
                3
              </div>
              <p class="-mt-0.5">성과 확인 – 유저의 관심과 반응을 분석하여 콘텐츠 전략에 반영합니다.</p>
            </li>

          </ul>
        </div>
        <div class="relative">
          <div class="relative rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-soft bg-white dark:bg-slate-900">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1600&auto=format&fit=crop" alt="Dashboard screenshot" class="w-full h-96 object-cover"/>
            <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent text-white flex items-center justify-between">
              <p class="font-medium">블로그 개발은 저희에게 맡기세요</p>
              <!--p class="font-medium">Dashboard overview</p-->
              <!--a href="#" class="text-sm underline underline-offset-2">Read docs</a-->
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
        <p class="mt-4 text-slate-600 dark:text-slate-300">1년 계약이 가장 경제적입니다. 추가 비용은 발생하지 않습니다.</p>
      </div>
      <div class="mt-12 grid md:grid-cols-3 gap-6">
        <!-- Team -->
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <h3 class="font-semibold text-lg">6개월 계약</h3>
          <p class="mt-2 text-sm text-slate-500">For startups</p>
          <div class="mt-6 text-4xl font-extrabold">￦165,000<span class="text-base font-medium text-slate-500">/mo</span></div>
          <ul class="mt-6 space-y-3 text-sm text-slate-600 dark:text-slate-300">
            <li>초기 사업을 시작하는 기업에게 추천합니다.</li>
            <li>6개월간 사용해보시고 1년 계약하는 기업으로</li>
            <li>성장하길 응원하는 할인입니다.</li>
          </ul>
          <a href="{{route('payment', ['id' => 2])}}" class="mt-6 inline-flex w-full justify-center px-4 py-2.5 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-900 font-semibold">6개월 계약</a>
        </div>
        <!-- Pro -->
        <div class="p-6 rounded-2xl border-2 border-brand-600 bg-gradient-to-b from-white to-brand-50 dark:from-slate-900 dark:to-slate-900/60 shadow-soft">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-100 text-brand-800 text-xs font-semibold">Most Popular</div>
          <h3 class="mt-3 font-semibold text-lg">1년 계약</h3>
          <p class="mt-2 text-sm text-slate-500">For business</p>
          <div class="mt-6 text-4xl font-extrabold">￦110,000<span class="text-base font-medium text-slate-500">/mo</span></div>
          <ul class="mt-6 space-y-3 text-sm text-slate-600 dark:text-slate-300">
            <li>안정적인 기업에게 추천합니다.</li>
            <li>1년 서비스 구입을 하는 조건으로</li>
            <li>높은 할인율을 보장받습니다.</li>
          </ul>
          <a href="{{route('payment', ['id' => 3])}}" class="mt-6 inline-flex w-full justify-center px-4 py-2.5 rounded-xl bg-brand-600 text-white hover:bg-brand-700 font-semibold">1년 계약</a>
        </div>
        
        <!-- Free -->
        <div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-soft">
          <h3 class="font-semibold text-lg">한달 계약</h3>
          <!--p class="mt-2 text-sm text-slate-500">For hobby projects</p-->
          <div class="mt-6 text-4xl font-extrabold">￦220,000</div>
          <ul class="mt-6 space-y-3 text-sm text-slate-600 dark:text-slate-300">
            <li>우리 서비스의 기본 이용 요금입니다.</li>
            <li>6개월 또는 1년 서비스 기간 중 중도 해지 시, 할인받은 금액 기준으로 계산된 위약금이 부과됩니다.</li>
            <li>중도 해지 시 위약금 계산 방법 및 시점은 계약서에 명시된 조건을 따릅니다.</li>
          </ul>
          <a href="{{route('payment', ['id' => 1])}}" class="mt-6 inline-flex w-full justify-center px-4 py-2.5 rounded-xl border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-900 font-semibold">계약하기</a>
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
          <summary class="flex cursor-pointer items-center justify-between font-semibold">도입 비용과 월 유지비는 얼마인가요?
            <span class="transition-transform group-open:rotate-180">▼</span></summary>
          <p class="mt-3 text-slate-600 dark:text-slate-300">솔루션 기본 설치 비용은 기업 규모와 커스터마이징 범위에 따라 달라지지만, 가장 기본 패키지는 합리적인 가격으로 제공됩니다. 월 유지비 역시 서버 관리, 업데이트, 기술 지원이 포함되어 있어 추가 비용 걱정 없이 안정적으로 운영하실 수 있습니다. 필요하시면 맞춤 견적도 바로 안내드릴 수 있습니다.</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer items-center justify-between font-semibold">우리 직원들이 쉽게 글을 작성하고 관리할 수 있나요?
            <span class="transition-transform group-open:rotate-180">▼</span></summary>
          <p class="mt-3 text-slate-600 dark:text-slate-300">네, 블로그 솔루션은 비전문가도 바로 사용할 수 있는 직관적인 UI를 제공합니다. 글 작성, 이미지 업로드, 카테고리 관리, 권한 설정 등 모든 기능이 간단한 클릭으로 가능하며, 모바일에서도 쉽게 관리할 수 있습니다. 별도의 교육 없이도 바로 활용 가능합니다.</p>
        </details>
        <details class="group p-6">
          <summary class="flex cursor-pointer items-center justify-between font-semibold">검색 엔진 최적화(SEO)나 SNS 공유 기능은 지원되나요?
            <span class="transition-transform group-open:rotate-180">▼</span></summary>
          <p class="mt-3 text-slate-600 dark:text-slate-300">물론입니다. 검색 엔진 최적화 기능이 기본으로 내장되어 있어, 작성된 글이 구글, 네이버 등 검색에 최적화됩니다. 또한 글 공유 버튼과 메타데이터 자동 생성 기능으로 SNS 홍보와 트래픽 유입에도 효과적입니다. 기업 블로그를 통한 마케팅 효과를 바로 경험하실 수 있습니다.</p>
        </details>
      </div>
    </div>
  </section>
  <livewire:contact-form />

  <!-- CTA -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="rounded-2xl border border-slate-200 dark:border-slate-800 p-8 sm:p-10 bg-gradient-to-br from-brand-50 to-white dark:from-slate-900 dark:to-slate-900 shadow-soft flex flex-col sm:flex-row items-center justify-between gap-6">
        <div>
          <h3 class="text-2xl font-extrabold tracking-tight">고객들을 만나러 갈 준비가 되셨나요?</h3>
          <p class="text-slate-600 dark:text-slate-300 mt-2">홍보 채널을 늘리는 것 만으로도 기업의 가치는 올라갑니다.</p>
        </div>
        <a href="#pricing" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-brand-600 text-white hover:bg-brand-700 font-semibold">자사 블로그 시작하기</a>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer class="py-10 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <a class="flex items-center gap-2 font-extrabold text-lg tracking-tight" href="/">
          <span class="inline-flex h-8 w-8 rounded-xl bg-brand-600 text-white items-center justify-center shadow-soft">Biz</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="180.15" height="44" class="fill-slate-800 dark:fill-slate-200" viewBox="0 0 180.15 44">
            <text x="0" y="35" font-family="'Orbitron', sans-serif" font-weight="800" font-size="35">Groupket</text>
          </svg>
        </a>
        <nav class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-600 dark:text-slate-300">
          <a href="#features" class="hover:text-brand-600">Features</a>
          <a href="#pricing" class="hover:text-brand-600">Pricing</a>
          <a href="#faq" class="hover:text-brand-600">FAQ</a>
          <a href="#" class="hover:text-brand-600">Terms</a>
          <a href="#" class="hover:text-brand-600">Privacy</a>
        </nav>
        <p class="text-xs text-slate-500">© <span x-data x-text="new Date().getFullYear()"></span> Groupket. All rights reserved.</p>
      </div>
    </div>
  </footer>

  
</body>
</html>
