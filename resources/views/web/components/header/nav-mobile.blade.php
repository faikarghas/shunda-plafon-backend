<div class="hidden menu-mobile h-screen w-[80%] fixed bg-[#fcfcfc] z-50 top-0 left-0 bg-no-repeat bg-cover bg-center" >
    
    <ul class="flex flex-col p-8 mb-14">
      <li class="flex items-center mb-4 pb-4 bg-none pl-0">
          <a href="{{route('home')}}" class="text-black {{ Request::is('/') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[25px]" aria-current="page">@if (App::getLocale() == 'id') Beranda  @else Home  @endif</a>
      </li>
      <li class="flex items-center mb-4 pb-4 bg-none pl-0 open-sub">
          <a class=" text-black {{ Request::is('perusahaan-kami') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[25px]" aria-current="page">@if (App::getLocale() == 'id') Perusahaan Kami  @else Our Company  @endif</a>
      </li>
      <li class="hidden mb-4 pb-4 bg-none navsub flex-col pl-6">
        <a href="{{route('company')}}" class="mb-4 pb-4 text-[#10312B] {{ Request::is('perusahaan-kami') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[20px]" aria-current="page">@if (App::getLocale() == 'id') Perusahaan Kami  @else  Our Company  @endif</a>
        <a href="/perusahaan-kami#bisnis-kami" class="mb-4 pb-4 text-[#10312B] {{ Request::is('perusahaan-kami') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[20px]" aria-current="page">@if (App::getLocale() == 'id') Bisnis Kami  @else Our Business  @endif</a>
        <a href="/perusahaan-kami#keberlanjutan-kami" class="text-[#10312B] {{ Request::is('perusahaan-kami') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[20px]" aria-current="page">@if (App::getLocale() == 'id') Keberlanjutan Kami  @else Our Sustainability  @endif</a>
      </li>
      <li class="flex items-center mb-4 pb-4 bg-none pl-0">
          <a href="{{route('product')}}" class="text-black {{ Request::is('produk') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[25px]" aria-current="page">@if (App::getLocale() == 'id') Produk  @else Product  @endif</a>
      </li>
      <li class="flex items-center mb-4 pb-4 bg-none pl-0">
        <a href="/#sistem-plts" class="text-black {{ Request::is('sistem-plts') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[25px] plts" aria-current="page">@if (App::getLocale() == 'id') Sistem PLTS  @else PLTS System  @endif</a>
      </li>
      <li class="flex items-center pb-4 bg-none pl-0">
        <a href="/#hubungi-kami" class="text-black {{ Request::is('hubungi-kami') ? 'font-medium' : 'font-CircularStdLight' }} leading-[25px] block font-head text-[25px] hk" aria-current="page">@if (App::getLocale() == 'id') Hubungi Kami  @else Contact Us  @endif</a>
      </li>

     
    </ul>
    <ul class="p-8 flex">
      <li class="flex items-center bg-none pl-0">
        <a href="{{ route('lang.switch', 'en') }}" class="text-black font-medium block font-head text-[25px] leading-none" aria-current="page">EN</a>
      </li>
      <li class="flex items-center bg-none pl-0 bg-black mx-3 w-[1.5px]"></li>
      <li class="flex items-center bg-none pl-0">
        <a href="{{ route('lang.switch', 'id') }}" class="text-black font-medium block font-head text-[25px] leading-none" aria-current="page">ID</a>
      </li>
    </ul>
  </select>
  </div>