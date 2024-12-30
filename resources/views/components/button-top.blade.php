<button id="btn-Top" type="button" class="hidden right-3 bottom-5 lg:right-7 lg:bottom-7 rounded-full h-13 w-13 lg:h-16 lg:w-16 bg-blue-500 p-2 active:text-white active:bg-orange-400 focus:outline-none focus:ring focus:ring-violet-300 !transition-all" onclick="goTop(this)">
    <svg class="h-8 w-8 lg:w-10 lg:h-10 mx-auto text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
    </svg>
</button>

<script>
    const btnTop = document.getElementById('btn-Top');
    document.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            btnTop.classList.remove('hidden');
            btnTop.classList.add('fixed');
        } else {
            btnTop.classList.remove('fixed')
            btnTop.classList.add('hidden')
        }
    })

    function goTop(event) {
        if (window.scrollY) {
            window.scroll(0, 0); // reset the scroll position to the top left of the document.
        }
        // jika sudah diatas lakukan display none
        event.classList.remove('fixed')
        event.classList.add('hidden')
    }
</script>