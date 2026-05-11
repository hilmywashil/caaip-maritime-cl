<script>
    window.addEventListener("scroll", function () {

        const header = document.getElementById("headerSticky");

        if (window.scrollY > 150) {
            header.classList.add("show");
        } else {
            header.classList.remove("show");
        }

    });
</script>
<script>

    const scrollBtn = document.getElementById("scrollTop");
    const circle = document.querySelector("#scrollTop circle");

    const circumference = 138;

    window.addEventListener("scroll", function () {

        let scrollTop = document.documentElement.scrollTop;
        let scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

        let progress = scrollTop / scrollHeight;

        let offset = circumference - progress * circumference;

        circle.style.strokeDashoffset = offset;

        if (scrollTop > 300) {
            scrollBtn.classList.add("show");
        } else {
            scrollBtn.classList.remove("show");
        }

    });

    scrollBtn.addEventListener("click", function () {

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    });

</script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
</script>
<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        grabCursor: true,

        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },
    });
</script>