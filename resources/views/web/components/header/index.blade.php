@section('header')
    <div class="relative z-40">
        <header class="text-center flex lg:flex-col items-center relative h-[123px] border-b border-[#dddddd] bg-white px-6 lg:px-0 z-40">
            <img src="/images/HeaderBG.png"  class="absolute left-0 w-full h-full z-10 object-cover"/>

            <div class="flex justify-between w-full lg:justify-center items-center relative z-40 h-[83px]">
                <a href="{{route('home')}}"><img src="/images/Logo.png" alt="logo" class="w-[150px]"/></a>
                <div class="hidden lg:flex absolute right-10 gap-5">
                    <div class="block search cursor-pointer"><img src="/images/Search.svg" /></div>
                    <a href="{{route('officialStore')}}" class="block"><img src="/images/Store.svg" /></a>
                    <a target="_blank" rel="noopener" href="https://www.instagram.com/kkawler" class="block"><img src="/images/IG.svg" /></a>
                </div>

                <div id="menu-hamburger" class="block md:hidden">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
            <div class="hidden lg:block">
                <ul class="flex justify-center relative z-40">
                    <li class="pb-4 px-[1.5rem] {{ Request::is('/') ? 'border-b border-black' : '' }}" ><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('home')}}">Home</a></li>
                    <li class="pb-4 px-[1.5rem] {{ Request::is('about') ? 'border-b border-black' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('about')}}">About</a></li>
                    <li class="pb-4 px-[1.5rem] {{ Request::is('products') || Request::is('product') ? 'border-b border-black' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('products')}}">Products</a></li>
                    <li class="pb-4 px-[1.5rem] {{ Request::is('inspiration') ? 'border-b border-black' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('inspiration')}}">Inspiration</a></li>
                    <li class="pb-4 px-[1.5rem] {{ Request::is('contact') ? 'border-b border-black' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>

            <div class="menu-mobile h-screen w-[80%] fixed bg-[#fcfcfc] z-50 top-0 left-0 translate-x-[-100%] bg-no-repeat bg-cover bg-center">
                <ul class="flex flex-col justify-start p-8 pb-40 mt-10">
                    <li class="pb-5 mb-5  text-start border-b border-[#00000024] {{ Request::is('/') ? 'border-b ' : '' }}" ><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('home')}}">Home</a></li>
                    <li class="pb-5 mb-5  text-start border-b border-[#00000024] {{ Request::is('about') ? 'border-b ' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('about')}}">About</a></li>
                    <li class="pb-5 mb-5  text-start border-b border-[#00000024] {{ Request::is('products') || Request::is('product') ? 'border-b ' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('products')}}">Products</a></li>
                    <li class="pb-5 mb-5  text-start border-b border-[#00000024] {{ Request::is('inspiration') ? 'border-b ' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('inspiration')}}">Inspiration</a></li>
                    <li class="pb-5 mb-5  text-start border-b border-[#00000024] {{ Request::is('contact') ? 'border-b ' : '' }}"><a class="uppercase text-[14px] text-[#3C3C3B]" href="{{route('contact')}}">Contact</a></li>
                </ul>

                <div class="flex gap-5 p-8">
                    <a href="{{route('officialStore')}}" class="block"><img src="/images/Store.svg" /></a>
                    <a class="block"><img src="/images/IG.svg" /></a>
                    <div class="block search cursor-pointer"><img src="/images/Search.svg" /></div>
                </div>
            </div>

            <div class="menu-mobile-overlay"></div>

        </header>
        <div class="absolute top-[0] left-0 transition-all w-full z-30 input-search bg-white ">
            <div class="py-6 px-10 flex">
                <img src="/images/Search Icon.png" alt="search icon" srcset="" class="object-contain w-[17px] mr-4">
                <input id="my-input" name="search" type="text" placeholder="SEARCH..." class="search-all w-full border-none font-EYECHART_REGULAR si px-0">
                <div class="close-search flex items-center cursor-pointer"><img src="/images/close-icon.svg" alt="" srcset=""></div>
            </div>
            <div class="hidden search-content gap-6 overflow-auto max-h-[500px]">
                <div class="basis-[60%]">
                    <div class="list-search-title border-b border-[#DDDDDD] flex justify-between">
                        <h3 class="hidden">PRODUCTS</h3>
                        <a  class="hidden view-s-p cursor-pointer">VIEW ALL</a>
                    </div>
                    <div class="list-search-result grid grid-cols-3 gap-4"></div>
                </div>
                <div class="basis-[40%]">
                    <div class="list-search-title border-b border-[#DDDDDD] flex justify-between">
                        <h3 class="hidden">INSPIRATIONS</h3>
                        <a  class="hidden view-s-p cursor-pointer">VIEW ALL</a>
                    </div>
                    <div class="list-search-result-inspirations grid grid-cols-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#00000080] fixed top-0 left-0 w-full h-full z-30 hidden search-cover"></div>


@endsection