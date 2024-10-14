<x-main>
    <x-slot name='title'>
        Homepage - Videogameshop
    </x-slot>
    <main>
        <header>
            <div>
                <!-- Slider main container -->
                <div class="swiper mt-md-5 pt-md-5">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide text-center"><img class="slide1" src="/images/promo.png" alt=""></div>
                        <div class="swiper-slide text-center"><img class="slide2" src="/images/sale.png" alt=""></div>
                        {{-- <div class="swiper-slide">Slide 3</div> --}}
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </header>
    </main>
</x-main>