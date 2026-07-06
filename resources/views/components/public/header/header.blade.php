<div x-data="{ 
    minutes: 14, 
    seconds: 59 
}" x-init="
    // Countdown Timer Loop
    setInterval(() => {
        if (seconds > 0) {
            seconds--;
        } else if (minutes > 0) {
            minutes--;
            seconds = 59;
        } else {
            minutes = 14;
            seconds = 59;
        }
    }, 1000);
" class="w-full">

    <!-- Top Urgency Banner (Clean Light Teal Theme with 20 Seats Left highlighted) -->
    <div class="fixed top-0 left-0 right-0 z-50 bg-teal-50 border-b border-teal-200/80 px-4 py-2.5 text-center flex flex-wrap items-center justify-center gap-3 shadow-sm">
        <span class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-rose-600">
            <span class="w-2 h-2 rounded-full bg-rose-500 animate-ping"></span>
            ⚠️ ONLY 20 SEATS LEFT:
        </span>
        <span class="text-xs sm:text-sm text-slate-700 font-medium">
            Register now to secure your live training portal and onboarding bonuses!
        </span>
        <div class="inline-flex items-center gap-1.5 text-rose-600 font-mono font-bold text-xs bg-rose-50 px-2.5 py-0.5 rounded border border-rose-200 shadow-inner">
            <i class="ri-time-line text-xs"></i>
            <span x-text="String(minutes).padStart(2, '0')">14</span>
            <span class="animate-blink">:</span>
            <span x-text="String(seconds).padStart(2, '0')">59</span>
        </div>
    </div>

    <!-- Navigation Header -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-5">
        <div class="flex items-center justify-between border-b border-slate-100 pb-5">
            <div class="flex items-center gap-4">
                <!-- Black text logo renders perfectly on this white background -->
                <img src="/app_logo.png" alt="YourBeep Logo" class="h-9 sm:h-11 w-auto object-contain">
                <span class="h-6 w-px bg-slate-200"></span>
            </div>
            <div class="flex items-center gap-4">
                <span class="hidden md:inline-flex items-center gap-1.5 text-xs text-slate-500 bg-slate-50 border border-slate-200 px-3.5 py-1.5 rounded-full">
                    <i class="ri-shield-check-fill text-teal-600 text-sm"></i>
                    Verified Course Page
                </span>
                <!-- Enroll Now button redirects directly to the main courses checkout page -->
                <a href="https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43" class="text-xs sm:text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 px-4.5 py-2.5 rounded-xl shadow-lg shadow-teal-500/10 transition transform duration-150 hover:-translate-y-0.5">
                    Enroll Now
                </a>
            </div>
        </div>
    </div>

</div>