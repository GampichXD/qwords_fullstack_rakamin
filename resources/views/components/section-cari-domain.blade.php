
<style>
    .striped-text {
        font-size: 4rem; 
        background: linear-gradient(90deg, black 25%, white 25%, white 50%, black 50%, black 75%, white 75%);
        -webkit-background-clip: text;
        color: transparent;
        background-size: 200% 100%;
        animation: stripe-animation 2s linear infinite;
    }

    @keyframes stripe-animation {
        0% {
            background-position: 0% 0%;
        }
        100% {
            background-position: 100% 0%;
        }
    }
</style>

<section class="md:mt-0 bg-center bg-no-repeat bg-[url('https://qwords.com/v2/wp-content/themes/qwords/assets/images/shapes/search-domain-bg.png')] bg-orange-500 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:py-24">
        <h1 class="mb-4 text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-widest leading-none striped-text">Cari Nama Domain Anda</h1>
        <p class="mb-8 text-lg font-bold text-white lg:text-xl sm:px-16 lg:px-48 font-poppins">
            Dapatkan Promo Akhir Tahun Domain .ID! Register Baru Hanya Rp <br /> 110.000/Tahun!
            <br /> <span class="text-red-700 italic">Gunakan VOUCHER PROMOID2023</span>
        </p>
        <div class="flex flex-col w-[85%] gap-x-8 mx-auto space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <input type="text" id="large-input" class="block grow w-full px-4 py-5 text-base lg:text-xl text-gray-900 border border-gray-300 rounded-full bg-gray-50 sm:text-md focus:ring-gray-500 focus:border-gray-500" placeholder="Cari Domain Anda">

            <select id="large" class="block w-full sm:w-[200px] px-4 py-3 text-base lg:text-xl text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-gray-500 focus:border-gray-500 ">
                <option selected>.id</option>
                <option value=".com">.com</option>
                <option value=".xyz">.xyz</option>
            </select>

            <button type="button" class="px-6 w-full sm:w-[100px] md:w-[200px] py-2.5 text-base md:text-xl font-extrabold text-white inline-flex items-center justify-center bg-black rounded-full text-center">
                Cari
            </button>
        </div>
    </div>
</section>