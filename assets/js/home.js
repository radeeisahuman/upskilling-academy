/* ============================================
   BUNDLE CARD COUNTDOWN (H : M : S)
   Loaded on every page with a bundle card. Ticks every timer marked
   data-bundle-timer (home bundle CTA, single course "Frequently Bought
   Together", all bundles, single bundle "Learners also bought").

   - data-ends="2026-09-30T23:59:59+01:00" on the timer: counts down to
     that moment (e.g. the WooCommerce sale end) and stops at 00:00:00.
   - no data-ends: placeholder - a 24-hour loop that ends at 00:00 UK
     time, so every visitor sees the same time left.

   Markup it expects (both card prefixes use it):
     <div class="...-timer" data-bundle-timer>
       <div class="...-timer-unit"><span>04</span><sub>H</sub></div>
       <span class="...-timer-sep">:</span>
       <div class="...-timer-unit"><span>36</span><sub>M</sub></div>
       ...S
     </div>
   ============================================ */
(function () {
    var HOUR = 3600000;

    // UTC instant of 00:00 UK time on a date. London is UTC+0 (GMT) or
    // UTC+1 (BST); the UK hour at 00:00 UTC says which.
    function ukMidnight(y, m, d) {
        var utcMidnight = Date.UTC(y, m, d);
        var ukHour = parseInt(new Intl.DateTimeFormat('en-GB', {
            timeZone: 'Europe/London', hour: 'numeric', hourCycle: 'h23'
        }).format(utcMidnight), 10);
        return utcMidnight - ukHour * HOUR;
    }

    // Next 00:00 UK time after now
    function nextUkMidnight(now) {
        var parts = {};
        new Intl.DateTimeFormat('en-GB', {
            timeZone: 'Europe/London', year: 'numeric', month: 'numeric', day: 'numeric'
        }).formatToParts(now).forEach(function (p) { parts[p.type] = parseInt(p.value, 10); });
        return ukMidnight(parts.year, parts.month - 1, parts.day + 1);
    }

    function pad(n) { return (n < 10 ? '0' : '') + n; }

    function init() {
        var timers = [];

        document.querySelectorAll('[data-bundle-timer]').forEach(function (el) {
            var nums = el.querySelectorAll(':scope > div > span');
            if (nums.length < 3) return;
            var fixed = el.getAttribute('data-ends');
            var fixedEnd = fixed ? Date.parse(fixed) : NaN;
            el.setAttribute('role', 'timer');
            if (!el.hasAttribute('aria-label')) el.setAttribute('aria-label', 'Offer ends in');
            timers.push({ h: nums[0], m: nums[1], s: nums[2], fixedEnd: fixedEnd, end: 0 });
        });

        if (!timers.length) return;

        function tick() {
            var now = Date.now();
            timers.forEach(function (t) {
                var left;
                if (!isNaN(t.fixedEnd)) {
                    left = Math.max(0, t.fixedEnd - now);
                } else {
                    if (t.end <= now) t.end = nextUkMidnight(now);
                    left = t.end - now;
                }
                var s = Math.floor(left / 1000);
                t.h.textContent = pad(Math.floor(s / 3600));
                t.m.textContent = pad(Math.floor(s % 3600 / 60));
                t.s.textContent = pad(s % 60);
            });
        }

        tick();
        setInterval(tick, 1000);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
