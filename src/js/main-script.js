let h = document.documentElement,
    b = document.body,
    st = 'scrollTop',
    sh = 'scrollHeight',
    progress = document.querySelector('#progress'),
    scroll;
let scrollpos = window.scrollY;
let header = document.getElementById("header");

document.addEventListener('scroll', function () {
    if (!progress) return;
    /*Refresh scroll % width*/
    scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
    progress.style.setProperty('--scroll', scroll + '%');

    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 100) {
        header.classList.remove("hidden");
        header.classList.remove("fadeOutUp");
        header.classList.add("slideInDown");
    } else {
        header.classList.remove("slideInDown");
        header.classList.add("fadeOutUp");
        header.classList.add("hidden");
    }

});

// scroll to top	
const t = document.querySelector(".js-scroll-top");
if (t) {
    t.onclick = () => {
        window.scrollTo({top: 0, behavior: "smooth"})
    };
    const e = document.querySelector(".scroll-top path"), o = e.getTotalLength();
    e.style.transition = e.style.WebkitTransition = "none", e.style.strokeDasharray = `${o} ${o}`, e.style.strokeDashoffset = o, e.getBoundingClientRect(), e.style.transition = e.style.WebkitTransition = "stroke-dashoffset 10ms linear";
    const n = function () {
        const t = window.scrollY || window.scrollTopBtn || document.documentElement.scrollTopBtn,
            n = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight),
            s = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        let l = o - t * o / (n - s);
        e.style.strokeDashoffset = l
    };
    n();
    const s = 100;
    window.addEventListener("scroll", (function (e) {
        n();
        (window.scrollY || window.scrollTopBtn || document.getElementsByTagName("html")[0].scrollTopBtn) > s ? t.classList.add("is-active") : t.classList.remove("is-active")
    }), !1)
}

document.addEventListener('alpine:init', () => {
    Alpine.data( "sliderData", (slides) => ({
        slides,
        currentSlideIndex: 1,
        isPaused: false,
        autoplayIntervalTime: 4000,
        init(){
            this.autoplay()
        },
        previous() {
            if (this.currentSlideIndex > 1) {
                this.currentSlideIndex = this.currentSlideIndex - 1
            } else {
                // If it's the first slide, go to the last slide
                this.currentSlideIndex = this.slides.length
            }
        },
        next() {
            if (this.currentSlideIndex < this.slides.length) {
                this.currentSlideIndex = this.currentSlideIndex + 1
            } else {
                // If it's the last slide, go to the first slide
                this.currentSlideIndex = 1
            }
        },
        autoplay() {
            this.autoplayInterval = setInterval(() => {
                if (! this.isPaused) {
                    this.next()
                }
            }, this.autoplayIntervalTime)
        },
        setAutoplayInterval(newIntervalTime) {
            clearInterval(this.autoplayInterval)
            this.autoplayIntervalTime = newIntervalTime
            this.autoplay()
        },
    }));
})