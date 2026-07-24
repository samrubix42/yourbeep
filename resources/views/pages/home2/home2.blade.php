<div x-data="{ 
    toastOpen: false,
    toastUser: { name: '', city: '', time_ago: '' },
    purchasersList: @js($this->purchasers)
}" x-init="
    if (purchasersList && purchasersList.length > 0) {
        let index = Math.floor(Math.random() * purchasersList.length);
        toastUser = purchasersList[index];
        setTimeout(() => {
            toastOpen = true;
            setInterval(() => {
                toastOpen = false;
                setTimeout(() => {
                    index = (index + 1 + Math.floor(Math.random() * 5)) % purchasersList.length;
                    toastUser = purchasersList[index];
                    toastOpen = true;
                }, 600);
            }, 8500);
        }, 3000);
    }
" class="w-full bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between relative">

    <!-- Reusable Header Livewire Component -->
    <livewire:public.header />

    <!-- HERO SECTION (Premium Light Theme with Glow Lights and Grid Mesh) -->
    <section class="w-full bg-white border-b border-slate-200/50 py-16 sm:py-24 relative overflow-hidden flex-1">
        <!-- Dotted grid mesh pattern -->
        <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>

        <!-- Glow highlights -->
        <div class="absolute top-0 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.06] rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/3 w-[400px] h-[400px] bg-rose-500/[0.05] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Hero Content Header -->
            <div class="text-center max-w-4xl mx-auto space-y-6 mb-16">
                <!-- Premium Pill Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-rose-500/5 border border-rose-500/20 rounded-full text-rose-700 text-xs font-semibold uppercase tracking-wider shadow-xs backdrop-blur-xs">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-450 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-600"></span>
                    </span>
                    <span>Exclusive Early Member Access</span>
                </div>

                <!-- Main Hero Headline -->
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 leading-[1.15] font-sans">
                    Running at 200% Effort, and yet…<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-amber-500 font-extrabold block mt-2">
                        Still Falling Short of That 100% Life?
                    </span>
                </h1>

                <!-- Bold Highlight Statement -->
                <div class="inline-block bg-teal-500/5 border-l-4 border-teal-500 px-6 py-4 rounded-r-xl max-w-2xl text-left shadow-2xs">
                    <span class="block text-slate-650 text-base sm:text-lg font-light leading-relaxed">Don't Question Your Ambition or Effort.</span>
                    <span class="block text-slate-900 text-lg sm:text-xl font-bold">Question Your Hidden Behaviour Blockers.</span>
                </div>

                <!-- Sub-headline -->
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-light font-sans max-w-3xl mx-auto">
                    Discover a Unique <strong class="text-teal-700 font-semibold">4-Step Behavioural Method</strong> to Identify the Hidden Loops Running Your Work, Relationships & Life  and Reset Them in Under <strong class="text-slate-900 font-semibold">10 Minutes a Day</strong>.
                </p>
            </div>

            <!-- Form Section with Grid Split -->
            <div id="registration-section" class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start pt-6">
                
                <!-- Left Side: Image and BSI Content below it -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Image Card -->
                    <div class="relative group rounded-3xl overflow-hidden border border-slate-200/80 bg-slate-50 p-2 shadow-lg transition-transform duration-300 hover:scale-[1.01]">
                        <div class="absolute inset-0 bg-gradient-to-tr from-teal-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none z-10"></div>
                        <img src="{{ asset('form_img.png') }}" alt="Behavioral Signals Masterclass" class="w-full h-auto rounded-2xl object-cover">
                    </div>

                    <!-- BSI Description Box below the image -->
                    <div class="bg-gradient-to-br from-slate-50 to-slate-100/70 border border-slate-200/80 rounded-2xl p-6 sm:p-7 space-y-4 shadow-sm relative">
                        <div class="absolute -top-3 left-6 px-3.5 py-0.5 bg-white border border-slate-200 rounded-full text-[10px] font-extrabold text-slate-500 uppercase tracking-widest shadow-2xs">
                            About YourBeep Framework
                        </div>

                        <div class="flex items-center gap-3 text-teal-600">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-teal-50 text-teal-650 text-base"><i class="ri-pulse-line"></i></span>
                            <span class="text-xs font-bold uppercase tracking-wider text-teal-800">Resonance Quotient (RQ)</span>
                        </div>

                        <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                            <strong>Yourbeep</strong> is the first gamified wellbeing platform  built around an exclusive <strong class="text-teal-700 font-semibold">Behavioural Signal Intelligence (BSI)</strong> framework that integrates your Emotional, Somatic, and Pattern Resonance into one powerful personal growth metric: your <strong class="text-teal-700 font-bold">Resonance Quotient (RQ)</strong>.
                        </p>
                    </div>
                </div>

                <!-- Right Side: Livewire Form -->
                <div class="lg:col-span-5 relative w-full sticky top-24">
                    <div class="absolute inset-0 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-3xl blur-[20px] opacity-10 animate-pulse-slow"></div>

                    <div class="relative bg-white border border-slate-200/85 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-sm">
                        @if ($this->success)
                            <!-- Success State -->
                            <div class="text-center py-6 space-y-6">
                                <div class="w-16 h-16 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center mx-auto text-emerald-650 shadow-inner">
                                    <i class="ri-checkbox-circle-fill text-4xl"></i>
                                </div>
                                <div class="space-y-2">
                                    <h3 class="text-2xl font-bold text-slate-900 tracking-tight">Access Secured!</h3>
                                    <p class="text-slate-600 text-sm">
                                        Welcome, <strong class="text-slate-850">{{ $this->name }}</strong>. You are successfully registered.
                                    </p>
                                </div>

                                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-200 text-left space-y-4 shadow-xs">
                                    <span class="text-xs font-bold text-teal-700 uppercase tracking-widest block">🚀 ONBOARDING DETAILS</span>
                                    <p class="text-xs text-slate-550 leading-relaxed">
                                        We have registered your email <strong>{{ $this->email }}</strong>. Your access link and pre-read materials are being dispatched.
                                    </p>
                                    <a href="https://chat.whatsapp.com/yourbeep-bsi" target="_blank" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-2.5 px-4 rounded-xl text-xs sm:text-sm text-center flex items-center justify-center gap-2 transition shadow-md cursor-pointer">
                                        <i class="ri-whatsapp-line text-lg"></i>
                                        <span>Join WhatsApp Discussion Group</span>
                                    </a>
                                </div>

                                <button type="button" wire:click="resetForm" class="text-xs text-slate-500 hover:text-slate-700 underline underline-offset-4 cursor-pointer">
                                    Register another user
                                </button>
                            </div>
                        @else
                            <!-- Active Form State -->
                            <div class="space-y-6">
                                <div class="border-b border-slate-100 pb-4 space-y-2">
                                    <div class="flex items-center justify-between">
                                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-rose-50 border border-rose-100 rounded-full text-[10px] font-extrabold text-rose-700 uppercase tracking-wide">
                                            🎫 Limited Spots Open
                                        </span>
                                        <span class="flex h-2 w-2 relative">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                        </span>
                                    </div>
                                    <h3 class="text-2xl font-black text-slate-900 tracking-tight leading-tight">
                                        Start Your Journey
                                    </h3>
                                    <p class="text-xs text-slate-500 font-normal leading-relaxed">
                                        Enter your details to register for the Behavioural Signal Intelligence (BSI) framework.
                                    </p>
                                </div>

                                <form wire:submit.prevent="submit" class="space-y-5">
                                    <!-- Full Name -->
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

                                    <!-- Email Address -->
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

                                    <!-- WhatsApp Phone Number -->
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

                                    <!-- Submit Button -->
                                    <button type="submit" wire:loading.attr="disabled" wire:target="submit" class="w-full mt-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-bold py-3 px-6 rounded-xl shadow-lg shadow-teal-500/20 hover:shadow-teal-500/35 transition transform duration-150 active:scale-95 text-center text-xs uppercase tracking-wider cursor-pointer disabled:opacity-75 disabled:cursor-not-allowed flex items-center justify-center gap-2">
                                        <span>Secure Access (₹499)</span>
                                        <svg wire:loading wire:target="submit" class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                    </button>
                                </form>

                                <div class="border-t border-slate-100 pt-4 text-center">
                                    <span class="text-[10px] text-slate-450 block font-light"><i class="ri-lock-fill text-teal-600 mr-1"></i> Verified SSL Secure Connection</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CREDIBILITY STATS / FEATURE HIGHLIGHTS SECTION -->
    <section class="w-full bg-slate-100/50 py-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <!-- Point 1 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 flex flex-col items-center text-center space-y-4 shadow-xs transition duration-300 hover:shadow-md hover:scale-[1.02]">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 text-teal-650 flex items-center justify-center text-2xl shadow-inner">
                        <i class="ri-global-line"></i>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-xl font-extrabold text-slate-900 leading-tight">5 Countries</span>
                        <span class="block text-xs text-slate-500 font-light">Early Access members across 5 countries</span>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 flex flex-col items-center text-center space-y-4 shadow-xs transition duration-300 hover:shadow-md hover:scale-[1.02]">
                    <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="ri-brain-line"></i>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-xl font-extrabold text-slate-900 leading-tight">BSI™ Framework</span>
                        <span class="block text-xs text-slate-500 font-light">Unique Behavioural Intelligence framework</span>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 flex flex-col items-center text-center space-y-4 shadow-xs transition duration-300 hover:shadow-md hover:scale-[1.02]">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="ri-gamepad-line"></i>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-xl font-extrabold text-slate-900 leading-tight">45+ Activities</span>
                        <span class="block text-xs text-slate-500 font-light">45+ gamified activities</span>
                    </div>
                </div>

                <!-- Point 4 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 flex flex-col items-center text-center space-y-4 shadow-xs transition duration-300 hover:shadow-md hover:scale-[1.02]">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="ri-history-line"></i>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-xl font-extrabold text-slate-900 leading-tight">15+ Years</span>
                        <span class="block text-xs text-slate-500 font-light">15+ years’ experience in transformation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY YOURBEEP APPROACH SECTION -->
    <section class="w-full bg-white py-20 sm:py-24 relative overflow-hidden">
        <!-- Subtle background details -->
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:32px_32px] opacity-30 pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/4 w-[350px] h-[350px] bg-teal-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-650 uppercase tracking-widest block font-sans">Yourbeep adaptation</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    Why should you be interested in Yourbeep’s approach to behavioural wellbeing?
                </h2>
            </div>

            <!-- Features Grid (3 Columns) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Point 1 -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:bg-white hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-teal-50 text-teal-650 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-flask-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Science in, jargon out</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                You want tools grounded in real behavioural science  not crystals, not affirmations, not a 21-day challenge that resets to zero on day 22. You want to be better at life, and you want a comprehensive method to hold up under scrutiny.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:bg-white hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-line-chart-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Proof that the process is working</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                No abstract breakthroughs. There’s still the "trust the process", but with evidence to show for it. Yourbeep’s methodology gives you a real-time “Resonance Quotient”  a personal growth metric that moves as you grow, so progress is something you measure, not just something you feel.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:bg-white hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-time-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Built for a full life, not a free one</h3>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Gamified activities designed for people juggling work, family, ambition, and everything in between. No meditation den required. No hour-long sessions. No guilt when life gets in the way. Just 10 minutes  wherever you are, whenever you can.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT YOU'LL DISCOVER SECTION (Premium light background with dotted mesh) -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-100">
        <!-- Subtle background details -->
        <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:24px_24px] opacity-25 pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] bg-rose-500/[0.04] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-655 uppercase tracking-widest block font-sans">Yourbeep adaptation</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    What You'll Discover in the BSI Masterclass
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans max-w-2xl mx-auto">
                    Your first step into the BSI methodology. In under 60 minutes, walk away with tools you'll use even before the full course begins.
                </p>
            </div>

            <!-- Discovery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-8">
                <!-- Card 1 -->
                <div class="md:col-span-3 lg:col-span-4 bg-white border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-650 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-brain-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Active Self-Inquiry, Not Passive Calm</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-light font-sans">
                                Understand how behavioural patterns are formed sneakily without conscious awareness  and why this single mindset shift changes everything about how you approach growth, relationships, and performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="md:col-span-3 lg:col-span-4 bg-white border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-focus-3-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Behavioural Wellbeing — the Missing Link in Wellness apps</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-light font-sans">
                                Most platforms ask you to calm yourself in the moment. BSI asks a harder question: why are you reacting this way at all? The difference between superficial calm and inner transformation lies in understanding the why.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="md:col-span-3 lg:col-span-4 bg-white border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-flashlight-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">The BSI Framework — Your Personal Behavioural Intelligence System</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-light font-sans">
                                A full introduction to Behavioural Signal Intelligence  built around Emotional, Somatic, and Pattern Resonance  giving you a measurable, personal picture of your inner state for the first time.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="md:col-span-3 lg:col-span-6 bg-white border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-650 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-gamepad-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">Live BSI Activities — Not a Demo. The Real Thing.</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-light font-sans">
                                This isn't a walkthrough. You'll do an actual gamified BSI exercise from the yourbeep platform  so you feel the shift, not just understand it. Most people notice something they've never noticed before.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="md:col-span-3 lg:col-span-6 bg-white border border-slate-200 rounded-3xl p-8 space-y-6 transition duration-300 hover:shadow-xl hover:scale-[1.02] flex flex-col justify-between">
                    <div class="space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-650 flex items-center justify-center text-3xl shadow-xs">
                            <i class="ri-windy-line"></i>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900 font-sans">The Internal Shift Finds You – No Chase. No BS.</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-light font-sans">
                                Practical somatic techniques to release fight-or-flight mode  plus creative expression mapping exercises you can use anywhere, anytime, when life is happening at full speed. When the nervous system is regulated, a state of equilibrium brings inner transformation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING & COMPARISON SECTION -->
    <section class="w-full bg-gradient-to-b from-slate-50 to-slate-100/60 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background glows -->
        <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-teal-500/[0.03] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 left-1/4 w-[400px] h-[400px] bg-indigo-500/[0.03] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Choose Your Pathway</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    Masterclass or <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600">Complete Program?</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans">
                    Start where you are. Go as deep as you're ready for.
                </p>
            </div>

            <!-- Comparison Table (Desktop View, lg and up) -->
            <div class="hidden lg:block border border-slate-200 rounded-3xl overflow-hidden shadow-2xl bg-white">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/70 border-b border-slate-200">
                            <th class="p-6 w-1/4 text-xs font-bold text-slate-400 uppercase tracking-wider align-middle">Features</th>
                            <th class="p-6 w-3/8 text-left border-r border-slate-200/60 align-top">
                                <div class="flex flex-col h-full justify-between space-y-4">
                                    <div class="space-y-2">
                                        <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-teal-50 text-teal-700 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                            🎯 BSI Masterclass
                                        </div>
                                        <div class="flex items-baseline gap-2">
                                            <span class="text-3xl font-black text-slate-900">₹299</span>
                                            <span class="text-sm text-slate-400 line-through">₹499</span>
                                        </div>
                                    </div>
                                    <a href="#registration-section" class="inline-flex items-center justify-center w-full bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold py-2.5 px-4 rounded-xl text-xs uppercase tracking-wider transition">
                                        Start Masterclass
                                    </a>
                                </div>
                            </th>
                            <th class="p-6 w-3/8 text-left bg-gradient-to-br from-teal-500/[0.04] to-emerald-500/[0.04] border-t-4 border-t-teal-600 relative align-top">
                                <div class="flex flex-col h-full justify-between space-y-4">
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between gap-2 flex-wrap">
                                            <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                                🚀 Complete BSI Program
                                            </div>
                                            <span class="inline-flex px-2.5 py-0.5 bg-gradient-to-r from-teal-600 to-emerald-600 text-white text-[9px] font-extrabold uppercase tracking-widest rounded-full shadow-2xs">
                                                Full Transformation
                                            </span>
                                        </div>
                                        <div class="flex items-baseline gap-2">
                                            <span class="text-3xl font-black text-slate-900">₹2999</span>
                                            <span class="text-sm text-slate-400 line-through">₹5999</span>
                                        </div>
                                    </div>
                                    <a href="#registration-section" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-bold py-2.5 px-4 rounded-xl text-xs uppercase tracking-wider shadow-md shadow-teal-500/20 transition">
                                        Get Complete Program
                                    </a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm align-top">
                        <!-- BSI Framework -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">BSI Framework</td>
                            <td class="p-6 text-slate-600 font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-emerald-500 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Introduction to the 4-pillar approach  how to start reading your behavioural signals</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span><strong>A comprehensive, end-to-end behavioural reset</strong> across all four pillars</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Educational Videos -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">Educational Videos</td>
                            <td class="p-6 text-slate-600 font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-emerald-500 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>1 deep-dive video  45 mins</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span><strong>28 videos</strong> across 5 structured sections</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Gamified Activities -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">Gamified Activities</td>
                            <td class="p-6 text-slate-600 font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-emerald-500 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>6 activities across 4 pillars</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span><strong>45 activities</strong> across 4 pillars</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Metrics -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">Metrics</td>
                            <td class="p-6 text-slate-600 font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-emerald-500 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Partial RQ  Somatic and Pattern Resonance scores</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span><strong>Full daily RQ tracking</strong>  Emotional, Somatic, and Pattern Resonance combined</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Personalized Insights -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">Personalized Insights</td>
                            <td class="p-6 text-slate-400 italic font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5 text-slate-400 font-light">
                                    <i class="ri-close-circle-line text-slate-300 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Not included</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Recommended action pathways based on live RQ</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Community Access -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">Community Access</td>
                            <td class="p-6 text-slate-400 italic font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5 text-slate-400 font-light">
                                    <i class="ri-close-circle-line text-slate-300 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Not included</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Monthly meets</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Masterclass Fee -->
                        <tr>
                            <td class="p-6 font-bold text-slate-800 bg-slate-50/10">Masterclass Fee</td>
                            <td class="p-6 text-slate-400 italic font-light border-r border-slate-100">
                                <div class="flex items-start gap-2.5 text-slate-400 font-light">
                                    <i class="ri-close-circle-line text-slate-300 text-base mt-0.5 flex-shrink-0"></i>
                                    <span>Not included</span>
                                </div>
                            </td>
                            <td class="p-6 text-slate-600 font-light bg-gradient-to-br from-teal-500/[0.01] to-emerald-500/[0.01]">
                                <div class="flex items-start gap-2.5 text-teal-800 font-semibold">
                                    <i class="ri-checkbox-circle-fill text-teal-600 text-base mt-0.5 flex-shrink-0"></i>
                                    <span><span class="line-through text-slate-400 font-normal">₹299</span> credited toward program</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pricing Cards (Mobile View, md and down) -->
            <div class="lg:hidden grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Masterclass Card -->
                <div class="bg-white border border-slate-200 rounded-3xl p-6 space-y-6 shadow-xs relative">
                    <div class="space-y-2">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-teal-50 text-teal-750 rounded-full text-[10px] font-bold uppercase tracking-wider">🎯 BSI Masterclass</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl font-black text-slate-900">₹299</span>
                            <span class="text-sm text-slate-400 line-through">₹499</span>
                        </div>
                    </div>
                    <ul class="space-y-4 text-xs text-slate-600 divide-y divide-slate-100">
                        <li class="pt-3"><strong>BSI Framework:</strong> Introduction to the 4-pillar approach  how to start reading your behavioural signals</li>
                        <li class="pt-3"><strong>Videos:</strong> 1 deep-dive video  45 mins</li>
                        <li class="pt-3"><strong>Activities:</strong> 6 activities across 4 pillars</li>
                        <li class="pt-3"><strong>Metrics:</strong> Partial RQ  Partial Somatic and Pattern Resonance scores based on your 6 activities</li>
                    </ul>
                </div>

                <!-- Complete Program Card -->
                <div class="bg-white border border-teal-500/30 rounded-3xl p-6 space-y-6 shadow-md relative ring-1 ring-teal-500/10">
                    <div class="absolute -top-3 right-6 px-3 py-0.5 bg-gradient-to-r from-teal-600 to-emerald-600 text-white text-[9px] font-extrabold uppercase tracking-widest rounded-full shadow-sm">
                        Full Transformation
                    </div>
                    <div class="space-y-2">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-indigo-50 text-indigo-750 rounded-full text-[10px] font-bold uppercase tracking-wider">🚀 Complete BSI Program</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl font-black text-slate-900">₹2999</span>
                            <span class="text-sm text-slate-400 line-through">₹5999</span>
                        </div>
                    </div>
                    <ul class="space-y-4 text-xs text-slate-600 divide-y divide-slate-100">
                        <li class="pt-3"><strong>BSI Framework:</strong> A comprehensive, end-to-end behavioural reset across all four pillars</li>
                        <li class="pt-3"><strong>Videos:</strong> 28 videos across 5 structured sections</li>
                        <li class="pt-3"><strong>Activities:</strong> 45 activities across 4 pillars</li>
                        <li class="pt-3"><strong>Metrics:</strong> Full daily RQ tracking  Emotional, Somatic, and Pattern Resonance combined into one comprehensive score</li>
                        <li class="pt-3"><strong>Insights:</strong> Recommended action pathways based on your live RQ  so you always know exactly where to focus next</li>
                        <li class="pt-3"><strong>Community:</strong> Monthly meets</li>
                        <li class="pt-3"><strong>Masterclass Fee:</strong> <span class="line-through text-slate-450">₹299</span> credited in full toward this</li>
                    </ul>
                </div>
            </div>

            <!-- Closing CTA Container -->
            <div class="mt-16 bg-gradient-to-br from-slate-50 to-slate-100/70 border border-slate-200 rounded-3xl p-8 text-center max-w-3xl mx-auto space-y-6 shadow-sm">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest block font-sans">Not sure yet?</span>
                
                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 font-sans">
                    Start with the Masterclass.
                </h3>
                
                <p class="text-xs sm:text-sm text-slate-500 font-light leading-relaxed max-w-xl mx-auto font-sans">
                    Your <span class="text-slate-850 font-semibold">₹299</span> counts toward the full program whenever you're ready.
                </p>

                <div class="pt-2">
                    <a href="#registration-section" class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-bold py-3 px-8 rounded-xl shadow-md hover:shadow-lg transition transform duration-150 active:scale-95 text-xs sm:text-sm uppercase tracking-wider cursor-pointer">
                        <span>Start with the Masterclass</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- PRODUCT MATRIX COMPARISON SECTION -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background glows -->
        <div class="absolute top-1/4 left-1/3 w-[500px] h-[500px] bg-rose-500/[0.02] rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/3 w-[500px] h-[500px] bg-teal-500/[0.03] rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Find the Right Fit</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    Still searching for the right fit?
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans leading-relaxed">
                    You've probably tried some kind of mental wellness platform. If you’re still not sure, here's an honest look at what each actually delivers.
                </p>
                
                <!-- Emoji Legend Badges -->
                <div class="pt-4 flex flex-wrap justify-center gap-3 text-xs">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-600 shadow-2xs font-sans">
                        <span class="text-emerald-500 font-bold">✅</span> <strong class="font-semibold text-slate-700">Absolutely</strong>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-650 shadow-2xs font-sans">
                        <span class="text-amber-500 font-bold">🤷</span> <strong class="font-semibold text-slate-700">Occasionally</strong>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-650 shadow-2xs font-sans">
                        <span class="text-rose-500 font-bold">🙅</span> <strong class="font-semibold text-slate-700">Nope</strong>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-full text-slate-650 shadow-2xs font-sans">
                        <span class="text-slate-450 font-bold">🤐</span> <strong class="font-semibold text-slate-800">I’d rather not say!</strong>
                    </span>
                </div>
            </div>

            <!-- Comparison Table (Desktop View, lg and up) -->
            <div class="hidden lg:block border border-slate-200 rounded-3xl overflow-hidden shadow-2xl bg-white">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/70 border-b border-slate-200">
                            <th class="p-5 text-xs font-bold text-slate-400 uppercase tracking-wider w-5/12 align-middle">What I'm actually looking for...</th>
                            <th class="p-5 text-center text-xs font-bold text-slate-700 uppercase tracking-wider w-1.5/12 align-middle border-r border-slate-100">Spiritual Groups</th>
                            <th class="p-5 text-center text-xs font-bold text-slate-700 uppercase tracking-wider w-1.5/12 align-middle border-r border-slate-100">Mindfulness Apps</th>
                            <th class="p-5 text-center text-xs font-bold text-slate-700 uppercase tracking-wider w-1.5/12 align-middle border-r border-slate-100">1-1 Counselling</th>
                            <th class="p-5 text-center text-xs font-bold text-teal-900 uppercase tracking-wider w-2.5/12 align-middle bg-teal-500/8">BSI @ Yourbeep</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm align-middle">
                        <!-- Row 1 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I just need a quick moment to center myself</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">🤷</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want scientifically deconstructed frameworks to label my inner state.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want wellness that feels natural like play, not stressful like homework</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want a full read of my emotional, physiological and nervous system state, a clear score, and not a generic mood state</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 5 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want actual proof that I'm making progress in my long-term behavioural wellbeing.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 6 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I can fit this into my mad daily routine, and also learn to read and regulate my own signals.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 7 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want recurring community meets so I can share my learnings</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">✅</td>
                        </tr>
                        <!-- Row 8 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want to disappear from the world and find inner peace.</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🙅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">🙅</td>
                        </tr>
                        <!-- Row 9 -->
                        <tr>
                            <td class="p-5 font-medium text-slate-800 bg-slate-50/10">I want to discuss a specific life situation that needs to be addressed</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤷</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">🤐</td>
                            <td class="p-5 text-center text-base border-r border-slate-100">✅</td>
                            <td class="p-5 text-center text-base bg-teal-500/[0.03] font-semibold text-slate-800">🙅</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile View (Horizontal Scrollable Cards) -->
            <div class="lg:hidden">
                <p class="text-xs text-slate-400 text-center mb-4 flex items-center justify-center gap-1 font-light">
                    <span>Swipe horizontally to compare platforms</span> <i class="ri-arrow-right-line"></i>
                </p>
                <div class="flex overflow-x-auto snap-x snap-mandatory gap-6 pb-6 scrollbar-hide -mx-4 px-4">
                    
                    <!-- Card 1 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I just need a quick moment to center myself”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">🤷 Occasionally</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want scientifically deconstructed frameworks to label my inner state”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want wellness that feels natural like play, not stressful like homework”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want a full read of my emotional, somatic and nervous system state”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want actual proof of my long-term progress”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I can fit this into my mad daily routine & learn to regulate myself”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want recurring community meets to share learnings”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">✅ Absolutely</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want to disappear from the world and find inner peace”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-850">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-700">🙅 Nope</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">🙅 Nope</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="snap-center shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-5 space-y-4 shadow-md">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">“I want to discuss a specific life situation that needs to be addressed”</h4>
                        <div class="space-y-2.5 text-xs">
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Spiritual Groups</span>
                                <span class="font-bold text-slate-700">🤷 Occasionally</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">Mindfulness Apps</span>
                                <span class="font-bold text-slate-700">🤐 I'd rather not say</span>
                            </div>
                            <div class="flex justify-between items-center py-1.5 border-b border-slate-100">
                                <span class="text-slate-500">1-1 Counselling</span>
                                <span class="font-bold text-slate-800">✅ Absolutely</span>
                            </div>
                            <div class="flex justify-between items-center bg-teal-50 px-3 py-2 rounded-xl">
                                <span class="text-teal-900 font-semibold">BSI @ Yourbeep</span>
                                <span class="font-black text-teal-700">🙅 Nope</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Closing Statement & CTA -->
            <div class="mt-16 text-center max-w-3xl mx-auto space-y-6">
                <div class="inline-block bg-teal-500/[0.04] border-l-4 border-teal-600 px-6 py-4 rounded-r-2xl text-left shadow-xs">
                    <p class="text-slate-800 text-base sm:text-lg font-light leading-relaxed font-sans">
                        Yourbeep isn't for everyone  <strong class="text-teal-900 font-bold">and that's the point.</strong>
                    </p>
                    <p class="text-slate-650 text-sm sm:text-base font-light leading-relaxed font-sans">
                        It's for the ones who want to understand themselves, not just feel better for a day.
                    </p>
                </div>

                <div class="pt-4">
                    <a href="#registration-section" class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-black py-4 px-10 rounded-2xl shadow-lg hover:shadow-xl transition transform duration-150 active:scale-95 text-sm sm:text-base uppercase tracking-wider cursor-pointer">
                        <span>Start Decoding My Behaviour NOW</span>
                        <i class="ri-arrow-right-line text-lg"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- TESTIMONIALS SLIDER SECTION -->
    <section class="w-full bg-white py-20 sm:py-28 relative overflow-hidden border-t border-slate-100" 
             x-data="{ 
                 activeSlide: 0, 
                 totalSlides: 5,
                 slideInterval: null,
                 testimonials: [
                     {
                         quote: 'I\'ve known Alolika for 5 years in a professional capacity, and watching her build Yourbeep has been one of the most natural evolutions I\'ve seen. She\'s always been the person in the room who could look at a messy, ambiguous situation, read the subtle cues, and find the pattern in it  build a framework, make it executable, make it stick. That\'s exactly what I would expect her to do with behavioral intelligence.<br><br>When I first saw what Yourbeep was about, I was intrigued  and partly nervous about what it could reveal. The idea of a practical framework that builds psychosomatic intelligence and helps you understand your own patterns was certainly something new. Not rigid, but rigorous  the kind of thing that appeals to the analytical mind. It makes you wonder why nobody built it this way before.<br><br>Knowing Alolika, I can safely say Yourbeep is genuinely different. It has the rigor of a well-designed professional framework and the warmth of someone who has integrated thousands of people through transformations even as they resist change.',
                         author: 'Krish R',
                         role: 'The Professional Peer'
                     },
                     {
                         quote: 'What I love about Yourbeep is that it came from a real place. I watched Alolika go through a significant life transition  leaving a successful career, relocating across continents multiple times, starting something entirely new  and instead of falling apart or pretending everything was fine, she did something very her: she got curious about what was happening inside her and built a system around it.<br><br>The BSI framework isn\'t something she read in a book. It\'s something she lived, tested on herself, and then structured in a way that other people can actually use. When she talks about decoding your emotions or reading your behavioral patterns, she\'s not speaking theoretically  she\'s speaking from genuine experience of doing exactly that work herself.<br><br>I\'ve tried the activities on the platform and what surprised me most was how quickly something clicked. Within a single session I noticed a pattern in how I respond to stress that I\'d never been able to name before. That\'s the yourbeep difference  it doesn\'t just tell you interesting things about yourself. It gives you tools to actually do something about them.',
                         author: 'Meghna Neetha',
                         role: 'The Personal Friend'
                     },
                     {
                         quote: 'I\'ll be honest  I\'m not a wellness person. The word mindfulness makes me instinctively roll my eyes, and I\'ve never lasted more than three days on a meditation app. So when Alolika told me she was building a behavioral wellbeing platform, my first reaction was polite skepticism.<br><br>But then she explained what Behavioral Intelligence actually is  and it made sense in a way that wellness content never has before.<br><br>Her background in aerial and yoga has given her a practical understanding of somatic stress that I\'ve never heard explained so simply. The idea that my body had been holding emotions felt bizarre at first  but then I actually located it, released it, and noticed a real shift in myself. It made me wonder why nobody had explained it this way before.<br><br>What hit me hardest was realizing I\'d been looking at my day-to-day problems in isolation  without seeing what I\'d been carrying all along. Not trauma. Just unprocessed emotions I\'d never had a framework to name.<br><br>BSI is not about gratitude journals. It\'s about understanding why you behave the way you do  the patterns running on autopilot, the emotional signals you\'ve been ignoring, the way your body holds stress before your brain even registers it  and then actually doing something about it.',
                         author: 'Ahana G',
                         role: 'The Skeptic Turned Believer'
                     },
                     {
                         quote: 'I\'ve always wanted to understand myself better but never found the right entry point. Therapy felt like too big a commitment. Meditation apps felt passive. Self-help content felt too generic to survive contact with my actual life.<br><br>When Alolika first told me she wanted to gamify wellness and build an analytical framework around it, I was genuinely curious how she\'d pull it off.<br><br>Once she walked me through it, I got it immediately. There\'s a clarity and structure to BSI that makes something as complex as behavioral self-awareness feel genuinely approachable  which you don\'t find in typical wellness content. The Resonance Quotient especially  the idea that you can track self-awareness as a measurable, improving score  that\'s what got me. It\'s the first wellness concept that speaks the language of someone who lives in spreadsheets and frameworks. Which, it turns out, is exactly what I needed.<br><br>Her background comes through in every layer of how the platform is built. She\'s taken years of expertise in understanding how systems work  organizational systems, human systems  and applied it to the most important system of all: yourself.<br><br>I genuinely think RQ will become as commonly referenced as EQ. It fills a gap nothing else has.',
                         author: 'Madhur B',
                         role: 'The Wellness-Curious Millennial'
                     },
                     {
                         quote: 'I came to Yourbeep as a skeptic and left with a framework for understanding myself that I actually use daily. Alolika has done something rare  taken rigorous behavioural science, made it completely accessible, and built a platform that meets you exactly where you are.<br><br>The BSI methodology is the most practical self-awareness tool I\'ve encountered. And my Resonance Quotient? It\'s moving in the right direction  which is more than I can say for most wellness experiments I\'ve tried.',
                         author: 'Dr. Justine',
                         role: 'The Behavioral Expert'
                     }
                 ],
                 next() {
                     this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                 },
                 startAutoSlide() {
                     this.stopAutoSlide();
                     this.slideInterval = setInterval(() => {
                         this.next();
                     }, 4500);
                 },
                 stopAutoSlide() {
                     if (this.slideInterval) clearInterval(this.slideInterval);
                 }
             }"
             x-init="startAutoSlide()"
             @mouseenter="stopAutoSlide()"
             @mouseleave="startAutoSlide()">
        <!-- Background decorative glows -->
        <div class="absolute top-1/2 left-1/4 w-[450px] h-[450px] bg-rose-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/3 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Real Stories</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    What Others Are Saying
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans">
                    Read the experiences of professional peers, skeptic believers, and wellness-curious individuals.
                </p>
            </div>

            <!-- Testimonial Slider Card Container -->
            <div class="relative w-full max-w-4xl mx-auto min-h-[500px] sm:min-h-[440px] md:min-h-[380px] flex flex-col justify-between">
                
                <!-- Static Outer Card -->
                <div class="w-full bg-white border border-slate-200 rounded-3xl p-8 sm:p-12 shadow-xl relative flex-1 flex flex-col justify-between overflow-hidden">
                    
                    <!-- Premium Quotes Icon -->
                    <div class="absolute top-6 right-8 text-slate-100 text-7xl font-serif pointer-events-none select-none">
                        “
                    </div>

                    <!-- Inner Slider Content Grid Stack -->
                    <div class="relative flex-1 grid grid-cols-1 grid-rows-1">
                        <template x-for="(t, index) in testimonials" :key="index">
                            <div x-show="activeSlide === index" 
                                 x-transition:enter="transition opacity ease-out duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition opacity ease-in duration-300"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="col-start-1 row-start-1 flex flex-col justify-between h-full space-y-6">
                                
                                <!-- Testimonial text -->
                                <p class="text-sm sm:text-base text-slate-650 leading-relaxed font-light font-sans italic relative z-10" x-html="t.quote"></p>

                                <!-- User Info row -->
                                <div class="flex items-center gap-4 pt-4 border-t border-slate-100 mt-auto">
                                    <!-- Avatar placeholder with initials and custom gradient -->
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-teal-500 to-indigo-500 flex items-center justify-center text-white font-bold text-sm tracking-wide shadow-sm shrink-0">
                                        <span x-text="t.author.split(' ').map(n => n[0]).join('')"></span>
                                    </div>
                                    <div class="space-y-0.5">
                                        <h4 class="text-sm sm:text-base font-bold text-slate-900 font-sans" x-text="t.author"></h4>
                                        <span class="inline-block text-[10px] sm:text-xs font-bold text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider" x-text="t.role"></span>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                </div>

            </div>

            <!-- Slide Indicator Dots -->
            <div class="flex justify-center gap-2.5 mt-8">
                <template x-for="(t, index) in testimonials" :key="index">
                    <button @click="activeSlide = index" 
                            :class="activeSlide === index ? 'w-8 bg-teal-600' : 'w-2.5 bg-slate-200 hover:bg-slate-300'"
                            class="h-2.5 rounded-full transition-all duration-300 cursor-pointer"
                            :aria-label="'Go to slide ' + (index + 1)"></button>
                </template>
            </div>

        </div>
    </section>

    <!-- ABOUT THE FOUNDER SECTION -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background decorative glows -->
        <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-teal-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 left-1/4 w-[400px] h-[400px] bg-rose-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Side: Founder Image & Quote Badge -->
                <div class="lg:col-span-5 space-y-6">
                    <!-- Image Card with Glow & Borders -->
                    <div class="relative group rounded-3xl overflow-hidden border border-slate-200 bg-white p-3 shadow-xl transition duration-300 hover:scale-[1.01]">
                        <!-- Subtle hover overlay -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-teal-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none z-10"></div>
                        <img src="https://res.cloudinary.com/doijiooei/image/upload/v1782705750/yourbeep/admin/courses/instructors/cropped-Headshot_bfurfg.png" alt="Alolika - Founder of Yourbeep" class="w-full h-auto rounded-2xl object-cover shadow-xs">
                    </div>
                    
                    <!-- Caption / Quote Card -->
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center space-y-1">
                        <h3 class="text-base font-bold text-slate-900 font-sans">Alolika</h3>
                        <span class="inline-block text-xs font-bold text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">Architect of BSI</span>
                    </div>
                </div>

                <!-- Right Side: Content Details -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Intro Header -->
                    <div class="space-y-4">
                        <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Meet the Architect</span>
                        <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                            About the Founder
                        </h2>
                        
                        <p class="text-base sm:text-lg text-slate-700 leading-relaxed font-light font-sans">
                            Most behavioural frameworks give you one lens  cognitive, somatic, or spiritual. <strong>BSI gives you all of them at once.</strong> Because its architect hasn't just studied human behaviour. She's lived it  from every angle possible.
                        </p>
                    </div>

                    <!-- Quote Block -->
                    <div class="border-l-4 border-teal-600 bg-teal-500/[0.04] p-5 sm:p-6 rounded-r-2xl space-y-3">
                        <p class="text-sm text-slate-700 leading-relaxed font-light font-sans italic">
                            “The only thing that consistently gets in the way of people's growth is their own behavioural limitations and patterns.”
                        </p>
                        <p class="text-xs text-slate-500 font-sans">
                             After 15 years of leading 7,000+ people through transformation across 20+ Fortune 500 firms
                        </p>
                    </div>

                    <!-- Career Context -->
                    <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                        So at the peak of her career  Senior Leader at a renowned US advisory firm  she walked away to build something that addresses exactly that, at its core.
                    </p>

                    <!-- Core Hats Section -->
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <h3 class="text-base font-bold text-slate-900 font-sans">BSI isn't a leaf out of any textbook.</h3>
                            <p class="text-xs text-slate-500 font-sans">
                                It's what happens when one person spends decades wearing genuinely different hats  and refuses to take any of them off:
                            </p>
                        </div>

                        <!-- 6 Hats Grid List -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Hat 1 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-600 shrink-0">
                                    <i class="ri-book-open-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Academic</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        Understands why people make the decisions they do, even when those decisions work against them.
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 2 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-600 shrink-0">
                                    <i class="ri-exchange-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Transformation Advisor</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        Sat with resistance, navigated denial, and watched 7,000+ people eventually integrate real change.
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 3 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-600 shrink-0">
                                    <i class="ri-mental-health-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Vipassana & Sufi Practitioner</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        Spent years learning to observe and move through emotional states with grace.
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 4 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-600 shrink-0">
                                    <i class="ri-body-scan-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Movement Practitioner</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        20+ years across dance, MMA, aerial, circus, and yoga, building a somatic vocabulary most people never develop.
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 5 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-600 shrink-0">
                                    <i class="ri-palette-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Visual Artist</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        Trained to see patterns before they're fully formed, before the mind can name them.
                                    </p>
                                </div>
                            </div>

                            <!-- Hat 6 -->
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-600 shrink-0">
                                    <i class="ri-earth-line text-lg"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-slate-800 font-sans">The Global Resident</h4>
                                    <p class="text-xs text-slate-500 leading-relaxed font-light font-sans">
                                        Lived and worked across continents long enough to know what every framework leaves out.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Closing Summary -->
                    <div class="pt-4 border-t border-slate-200/60 text-xs text-slate-500 leading-relaxed font-light font-sans">
                        These aren't credentials. They're the constituents of a life lived with unusual breadth and unusual intentionality. And BSI is what emerged from it.
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- BONUSES SECTION -->
    <section class="w-full bg-white py-20 sm:py-28 relative overflow-hidden border-t border-slate-100">
        <!-- Background decorative glows -->
        <div class="absolute top-1/2 left-1/4 w-[450px] h-[450px] bg-rose-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[450px] h-[450px] bg-teal-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest block font-sans">Founding Offer</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                    Everything You Get Today
                </h2>
                <p class="text-sm sm:text-base text-slate-500 font-light font-sans">
                    As a founding member of yourbeep  before the price goes up.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <!-- Left: Stack Items list -->
                <div class="lg:col-span-7 space-y-8">
                    <!-- Stack Item 1 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-100 bg-slate-50/30 hover:bg-slate-50 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 text-2xl">
                            <i class="ri-graduation-cap-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-slate-900 font-sans">The BSI Masterclass</h4>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Your foundational introduction to Behavioural Signal Intelligence  6 real gamified activities, introduction to the BSI framework, and a partial RQ dashboard. In under 60 minutes.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-700">
                                Yours at <span class="line-through text-slate-400">₹499</span> ₹299
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 2 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-100 bg-slate-50/30 hover:bg-slate-50 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 text-2xl">
                            <i class="ri-gamepad-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-slate-900 font-sans">6 Live Gamified BSI Activities</h4>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Not demos. Not theory. Actual yourbeep platform activities  across Emotional, Somatic, and Pattern Resonance  that you can start using the same day.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-700">
                                <span class="line-through text-slate-400">₹499</span> Included
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 3 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-100 bg-slate-50/30 hover:bg-slate-50 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 text-2xl">
                            <i class="ri-bar-chart-2-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-slate-900 font-sans">Your Partial RQ Dashboard</h4>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                A first look at your personal Resonance Quotient  your Emotional, Somatic, and Pattern Resonance scores  so you can see where your signals are aligned and where they need work.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-700">
                                <span class="line-through text-slate-400">₹499</span> Included
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 4 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-100 bg-slate-50/30 hover:bg-slate-50 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 text-2xl">
                            <i class="ri-group-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-slate-900 font-sans">Monthly Founding Member Community Meets</h4>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Live sessions with Alolika and fellow founding members  to share progress, ask questions, and stay accountable. Only available to this founding cohort.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-700">
                                <span class="line-through text-slate-400">₹999/month</span> Included
                            </div>
                        </div>
                    </div>

                    <!-- Stack Item 5 -->
                    <div class="flex gap-4 p-5 rounded-2xl border border-slate-100 bg-slate-50/30 hover:bg-slate-50 transition duration-150">
                        <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center border border-teal-100 text-teal-650 shrink-0 text-2xl">
                            <i class="ri-hand-coin-line"></i>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-base font-bold text-slate-900 font-sans">Full Masterclass Fee — Credited to the Full Course</h4>
                            <p class="text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Loved the masterclass and want to go deeper? Your entire <span class="line-through text-slate-400">₹499</span> ₹299 is credited toward the full BSI course when you upgrade. You pay nothing twice.
                            </p>
                            <div class="text-xs font-bold font-sans text-teal-700">
                                <span class="line-through text-slate-400">₹499</span> ₹299 Credited back in full
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Total Value receipt card -->
                <div class="lg:col-span-5">
                    <div class="bg-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-2xl relative overflow-hidden border border-slate-800 space-y-8">
                        <!-- Corner Accent glow -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-teal-500/20 rounded-full blur-2xl pointer-events-none"></div>
                        
                        <div class="space-y-2">
                            <span class="text-xs font-bold text-teal-400 uppercase tracking-widest block font-sans">Summary</span>
                            <h3 class="text-xl font-bold font-sans">Your Founding Membership</h3>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="space-y-4 border-t border-slate-800 pt-6">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-400 font-light font-sans">Total value</span>
                                <span class="text-slate-200 font-semibold font-mono text-base">₹2,495</span>
                            </div>
                            
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-400 font-light font-sans">Your founding member price</span>
                                <span class="text-teal-400 font-black font-mono text-2xl">₹499</span>
                            </div>

                            <div class="flex justify-between items-center bg-teal-950/50 border border-teal-800/30 px-4 py-3 rounded-2xl">
                                <span class="text-teal-300 text-xs font-bold uppercase tracking-wider font-sans">You save</span>
                                <span class="text-teal-400 font-black font-mono text-lg">₹1,996</span>
                            </div>
                        </div>

                        <!-- Warning / Closing text -->
                        <p class="text-xs text-slate-400 leading-relaxed font-light font-sans">
                            This price closes soon. After that, Early Member Access is gone  and so is the masterclass credit toward the full course.
                        </p>

                        <!-- CTA Button -->
                        <div class="pt-2">
                            <a href="#registration-section" class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 text-white font-black py-4 px-6 rounded-2xl shadow-lg hover:shadow-xl transition transform duration-150 active:scale-95 text-xs sm:text-sm uppercase tracking-wider cursor-pointer text-center">
                                <span>Claim Early Member Price Before It Closes</span>
                                <i class="ri-arrow-right-line text-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="w-full bg-slate-50 py-20 sm:py-28 relative overflow-hidden border-t border-slate-200/50">
        <!-- Background decorative glows -->
        <div class="absolute top-1/3 left-1/4 w-[400px] h-[400px] bg-rose-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 right-1/4 w-[400px] h-[400px] bg-teal-500/[0.02] rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Side: Header Copy -->
                <div class="lg:col-span-5 space-y-4 sticky top-8">
                    <span class="text-xs font-bold text-teal-650 uppercase tracking-widest block font-sans">Frequently Asked Questions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight font-sans">
                        Got Questions?<br>We’ve Got Answers.
                    </h2>
                    <p class="text-sm sm:text-base text-slate-500 font-light font-sans max-w-md">
                        Everything you need to know about the Behavioural Signal Intelligence (BSI) framework and how yourbeep works.
                    </p>
                </div>

                <!-- Right Side: Accordion List -->
                <div class="lg:col-span-7 space-y-4" x-data="{ activeAccordion: null }">
                    <!-- FAQ 1 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 1 ? null : 1)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">Is this therapy?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 1 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-600' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 1" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                No. BSI is a practitioner framework for self-directed behavioural awareness  not a clinical tool. It's designed for everyday people, not clinical populations.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 2 ? null : 2)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">I've tried wellness apps before and they didn't stick. Why is this different?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 2 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-600' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 2" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Most apps ask you to consume content passively. Yourbeep is built around active, gamified practice  plus your RQ score gives you measurable progress, so you can actually see yourself growing.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 3 ? null : 3)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">What’s the commitment needed from me?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 3 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-600' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 3" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                A device and your attention for 10 minutes a day. Can’t find 10 mins in 1 chunk – that’s fine too – break it down if you need to!
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border border-slate-200 rounded-2xl bg-white shadow-xs overflow-hidden transition-all duration-300">
                        <button @click="activeAccordion = (activeAccordion === 4 ? null : 4)" 
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-slate-50/50 transition">
                            <span class="text-sm sm:text-base font-bold text-slate-900 font-sans">I'm not a wellness person. Is this still for me?</span>
                            <span class="shrink-0 w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 transition duration-300"
                                  :class="activeAccordion === 4 ? 'rotate-180 bg-teal-50 border-teal-200 text-teal-600' : 'text-slate-500'">
                                <i class="ri-arrow-down-s-line text-lg"></i>
                            </span>
                        </button>
                        <div x-show="activeAccordion === 4" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 max-h-0"
                             x-transition:enter-end="opacity-100 max-h-[500px]"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 max-h-[500px]"
                             x-transition:leave-end="opacity-0 max-h-0"
                             class="px-6 pb-6 pt-0 border-t border-slate-100/50">
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light font-sans">
                                Especially for you. BSI was built by someone who rolled her eyes at every meditation app she tried. No spirituality, no jargon, no judgment.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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

        <div class="w-8.5 h-8.5 rounded-full bg-teal-50 border border-teal-100 flex items-center justify-center text-teal-600 font-bold select-none shrink-0">
            <i class="ri-user-received-2-line text-sm"></i>
        </div>
        <div class="space-y-0.5 pr-2 text-left flex-1 min-w-0">
            <p class="text-xs text-slate-700 font-light truncate">
                <strong class="text-slate-900 font-bold" x-text="toastUser.name"></strong> from <span class="text-teal-700 font-semibold" x-text="toastUser.city"></span>
            </p>
            <p class="text-[10px] text-slate-500 leading-none">
                just purchased the masterclass! <span class="text-slate-455 font-mono" x-text="'(' + toastUser.time_ago + ')'"></span>
            </p>
        </div>
        <button type="button" @click="toastOpen = false" class="text-slate-400 hover:text-slate-650 text-sm font-semibold select-none ml-auto cursor-pointer shrink-0">
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