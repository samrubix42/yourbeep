<div x-data="{ 
    showStickyBtn: false,
    toastOpen: false,
    toastUser: { name: '', city: '', time_ago: '' },
    purchasersList: @js($this->purchasers),
    activeFaq: null,
    bsiTab: 1
}" x-init="
    // Scroll event for sticky footer
    window.addEventListener('scroll', () => {
        showStickyBtn = window.scrollY > 500;
    });

    // Continuous Purchase Notification Toaster loop
    if (purchasersList && purchasersList.length > 0) {
        let toastIdx = Math.floor(Math.random() * purchasersList.length);
        toastUser = purchasersList[toastIdx];
        setTimeout(() => {
            toastOpen = true;
            setInterval(() => {
                toastOpen = false;
                setTimeout(() => {
                    toastIdx = (toastIdx + 1 + Math.floor(Math.random() * 5)) % purchasersList.length;
                    toastUser = purchasersList[toastIdx];
                    toastOpen = true;
                }, 600);
            }, 8500);
        }, 3000);
    }
" class="w-full bg-slate-50 text-slate-800 pb-24 md:pb-0">

    <!-- Reusable Header Livewire Component -->
    <livewire:public.header />

    <!-- HERO SECTION (Clean Light Theme aligned with Black-text Logo) -->
    <section class="w-full bg-white border-b border-slate-150 pb-20 sm:pb-28 relative overflow-hidden">
        <!-- Subtle dotted grid mesh pattern -->
        <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>

        <!-- Subtle Teal background glow lights -->
        <div class="absolute top-0 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.06] rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/3 w-[400px] h-[400px] bg-emerald-500/[0.05] rounded-full blur-[100px] pointer-events-none"></div>

        <!-- Hero Content Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

                <!-- Hero Left (7 Cols) -->
                <div class="lg:col-span-7 space-y-8">

                    <!-- Premium Badge / Pill -->
                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-rose-500/5 border border-rose-500/20 rounded-full text-rose-700 text-xs font-semibold uppercase tracking-wider shadow-xs backdrop-blur-xs">
                        <span class="flex h-2 w-2 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-450 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-600"></span>
                        </span>
                        <span>Limited time – Early Member Access is now open!!!</span>
                    </div>

                    <!-- Hero Headline -->
                    <div class="space-y-5">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-[1.15] font-sans">
                            Running at 200% Effort, and yet…<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-amber-500 font-extrabold">
                                Still Falling Short of That 100% Life?
                            </span>
                        </h1>
                        <div class="border-l-4 border-teal-500 pl-4 space-y-1">
                            <span class="block text-slate-600 text-base sm:text-lg font-light leading-relaxed">Don't Question Your Ambition or Effort.</span>
                            <span class="block text-slate-900 text-lg sm:text-xl font-bold">Question Your Hidden Behaviour Blockers.</span>
                        </div>
                    </div>

                    <!-- Sub-headline -->
                    <p class="text-base sm:text-lg text-slate-650 leading-relaxed font-light font-sans max-w-2xl">
                        Discover a Unique <strong class="text-teal-700 font-semibold">4-Step Behavioural Method</strong> to Identify the Hidden Loops Running Your Work, Relationships & Life — and Reset Them in <strong class="text-slate-900 font-semibold">Under 10 Minutes a Day</strong>.
                    </p>

                    <!-- What's RQ Score Explanation Card -->
                    <div class="bg-gradient-to-br from-slate-50 to-slate-100/70 border border-slate-200/80 rounded-2xl p-6 sm:p-7 space-y-4 shadow-sm relative">
                        <div class="absolute -top-3 left-6 px-3.5 py-0.5 bg-white border border-slate-250 rounded-full text-[10px] font-extrabold text-slate-500 uppercase tracking-widest shadow-2xs">
                            What’s a Resonance Quotient score?
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                            <div class="flex items-center gap-2 bg-white border border-slate-200/80 p-3 rounded-xl shadow-2xs">
                                <span class="text-xs text-slate-400 select-none">❌</span>
                                <span class="text-[11px] font-bold text-slate-600">Not a personality type.</span>
                            </div>
                            <div class="flex items-center gap-2 bg-white border border-slate-200/80 p-3 rounded-xl shadow-2xs">
                                <span class="text-xs text-slate-400 select-none">❌</span>
                                <span class="text-[11px] font-bold text-slate-600">Not a one-time test.</span>
                            </div>
                            <div class="flex items-center gap-2 bg-teal-500/5 border border-teal-500/15 p-3 rounded-xl shadow-2xs">
                                <span class="text-xs text-teal-600 select-none">✅</span>
                                <span class="text-[11px] font-bold text-teal-800">RQ is a living score that moves as you grow.</span>
                            </div>
                        </div>

                        <p class="text-xs sm:text-[13px] text-slate-650 leading-relaxed font-light font-sans pt-2">
                            <strong>Yourbeep</strong> is the first gamified wellbeing platform — built around an exclusive <strong class="text-teal-700 font-semibold">Behavioural Signal Intelligence (BSI)</strong> framework that integrates your Emotional, Somatic, and Pattern Resonance into one powerful personal growth metric: your <strong class="text-teal-700 font-bold">Resonance Quotient (RQ)</strong>.
                        </p>
                    </div>

                    <!-- Interactive Signal Progression Map (Interactive Tabbed BSI Roadmap) -->
                    <div class="bg-slate-50/70 border border-slate-200/80 rounded-2xl p-6 sm:p-8 space-y-5 shadow-sm relative backdrop-blur-xs">
                        <div class="absolute -top-3 left-6 px-3 py-0.5 bg-white border border-slate-200 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-widest shadow-2xs">
                            Interactive BSI™ Framework
                        </div>

                        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 sm:gap-1 pt-2">
                            <!-- Step 1 -->
                            <button type="button" @click="bsiTab = 1" :class="bsiTab === 1 ? 'border-teal-500/50 bg-teal-500/5 ring-2 ring-teal-500/10' : 'bg-white border-slate-200/80'" class="flex sm:flex-col items-center gap-3 sm:gap-1 border p-3 sm:p-2.5 rounded-xl shadow-xs transition duration-300 w-full sm:w-[22%] text-left sm:text-center cursor-pointer hover:border-teal-500/30">
                                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-rose-50 text-rose-600 text-base flex-shrink-0"><i class="ri-empathize-line"></i></span>
                                <span class="block text-xs sm:text-[10px] font-bold text-slate-800">1. Emotions</span>
                            </button>
                            <div class="text-slate-350 transform rotate-90 sm:rotate-0"><i class="ri-arrow-right-s-line text-lg"></i></div>
                            <!-- Step 2 -->
                            <button type="button" @click="bsiTab = 2" :class="bsiTab === 2 ? 'border-teal-500/50 bg-teal-500/5 ring-2 ring-teal-500/10' : 'bg-white border-slate-200/80'" class="flex sm:flex-col items-center gap-3 sm:gap-1 border p-3 sm:p-2.5 rounded-xl shadow-xs transition duration-300 w-full sm:w-[22%] text-left sm:text-center cursor-pointer hover:border-teal-500/30">
                                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-blue-50 text-blue-600 text-base flex-shrink-0"><i class="ri-radar-line"></i></span>
                                <span class="block text-xs sm:text-[10px] font-bold text-slate-800">2. Signals</span>
                            </button>
                            <div class="text-slate-350 transform rotate-90 sm:rotate-0"><i class="ri-arrow-right-s-line text-lg"></i></div>
                            <!-- Step 3 -->
                            <button type="button" @click="bsiTab = 3" :class="bsiTab === 3 ? 'border-teal-500/50 bg-teal-500/5 ring-2 ring-teal-500/10' : 'bg-white border-slate-200/80'" class="flex sm:flex-col items-center gap-3 sm:gap-1 border p-3 sm:p-2.5 rounded-xl shadow-xs transition duration-300 w-full sm:w-[22%] text-left sm:text-center cursor-pointer hover:border-teal-500/30">
                                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-amber-50 text-amber-600 text-base flex-shrink-0"><i class="ri-flashlight-line"></i></span>
                                <span class="block text-xs sm:text-[10px] font-bold text-slate-800">3. Behaviours</span>
                            </button>
                            <div class="text-slate-350 transform rotate-90 sm:rotate-0"><i class="ri-arrow-right-s-line text-lg"></i></div>
                            <!-- Step 4 -->
                            <button type="button" @click="bsiTab = 4" :class="bsiTab === 4 ? 'border-teal-500/50 bg-teal-500/5 ring-2 ring-teal-500/10' : 'bg-white border-slate-200/80'" class="flex sm:flex-col items-center gap-3 sm:gap-1 border p-3 sm:p-2.5 rounded-xl shadow-xs transition duration-300 w-full sm:w-[22%] text-left sm:text-center cursor-pointer hover:border-teal-500/30">
                                <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 text-base flex-shrink-0"><i class="ri-fingerprint-line"></i></span>
                                <span class="block text-xs sm:text-[10px] font-bold text-slate-800">4. Identity</span>
                            </button>
                        </div>

                        <!-- Interactive Content Cards based on active tab -->
                        <div class="bg-white border border-slate-200 p-4 rounded-xl shadow-inner min-h-[72px] flex items-center justify-center">
                            <p x-show="bsiTab === 1" class="text-[11px] sm:text-xs text-slate-600 leading-relaxed text-center font-sans">
                                <strong>Emotions:</strong> Raw physiological sensations triggered by external events. BSI™ teaches you to capture them before they register as conscious thoughts.
                            </p>
                            <p x-show="bsiTab === 2" class="text-[11px] sm:text-xs text-slate-600 leading-relaxed text-center font-sans" x-cloak>
                                <strong>Signals:</strong> Physical tells (muscle tightness, shallow breathing, racing pulse) that act as early warning indicators of stress or anxiety.
                            </p>
                            <p x-show="bsiTab === 3" class="text-[11px] sm:text-xs text-slate-600 leading-relaxed text-center font-sans" x-cloak>
                                <strong>Behaviours:</strong> Automated actions (avoidance, over-explaining, seeking validation) we use to seek temporary relief from uncomfortable signals.
                            </p>
                            <p x-show="bsiTab === 4" class="text-[11px] sm:text-xs text-slate-600 leading-relaxed text-center font-sans" x-cloak>
                                <strong>Identity:</strong> Over time, recurring automated behaviours harden into your personality traits, self-image, and default responses.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Hero Right - Registration Form Card -->
                <div id="checkout" class="lg:col-span-5 relative w-full sticky top-24">
                    <div class="absolute inset-0 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-3xl blur-[20px] opacity-12 animate-pulse-slow"></div>

                    <div class="relative bg-white border border-slate-200/85 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-sm">

                        @if ($this->success)
                        <!-- Booking Success Screen -->
                        <div class="text-center py-6 space-y-6">
                            <div class="w-16 h-16 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center mx-auto text-emerald-600 shadow-inner">
                                <i class="ri-checkbox-circle-fill text-4xl"></i>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-2xl font-bold text-slate-900 tracking-tight">Access Secured!</h3>
                                <p class="text-slate-600 text-sm">
                                    Welcome, <strong class="text-slate-850">{{ $this->name }}</strong>. You are enrolled in the <strong class="text-teal-650">BSI Masterclass</strong>.
                                </p>
                            </div>

                            <div class="bg-slate-50 p-5 rounded-2xl border border-slate-200 text-left space-y-4 shadow-xs">
                                <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block">🚀 ONBOARDING DETAILS</span>
                                <p class="text-xs text-slate-550 leading-relaxed">
                                    We have registered your email <strong>{{ $this->email }}</strong>. A onboarding link and pre-read materials have been dispatched. Please join the official YourBeep community board:
                                </p>
                                <a href="https://chat.whatsapp.com/yourbeep-bsi" target="_blank" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-2.5 px-4 rounded-xl text-xs sm:text-sm text-center flex items-center justify-center gap-2 transition shadow-md">
                                    <i class="ri-whatsapp-line text-lg"></i>
                                    <span>Join Class WhatsApp Group</span>
                                </a>
                            </div>

                            <button type="button" wire:click="resetForm" class="text-xs text-slate-500 hover:text-slate-700 underline underline-offset-4 cursor-pointer">
                                Register another user
                            </button>
                        </div>
                        @else
                        <!-- Booking Form Fields -->
                        <div class="space-y-6">
                            <div class="border-b border-slate-100 pb-4 space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-rose-50 border border-rose-100 rounded-full text-[10px] font-extrabold text-rose-700 uppercase tracking-wide">
                                        🎫 Limited Coupons Available
                                    </span>
                                    <span class="flex h-2 w-2 relative">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                    </span>
                                </div>
                                <h3 class="text-2xl font-black text-slate-900 tracking-tight leading-tight">
                                    Yes, I’m curious about RQ!
                                </h3>
                                <p class="text-xs text-slate-550 font-normal leading-relaxed">
                                    Claim your Early Member Access to the Behavioural Signal Intelligence Masterclass
                                </p>
                            </div>

                            <!-- Course Cost Box -->
                            <div class="bg-slate-50 border border-slate-200/80 p-4 rounded-2xl flex items-center justify-between shadow-inner">
                                <div class="space-y-0.5">
                                    <span class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Access Tier</span>
                                    <span class="block text-xs font-semibold text-slate-700">Early Member Access</span>
                                </div>
                                <div class="text-right flex flex-col items-end">
                                    <div class="flex items-center gap-1.5">
                                        <span class="text-xs text-slate-400 line-through">₹2495</span>
                                        <span class="text-lg font-black text-slate-900">₹499</span>
                                    </div>
                                    <span class="text-[9px] text-emerald-600 font-bold">You save ₹1996</span>
                                </div>
                            </div>

                            <!-- Livewire Form -->
                            <form wire:submit="submit" class="space-y-5">
                                <!-- Name -->
                                <div class="space-y-1.5">
                                    <label for="name" class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest">Full Name</label>
                                    <div class="relative rounded-xl shadow-xs">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                            <i class="ri-user-line text-sm"></i>
                                        </div>
                                        <input type="text" id="name" wire:model="name" placeholder="Rahul Sharma" class="w-full bg-slate-50/60 border border-slate-200 rounded-xl py-2.5 pl-10.5 pr-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition text-sm">
                                    </div>
                                    @error('name') <span class="text-rose-600 text-xs mt-1 block font-light"><i class="ri-error-warning-line"></i> {{ $message }}</span> @enderror
                                </div>

                                <!-- Email -->
                                <div class="space-y-1.5">
                                    <label for="email" class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest">Email Address</label>
                                    <div class="relative rounded-xl shadow-xs">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                            <i class="ri-mail-line text-sm"></i>
                                        </div>
                                        <input type="email" id="email" wire:model="email" placeholder="rahul@gmail.com" class="w-full bg-slate-50/60 border border-slate-200 rounded-xl py-2.5 pl-10.5 pr-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition text-sm">
                                    </div>
                                    @error('email') <span class="text-rose-600 text-xs mt-1 block font-light"><i class="ri-error-warning-line"></i> {{ $message }}</span> @enderror
                                </div>

                                <!-- Phone -->
                                <div class="space-y-1.5">
                                    <label for="phone" class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest">WhatsApp Mobile Number</label>
                                    <div class="relative rounded-xl shadow-xs">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                            <i class="ri-whatsapp-line text-sm"></i>
                                        </div>
                                        <input type="tel" id="phone" wire:model="phone" placeholder="9823456789" class="w-full bg-slate-50/60 border border-slate-200 rounded-xl py-2.5 pl-10.5 pr-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition text-sm">
                                    </div>
                                    @error('phone') <span class="text-rose-600 text-xs mt-1 block font-light"><i class="ri-error-warning-line"></i> {{ $message }}</span> @enderror
                                </div>

                                <!-- Submit -->
                                <button type="submit" wire:loading.attr="disabled" wire:target="submit" class="w-full mt-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-bold py-3 px-6 rounded-xl shadow-lg shadow-teal-500/20 hover:shadow-teal-500/35 transition transform duration-150 active:scale-95 text-center text-xs uppercase tracking-wider cursor-pointer disabled:opacity-75 disabled:cursor-not-allowed flex items-center justify-center gap-2">
                                    <span>Secure Member Access (₹499)</span>
                                    <svg wire:loading wire:target="submit" class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </button>
                            </form>

                            <div class="border-t border-slate-100 pt-4 text-center">
                                <span class="text-[10px] text-slate-450 block font-light"><i class="ri-lock-fill text-teal-600 mr-1"></i> Verified SSL Secure Checkout</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- CONTENT SECTIONS (Hybrid Dark & Light Theme) -->
    <div class="w-full transition-colors duration-300">

        <!-- CREDIBILITY STATS BANNER -->
        <section class="w-full bg-slate-50 border-y border-slate-200/80 py-12 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 text-center">
                    <!-- Stat 1 -->
                    <div class="space-y-2">
                        <span class="block text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600 font-sans">
                            5
                        </span>
                        <span class="block text-xs sm:text-sm font-bold text-slate-700 tracking-wide uppercase">
                            Countries
                        </span>
                        <span class="block text-[11px] text-slate-500 font-light max-w-[150px] mx-auto leading-normal">
                            Early Access members globally
                        </span>
                    </div>
                    <!-- Stat 2 -->
                    <div class="space-y-2 border-l border-slate-200/60 lg:border-l lg:border-slate-200/60">
                        <span class="block text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600 font-sans">
                            BSI
                        </span>
                        <span class="block text-xs sm:text-sm font-bold text-slate-700 tracking-wide uppercase">
                            Framework
                        </span>
                        <span class="block text-[11px] text-slate-500 font-light max-w-[150px] mx-auto leading-normal">
                            Unique Behavioural Intelligence framework
                        </span>
                    </div>
                    <!-- Stat 3 -->
                    <div class="space-y-2 border-l-0 border-slate-250 lg:border-l lg:border-slate-200/60">
                        <span class="block text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600 font-sans">
                            45+
                        </span>
                        <span class="block text-xs sm:text-sm font-bold text-slate-700 tracking-wide uppercase">
                            Activities
                        </span>
                        <span class="block text-[11px] text-slate-500 font-light max-w-[150px] mx-auto leading-normal">
                            Gamified platform activities
                        </span>
                    </div>
                    <!-- Stat 4 -->
                    <div class="space-y-2 border-l border-slate-200/60 lg:border-l lg:border-slate-200/60">
                        <span class="block text-4xl sm:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600 font-sans">
                            15+
                        </span>
                        <span class="block text-xs sm:text-sm font-bold text-slate-700 tracking-wide uppercase">
                            Years
                        </span>
                        <span class="block text-[11px] text-slate-500 font-light max-w-[150px] mx-auto leading-normal">
                            Experience in transformation
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: Why Yourbeep (TG Section) (PREMIUM DARK SECTION) -->
        <section class="w-full bg-[#070F1E] text-white py-24 relative overflow-hidden">
            <!-- Glowing backlights -->
            <div class="absolute top-1/4 left-1/10 w-[320px] h-[320px] bg-teal-500/[0.04] rounded-full blur-[90px] pointer-events-none"></div>
            <div class="absolute bottom-1/4 right-1/10 w-[300px] h-[300px] bg-emerald-500/[0.04] rounded-full blur-[80px] pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center space-y-4 mb-16">
                    <span class="text-xs font-bold text-teal-400 uppercase tracking-widest block"><i class="ri-compass-3-line"></i> Our Paradigm</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white leading-tight font-sans max-w-4xl mx-auto">
                        Why should you be interested in Yourbeep’s approach to behavioural wellbeing?
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
                    <!-- Pillar 1 -->
                    <div class="bg-slate-900/40 border border-slate-800/80 rounded-3xl p-6 sm:p-8 space-y-4 shadow-xl hover:border-teal-500/20 transition duration-300 flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 text-xl">
                                <i class="ri-flask-line"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white font-sans">Science in, jargon out</h3>
                            <p class="text-slate-300 font-light leading-relaxed text-sm">
                                You want tools grounded in real behavioural science — not crystals, not affirmations, not a 21-day challenge that resets to zero on day 22. You want to be better at life, and you want a comprehensive method to hold up under scrutiny.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="bg-slate-900/40 border border-slate-800/80 rounded-3xl p-6 sm:p-8 space-y-4 shadow-xl hover:border-emerald-500/20 transition duration-300 flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 text-xl">
                                <i class="ri-line-chart-line"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white font-sans">Proof that the process is working</h3>
                            <p class="text-slate-300 font-light leading-relaxed text-sm">
                                No abstract breakthroughs. There’s still the "trust the process", but with evidence to show for it. Yourbeep’s methodology gives you a real-time <strong class="text-teal-400 font-semibold">Resonance Quotient (RQ)</strong> — a living score that moves as you grow, showing you exactly where to focus next.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: Side-by-side (PREMIUM DARK SECTION CONTINUED) -->
        <section class="w-full bg-[#0B1528] text-white py-16 border-t border-slate-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Who this is for -->
                    <div class="bg-slate-900/40 border border-emerald-500/20 rounded-3xl p-6 sm:p-8 space-y-4 shadow-xl">
                        <h3 class="text-lg font-bold text-emerald-400 flex items-center gap-2">
                            <i class="ri-checkbox-circle-fill text-emerald-500 text-xl"></i> Who this is for:
                        </h3>
                        <ul class="space-y-3 text-xs sm:text-sm text-slate-300 font-light list-disc pl-5">
                            <li>People seeking awareness before investing in a comprehensive behavioural development program.</li>
                            <li>Those who have tried traditional mental wellness apps but felt something was missing.</li>
                            <li>Individuals who feel "fine" on the surface but sense recurring internal patterns they cannot name.</li>
                            <li>People who struggled to create lasting change with simple productivity or meditation logs.</li>
                        </ul>
                    </div>

                    <!-- Who this is not for -->
                    <div class="bg-slate-900/40 border border-rose-500/20 rounded-3xl p-6 sm:p-8 space-y-4 shadow-xl">
                        <h3 class="text-lg font-bold text-rose-400 flex items-center gap-2">
                            <i class="ri-close-circle-fill text-rose-500 text-xl"></i> Who this is not for:
                        </h3>
                        <ul class="space-y-3 text-xs sm:text-sm text-slate-300 font-light list-disc pl-5">
                            <li>People seeking quick motivational hacks or superficial advice.</li>
                            <li>Those seeking therapy or treatment for a clinically diagnosed mental health condition.</li>
                            <li>People who expect immediate, effortless transformation without ongoing practices.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 4: Course Curriculum & Inside Details (CLEAN LIGHT SECTION) -->
        <section class="w-full bg-white text-slate-800 py-24 border-b border-slate-100">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center space-y-4 mb-16">
                    <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block"><i class="ri-list-check-3"></i> Inside the course</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Masterclass Foundations Outline</h2>
                    <p class="text-slate-500 text-sm max-w-lg mx-auto font-light">Explore what is packed inside the class lesson and practical somatic exercises.</p>
                </div>

                <div x-data="{ activeDay: 1 }" class="space-y-4 max-w-4xl mx-auto">

                    <!-- Day 1 Accordion -->
                    <div class="bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10 bg-white': activeDay === 1 }">
                        <button type="button" @click="activeDay = (activeDay === 1 ? null : 1)" class="w-full flex flex-wrap items-center justify-between p-5 sm:p-6 text-left gap-4 cursor-pointer">
                            <div class="space-y-1">
                                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest font-mono">Day 1 / Foundation</span>
                                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 leading-tight">Somatic Signal Mapping & Awareness</h3>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="hidden xs:inline-flex text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded shadow-2xs"><i class="ri-video-line text-teal-650 mr-1"></i> 1 Video Lesson</span>
                                <span class="hidden xs:inline-flex text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded shadow-2xs"><i class="ri-heart-pulse-line text-teal-650 mr-1"></i> 2 Activities</span>
                                <i class="text-slate-400 transition-transform duration-300 text-xl" :class="activeDay === 1 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                            </div>
                        </button>

                        <div x-show="activeDay === 1" x-collapse>
                            <div class="p-5 sm:p-6 pt-0 border-t border-slate-100 space-y-6">
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light">
                                    Rather than offering another productivity hack or meditation routine, you'll learn how behavioural wellbeing helps you interrupt that process before it becomes automatic. You'll explore the difference between mental wellbeing and behavioural wellbeing, understand why temporary relief rarely creates lasting change, and discover how your body often reveals your internal state long before your mind does. Through simple awareness exercises, guided reflections and practical demonstrations, you'll begin observing yourself differently.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="border border-slate-200/80 bg-white p-4.5 rounded-xl shadow-2xs">
                                        <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block mb-1.5"><i class="ri-focus-2-line mr-1 text-teal-600"></i> Somatic awareness activity</span>
                                        <p class="text-xs text-slate-500 leading-relaxed font-light">
                                            Body scanning cues to notice physiological signals and tension blocks before emotional reactions escalate.
                                        </p>
                                    </div>
                                    <div class="border border-slate-200/80 bg-white p-4.5 rounded-xl shadow-2xs">
                                        <span class="text-xs font-bold text-emerald-700 uppercase tracking-widest block mb-1.5"><i class="ri-mind-map mr-1 text-emerald-600"></i> Pattern mapping activity</span>
                                        <p class="text-xs text-slate-500 leading-relaxed font-light">
                                            Observe recurring behavioural signals in real-time throughout your daily relationships and work flow.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Day 2 Accordion -->
                    <div class="bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10 bg-white': activeDay === 2 }">
                        <button type="button" @click="activeDay = (activeDay === 2 ? null : 2)" class="w-full flex flex-wrap items-center justify-between p-5 sm:p-6 text-left gap-4 cursor-pointer">
                            <div class="space-y-1">
                                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest font-mono">Day 2 / Deep Dive</span>
                                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 leading-tight">Decoding Automation Loops</h3>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="hidden xs:inline-flex text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded shadow-2xs"><i class="ri-video-line text-teal-650 mr-1"></i> 1 Video Lesson</span>
                                <span class="hidden xs:inline-flex text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded shadow-2xs"><i class="ri-article-line text-teal-650 mr-1"></i> 1 PDF Guide</span>
                                <i class="text-slate-400 transition-transform duration-300 text-xl" :class="activeDay === 2 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                            </div>
                        </button>

                        <div x-show="activeDay === 2" x-collapse x-cloak>
                            <div class="p-5 sm:p-6 pt-0 border-t border-slate-100 space-y-6">
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light">
                                    Deep dive into the four primary dimensions of behavioural coping: avoidance, hyper-control, validation seeking, and suppression. Learn how each loop operates, identify your dominant patterns, and map out the exact sequence of events that triggers your automated reactions.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="border border-slate-200/80 bg-white p-4.5 rounded-xl shadow-2xs">
                                        <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block mb-1.5"><i class="ri-survey-line mr-1 text-teal-600"></i> Automation Loop Audit</span>
                                        <p class="text-xs text-slate-500 leading-relaxed font-light">
                                            A structured workbook to log and classify your automated reactions over the past 30 days.
                                        </p>
                                    </div>
                                    <div class="border border-slate-200/80 bg-white p-4.5 rounded-xl shadow-2xs">
                                        <span class="text-xs font-bold text-emerald-700 uppercase tracking-widest block mb-1.5"><i class="ri-bubble-chart-line mr-1 text-emerald-600"></i> Coping Strategy Matrix</span>
                                        <p class="text-xs text-slate-500 leading-relaxed font-light">
                                            Visualize the immediate short-term relief vs the long-term compounding cost of each coping method.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Day 3 Accordion -->
                    <div class="bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10 bg-white': activeDay === 3 }">
                        <button type="button" @click="activeDay = (activeDay === 3 ? null : 3)" class="w-full flex flex-wrap items-center justify-between p-5 sm:p-6 text-left gap-4 cursor-pointer">
                            <div class="space-y-1">
                                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest font-mono">Day 3 / Action Plan</span>
                                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 leading-tight">Implementing BSI™ Conscious Responses</h3>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="hidden xs:inline-flex text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded shadow-2xs"><i class="ri-video-line text-teal-650 mr-1"></i> 1 Video Lesson</span>
                                <span class="hidden xs:inline-flex text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded shadow-2xs"><i class="ri-award-line text-teal-650 mr-1"></i> 2 Integration Cues</span>
                                <i class="text-slate-400 transition-transform duration-300 text-xl" :class="activeDay === 3 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                            </div>
                        </button>

                        <div x-show="activeDay === 3" x-collapse x-cloak>
                            <div class="p-5 sm:p-6 pt-0 border-t border-slate-100 space-y-6">
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light">
                                    Move from awareness to integration. Learn concrete ways to create a "gap" between feeling stress signals and choosing your response. We layout the exact methods to practice somatic self-regulation in real-time, allowing you to choose actions that serve your health, relationship boundaries, and professional goals.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="border border-slate-200/80 bg-white p-4.5 rounded-xl shadow-2xs">
                                        <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block mb-1.5"><i class="ri-sparkling-line mr-1 text-teal-600"></i> Somatic Interrupters</span>
                                        <p class="text-xs text-slate-500 leading-relaxed font-light">
                                            3 quick physical exercises to lower heart rate and calm nervous system alerts in high-stakes moments.
                                        </p>
                                    </div>
                                    <div class="border border-slate-200/80 bg-white p-4.5 rounded-xl shadow-2xs">
                                        <span class="text-xs font-bold text-emerald-700 uppercase tracking-widest block mb-1.5"><i class="ri-compass-line mr-1 text-emerald-600"></i> Habit Integration Map</span>
                                        <p class="text-xs text-slate-500 leading-relaxed font-light">
                                            Develop a customized daily workflow prompt to practice signal recognition in real life.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 5: Guide / Instructor Section (CLEAN LIGHT SECTION CONTINUED) -->
        <!-- SECTION 5: Guide / Instructor Section (PREMIUM LIGHT SECTION WITH MESH BACKGROUND) -->
        <section class="w-full bg-slate-50 text-slate-800 py-24 border-b border-slate-200/60 relative overflow-hidden">
            <!-- Dotted Background Grid Mesh -->
            <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:20px_20px] opacity-40 pointer-events-none"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-teal-500/[0.03] rounded-full blur-[80px] pointer-events-none"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-16 items-center">

                    <!-- Headshot Image Column (5 Cols) -->
                    <div class="md:col-span-5 relative group max-w-[280px] mx-auto md:max-w-none">
                        <!-- Multi-layered glowing backlights -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-teal-500 to-emerald-600 rounded-3xl blur-[20px] opacity-20 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative bg-white border border-slate-250/80 p-3 rounded-3xl shadow-xl transition-transform duration-550 group-hover:scale-[1.02]">
                            <div class="rounded-2xl overflow-hidden aspect-square border border-slate-100 bg-slate-50">
                                <img src="https://res.cloudinary.com/doijiooei/image/upload/v1782705750/yourbeep/admin/courses/instructors/cropped-Headshot_bfurfg.png" alt="Alolika Savant - YourBeep Guide" class="w-full h-full object-cover grayscale-[15%] group-hover:grayscale-0 transition duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Profile bio Column (7 Cols) -->
                    <div class="md:col-span-7 space-y-6 text-left">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-teal-700 uppercase tracking-widest shadow-xs"><i class="ri-user-star-line text-teal-650"></i> Your Masterclass Guide</span>

                        <div class="space-y-1.5">
                            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight font-sans tracking-tight">Alolika Savant</h2>
                            <span class="block text-slate-500 font-bold text-sm sm:text-base font-sans flex flex-wrap items-center gap-2">
                                Founder, Yourbeep
                                <span class="h-1.5 w-1.5 rounded-full bg-teal-500"></span>
                                BSI™ Pioneer
                            </span>
                        </div>

                        <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                            With ~15 years of experience in leadership, coaching, and human-centred transformations, Alolika Savant created Behavioural Signal Intelligence™ to help individuals channelize self-awareness into actionable personal growth.
                        </p>

                        <!-- Constituents of BSI™ -->
                        <div class="space-y-4 pt-4 border-t border-slate-200/80">
                            <span class="block text-xs font-bold text-slate-400 uppercase tracking-widest">Constituents of BSI™</span>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="bg-white border border-slate-200 rounded-2xl p-4.5 shadow-2xs space-y-2 hover:border-teal-500/20 transition duration-300">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg select-none">🧘</span>
                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">The Vipassana practitioner & Sufi whirler</h4>
                                    </div>
                                    <p class="text-[11px] text-slate-500 font-light leading-relaxed">
                                        Who has spent years learning to observe and move through emotional states with grace.
                                    </p>
                                </div>

                                <div class="bg-white border border-slate-200 rounded-2xl p-4.5 shadow-2xs space-y-2 hover:border-teal-500/20 transition duration-300">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg select-none">🎪</span>
                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">The movement practitioner</h4>
                                    </div>
                                    <p class="text-[11px] text-slate-500 font-light leading-relaxed">
                                        20+ years across dance, MMA, aerial, circus, and yoga, building a somatic vocabulary most people never develop.
                                    </p>
                                </div>

                                <div class="bg-white border border-slate-200 rounded-2xl p-4.5 shadow-2xs space-y-2 hover:border-teal-500/20 transition duration-300">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg select-none">🎨</span>
                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">The visual artist</h4>
                                    </div>
                                    <p class="text-[11px] text-slate-500 font-light leading-relaxed">
                                        Trained to see patterns before they're fully formed, before the mind can name them.
                                    </p>
                                </div>

                                <div class="bg-white border border-slate-200 rounded-2xl p-4.5 shadow-2xs space-y-2 hover:border-teal-500/20 transition duration-300">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg select-none">🌍</span>
                                        <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-tight">The global resident</h4>
                                    </div>
                                    <p class="text-[11px] text-slate-500 font-light leading-relaxed">
                                        Who has lived and worked across continents long enough to know what every framework leaves out.
                                    </p>
                                </div>
                            </div>

                            <p class="text-xs sm:text-[13px] text-slate-600 font-light italic leading-relaxed pt-2 border-t border-slate-200/40">
                                "These aren't credentials. They're the constituents of a life lived with unusual breadth and unusual intentionality. And BSI is what emerged from it."
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 6: Testimonials Sliding Marquee (PREMIUM DARK SECTION) -->
        <section class="w-full bg-[#070F1E] py-24 overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0B1528] to-[#070F1E] pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-400 uppercase tracking-widest block"><i class="ri-discuss-line"></i> Success Stories</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Trusted by Professionals</h2>
                <p class="text-slate-400 text-sm max-w-lg mx-auto font-light">See how our graduates are applying Behavioural Signal Intelligence™ in their everyday lives.</p>
            </div>

            <!-- Alpine-enhanced Infinite Marquee Tracks -->
            <div class="space-y-6 relative w-full select-none cursor-grab">

                @php
                $halfCount = (int) ceil(count($this->testimonials) / 2);
                $row1Testimonials = array_slice($this->testimonials, 0, $halfCount);
                $row2Testimonials = array_slice($this->testimonials, $halfCount);
                @endphp

                <!-- Row 1: Left to Right Marquee -->
                <div class="relative w-full overflow-hidden flex">
                    <div class="animate-marquee-reverse flex gap-6 whitespace-nowrap">
                        @foreach(array_merge($row1Testimonials, $row1Testimonials, $row1Testimonials) as $testimonial)
                        <div class="w-[280px] sm:w-[350px] flex-shrink-0 bg-slate-900/60 border border-slate-800/80 rounded-2xl p-5 sm:p-6 shadow-xl backdrop-blur-sm whitespace-normal text-left hover:border-teal-500/30 hover:bg-slate-900/80 transition duration-300 group flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-1 text-amber-400 mb-3.5">
                                    @for ($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                                        <i class="ri-star-fill text-xs"></i>
                                        @endfor
                                </div>
                                <p class="text-slate-300 font-light text-xs sm:text-sm leading-relaxed mb-5 min-h-[72px]">
                                    "{{ $testimonial['content'] }}"
                                </p>
                            </div>
                            <div class="flex items-center justify-between border-t border-slate-800/60 pt-4 mt-auto">
                                <div class="space-y-0.5">
                                    <h4 class="text-xs sm:text-sm font-bold text-white">{{ $testimonial['name'] }}</h4>
                                    <span class="block text-[10px] text-slate-450">{{ $testimonial['role'] }}</span>
                                </div>
                                <div class="text-slate-700 opacity-60"><i class="ri-double-quotes-r text-base"></i></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Row 2: Right to Left Marquee -->
                <div class="relative w-full overflow-hidden flex">
                    <div class="animate-marquee flex gap-6 whitespace-nowrap">
                        @foreach(array_merge($row2Testimonials, $row2Testimonials, $row2Testimonials) as $testimonial)
                        <div class="w-[280px] sm:w-[350px] flex-shrink-0 bg-slate-900/60 border border-slate-800/80 rounded-2xl p-5 sm:p-6 shadow-xl backdrop-blur-sm whitespace-normal text-left hover:border-teal-500/30 hover:bg-slate-900/80 transition duration-300 group flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-1 text-amber-400 mb-3.5">
                                    @for ($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                                        <i class="ri-star-fill text-xs"></i>
                                        @endfor
                                </div>
                                <p class="text-slate-300 font-light text-xs sm:text-sm leading-relaxed mb-5 min-h-[72px]">
                                    "{{ $testimonial['content'] }}"
                                </p>
                            </div>
                            <div class="flex items-center justify-between border-t border-slate-800/60 pt-4 mt-auto">
                                <div class="space-y-0.5">
                                    <h4 class="text-xs sm:text-sm font-bold text-white">{{ $testimonial['name'] }}</h4>
                                    <span class="block text-[10px] text-slate-450">{{ $testimonial['role'] }}</span>
                                </div>
                                <div class="text-slate-700 opacity-60"><i class="ri-double-quotes-r text-base"></i></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 6.5: Bonuses Offer Stack (Everything You Get Today) -->
        <section id="bonuses" class="w-full bg-slate-50 border-t border-b border-slate-200/80 py-24 relative overflow-hidden">
            <!-- Background mesh -->
            <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>

            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center space-y-4 mb-16">
                    <span class="text-xs font-bold text-rose-600 bg-rose-50 border border-rose-100 px-3.5 py-1 rounded-full uppercase tracking-wider inline-block">
                        🎁 Limited founding cohort offer
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight font-sans">
                        Everything You Get Today
                    </h2>
                    <p class="text-slate-550 text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
                        As a founding member of yourbeep — before the price goes up.
                    </p>
                </div>

                <!-- Bonuses Stack list -->
                <div class="space-y-4 max-w-4xl mx-auto">
                    <!-- Item 1 -->
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs hover:shadow-xs transition duration-200">
                        <div class="flex gap-4">
                            <span class="text-2xl select-none flex-shrink-0">🎓</span>
                            <div class="space-y-1">
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">The BSI Masterclass</h3>
                                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-xl">
                                    Your foundational introduction to Behavioural Signal Intelligence — 6 real gamified activities, introduction to the BSI framework, and a partial RQ dashboard. In under 60 minutes.
                                </p>
                            </div>
                        </div>
                        <div class="text-left sm:text-right flex-shrink-0">
                            <span class="block text-xs text-slate-405 line-through">₹499</span>
                            <span class="block text-base font-black text-slate-900">₹299</span>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs hover:shadow-xs transition duration-200">
                        <div class="flex gap-4">
                            <span class="text-2xl select-none flex-shrink-0">🎮</span>
                            <div class="space-y-1">
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">6 Live Gamified BSI Activities</h3>
                                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-xl">
                                    Not demos. Not theory. Actual yourbeep platform activities — across Emotional, Somatic, and Pattern Resonance — that you can start using the same day.
                                </p>
                            </div>
                        </div>
                        <div class="text-left sm:text-right flex-shrink-0">
                            <span class="block text-xs text-slate-405 line-through">₹499</span>
                            <span class="block text-sm font-bold text-emerald-600">Included</span>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs hover:shadow-xs transition duration-200">
                        <div class="flex gap-4">
                            <span class="text-2xl select-none flex-shrink-0">📊</span>
                            <div class="space-y-1">
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">Your Partial RQ Dashboard</h3>
                                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-xl">
                                    A first look at your personal Resonance Quotient — your Emotional, Somatic, and Pattern Resonance scores — so you can see where your signals are aligned and where they need work.
                                </p>
                            </div>
                        </div>
                        <div class="text-left sm:text-right flex-shrink-0">
                            <span class="block text-xs text-slate-405 line-through">₹499</span>
                            <span class="block text-sm font-bold text-emerald-600">Included</span>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs hover:shadow-xs transition duration-200">
                        <div class="flex gap-4">
                            <span class="text-2xl select-none flex-shrink-0">👥</span>
                            <div class="space-y-1">
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">Monthly Founding Member Community Meets</h3>
                                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-xl">
                                    Live sessions with Alolika and fellow founding members — to share progress, ask questions, and stay accountable. Only available to this founding cohort.
                                </p>
                            </div>
                        </div>
                        <div class="text-left sm:text-right flex-shrink-0">
                            <span class="block text-xs text-slate-405 line-through">₹999/month</span>
                            <span class="block text-sm font-bold text-emerald-600">Included</span>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs hover:shadow-xs transition duration-200">
                        <div class="flex gap-4">
                            <span class="text-2xl select-none flex-shrink-0">💸</span>
                            <div class="space-y-1">
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-tight">Full Masterclass Fee — Credited to the Full Course</h3>
                                <p class="text-xs text-slate-500 font-light leading-relaxed max-w-xl">
                                    Loved the masterclass and want to go deeper? Your entire ₹499 ₹299 is credited toward the full BSI course when you upgrade. You pay nothing twice.
                                </p>
                            </div>
                        </div>
                        <div class="text-left sm:text-right flex-shrink-0">
                            <span class="block text-xs text-slate-405 line-through">₹499</span>
                            <span class="block text-sm font-bold text-teal-600 font-semibold">Credited back in full</span>
                        </div>
                    </div>
                </div>

                <!-- Price summary card -->
                <div class="bg-gradient-to-br from-[#070F1E] to-[#0B1528] text-white border border-slate-800 rounded-3xl p-6 sm:p-8 mt-12 max-w-3xl mx-auto shadow-xl flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="space-y-3 text-left w-full md:w-auto">
                        <div class="flex items-center justify-between gap-8 border-b border-slate-850 pb-2.5">
                            <span class="text-xs text-slate-400">Total Value:</span>
                            <span class="text-sm font-medium text-slate-300 line-through">₹2495</span>
                        </div>
                        <div class="flex items-center justify-between gap-8 border-b border-slate-850 pb-2.5">
                            <span class="text-xs text-slate-400">You Save:</span>
                            <span class="text-sm font-bold text-emerald-400">₹1996</span>
                        </div>
                        <div class="flex items-center justify-between gap-8 pt-1">
                            <span class="text-sm font-bold text-white uppercase tracking-wider">Your founding member price:</span>
                            <span class="text-2xl font-black text-teal-400 font-sans">₹499</span>
                        </div>
                    </div>

                    <div class="w-full md:w-auto text-center space-y-4">
                        <a href="#checkout" class="inline-flex w-full md:w-auto bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 text-white font-bold py-3.5 px-8 rounded-xl text-xs sm:text-sm uppercase tracking-wider shadow-lg shadow-teal-500/10 hover:shadow-teal-500/20 transition transform duration-150 active:scale-95 text-center justify-center items-center gap-2 cursor-pointer">
                            <span>Claim Early Member Price Before It Closes</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <p class="text-[10px] text-slate-400 leading-normal max-w-[280px] mx-auto">
                            This price closes soon. After that, Early Member Access is gone — and so is the masterclass credit toward the full course.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 7: FAQ Accordion (CLEAN LIGHT SECTION) -->
        <section class="w-full bg-white text-slate-800 py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center space-y-4 mb-16">
                    <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block"><i class="ri-questionnaire-line"></i> FAQs</span>
                    <h2 class="text-3xl font-extrabold text-slate-900">Frequently Asked Questions</h2>
                    <p class="text-slate-500 text-sm font-light">Detailed answers regarding the masterclass syllabus, access, and philosophy.</p>
                </div>

                <div class="space-y-4">

                    <!-- FAQ 1 -->
                    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10': activeFaq === 0 }">
                        <button type="button" @click="activeFaq = (activeFaq === 0 ? null : 0)" class="w-full flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4.5 text-left font-bold text-slate-800 hover:text-teal-700 transition text-sm sm:text-base cursor-pointer">
                            <span>Is this therapy?</span>
                            <i class="text-slate-500 transition-transform duration-300 text-lg" :class="activeFaq === 0 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                        </button>
                        <div class="transition-all duration-300 overflow-hidden" x-show="activeFaq === 0" x-collapse>
                            <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-xs sm:text-sm text-slate-500 font-light leading-relaxed">
                                No. BSI is a practitioner framework for self-directed behavioural awareness — not a clinical tool. It's designed for everyday people, not clinical populations.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10': activeFaq === 1 }">
                        <button type="button" @click="activeFaq = (activeFaq === 1 ? null : 1)" class="w-full flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4.5 text-left font-bold text-slate-800 hover:text-teal-700 transition text-sm sm:text-base cursor-pointer">
                            <span>I've tried wellness apps before and they didn't stick. Why is this different?</span>
                            <i class="text-slate-500 transition-transform duration-300 text-lg" :class="activeFaq === 1 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                        </button>
                        <div class="transition-all duration-300 overflow-hidden" x-show="activeFaq === 1" x-collapse>
                            <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-xs sm:text-sm text-slate-500 font-light leading-relaxed">
                                Most apps ask you to consume content passively. Yourbeep is built around active, gamified practice — plus your RQ score gives you measurable progress, so you can actually see yourself growing.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10': activeFaq === 2 }">
                        <button type="button" @click="activeFaq = (activeFaq === 2 ? null : 2)" class="w-full flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4.5 text-left font-bold text-slate-800 hover:text-teal-700 transition text-sm sm:text-base cursor-pointer">
                            <span>What’s the commitment needed from me?</span>
                            <i class="text-slate-500 transition-transform duration-300 text-lg" :class="activeFaq === 2 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                        </button>
                        <div class="transition-all duration-300 overflow-hidden" x-show="activeFaq === 2" x-collapse>
                            <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-xs sm:text-sm text-slate-500 font-light leading-relaxed">
                                A device and your attention for 10 minutes a day. Can’t find 10 mins in 1 chunk – that’s fine too – break it down if you need to!
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden transition-all duration-300 shadow-sm" :class="{ 'border-teal-500/35 ring-1 ring-teal-500/10': activeFaq === 3 }">
                        <button type="button" @click="activeFaq = (activeFaq === 3 ? null : 3)" class="w-full flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4.5 text-left font-bold text-slate-800 hover:text-teal-700 transition text-sm sm:text-base cursor-pointer">
                            <span>I'm not a wellness person. Is this still for me?</span>
                            <i class="text-slate-500 transition-transform duration-300 text-lg" :class="activeFaq === 3 ? 'ri-subtract-line text-teal-600 rotate-180' : 'ri-add-line'"></i>
                        </button>
                        <div class="transition-all duration-300 overflow-hidden" x-show="activeFaq === 3" x-collapse>
                            <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-xs sm:text-sm text-slate-500 font-light leading-relaxed">
                                Especially for you. BSI was built by someone who rolled her eyes at every meditation app she tried. No spirituality, no jargon, no judgment.
                            </div>
                        </div>
                    </div>

                </div>
        </section>

    </div>

    <!-- Reusable Footer Livewire Component -->
    <livewire:public.footer />

    <!-- Social Proof Notification Toaster (Bottom-Left popup, Clean Light style with Teal accents) -->
    <div class="fixed bottom-24 md:bottom-6 left-4 md:left-6 right-4 md:right-auto z-50 bg-white border border-teal-500/20 rounded-2xl p-4 sm:p-4.5 shadow-2xl max-w-[calc(100%-2rem)] md:max-w-sm flex items-center gap-3.5 backdrop-blur transition-all duration-500 transform"
        x-show="toastOpen"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-y-8 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 -translate-y-8 scale-95">

        <div class="w-8.5 h-8.5 rounded-full bg-teal-50 border border-teal-100 flex items-center justify-center text-teal-600 font-bold select-none flex-shrink-0">
            <i class="ri-user-received-2-line text-sm"></i>
        </div>
        <div class="space-y-0.5 pr-2 text-left">
            <p class="text-xs text-slate-700 font-light">
                <strong class="text-slate-900 font-bold" x-text="toastUser.name"></strong> from <span class="text-teal-700 font-semibold" x-text="toastUser.city"></span>
            </p>
            <p class="text-[10px] text-slate-500 leading-none">
                just purchased the masterclass! <span class="text-slate-455 font-mono" x-text="'(' + toastUser.time_ago + ')'"></span>
            </p>
        </div>
        <button type="button" @click="toastOpen = false" class="text-slate-400 hover:text-slate-650 text-sm font-semibold select-none ml-auto cursor-pointer flex-shrink-0">
            <i class="ri-close-line text-base"></i>
        </button>
    </div>

    <!-- Sticky Bottom Bar (Mobile Conversion Hook - Fixed on Phone Screen) -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-slate-200/90 px-4 py-3 shadow-[0_-4px_20px_rgba(0,0,0,0.08)] flex items-center justify-between gap-3 md:hidden">
        <div class="min-w-0 flex-1">
            <span class="block text-[10px] font-extrabold text-rose-600 uppercase tracking-wider flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                LIVE MASTERCLASS
            </span>
            <span class="block text-xs font-bold text-slate-900 truncate">Enroll For Just ₹499</span>
        </div>
        <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43" class="bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-extrabold py-2.5 px-5 rounded-xl text-xs uppercase tracking-wider shadow-md active:scale-95 transition-transform shrink-0 whitespace-nowrap">
            Enroll Now
        </a>
    </div>

</div>