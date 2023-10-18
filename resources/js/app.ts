import './bootstrap';

// Third Parties
import 'flowbite';

// Modules
import { Menu } from './modules/home';

// Utils
import { } from './utils/index';
import { ajax } from 'jquery';
import axios from 'axios';


(function(yourcode) {

    // The global jQuery object is passed as a parameter
    yourcode(jQuery, document);

    }(function($, document) {
        // The $ is now locally scoped
        $(function() {
            const Window = (window as any)
            var origin   = window.location.origin
            var url   = window.location
            // The DOM is ready!
            console.log('The DOM is ready!')
            const menu = new Menu();

            menu.openMenuMobile();
            menu.closeMenuMobile();
            menu.closeTooltip();

            window.addEventListener("scroll", (event) => {
                if (window.scrollY >= 280) {
                    $('.menu-head').addClass('active-w')
                    $('.menu-head-p').addClass('active')
                    $('.select-lang').css('color','#3C3C3C')
                    $('.nav-w span').css('background','#000000')
                    $('.w-a-w').addClass('change')
                    $('.menu-head .logo').attr('src',`${origin}/images/Solatec-Logo 2.svg`)
                } else {
                    $('.menu-head').removeClass('active-w')
                    $('.menu-head-p').removeClass('active')
                    $('.select-lang').css('color','white')
                    $('.nav-w span').css('background','white')    
                    $('.w-a-w').removeClass('change')
                    $('.menu-head .logo').attr('src',`${origin}/images/Solatec-Logo-White.png`)
                }
            });

            $('.products').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                // centerMode: true,
                centerPadding: '60px',
                prevArrow: '.slick-prev-p',
                nextArrow: '.slick-next-p',
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                ]
            });

            $('.inpirations').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 1,
              // centerMode: true,
              centerPadding: '60px',
              prevArrow: '.slick-prev-pi',
              nextArrow: '.slick-next-pi',
              responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
              ]
          });

            $('.banner').slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              autoplay:true,
              autoplaySpeed:2000,
              pauseOnHover: false,
              pauseOnFocus: false
          });
            

            $('.pic').each(function () {
              $(this).on('click',function () {
                $(this).addClass('active')
                $('.pic').not(this).removeClass('active')

                let src = $(this).data('image')
                $('.dy-image').attr('src',src)
                
              })
            })

            $('.ctab').each(function () {
              $(this).on('click',function () {
                let tab = $(this).data('tab')
                $(this).addClass('active')
                $('.ctab').not(this).removeClass('active')
                

                $('.tab-content').each(function () {
                  if ($(this).data('tab') === tab) {
                    $(this).addClass('active')
                    $('.tab-content').not(this).removeClass('active')
                  }
                })
                                
              })
            })

            $('.search').on('click',function () {
              $('.search-cover').addClass('active')
              $('.input-search').addClass('active')
              $('.search-content').css('padding','1.5rem 2.5rem')
              $('.list-search-title').css('padding-bottom','1rem')
              $('.list-search-title').css('margin-bottom','1.5rem')
              $('.list-search-title h3').css('display','block')
              $('.list-search-title a').css('display','block')
              $('.list-search-result').css('padding-bottom','2rem')
              $('.list-search-result-inspirations').css('padding-bottom','2rem')
              $('.menu-mobile').removeClass('show')
              $('#menu-hamburger').removeClass( "open" );
              $('.menu-mobile-overlay').removeClass( "show" );
              $('body').css('overflow','auto')

              if ( $('.input-search').hasClass('active')) {
                $('body').css('overflow','hidden')
              } else {
                  $('body').css('overflow','auto')
              }

            })

            $('.close-search').on('click',function () {
              $('.search-cover').removeClass('active')
              $('.input-search').removeClass('active')
              $('.search-content').css('padding','0')
              $('.list-search-result').empty();
              $('.list-search-result-inspirations').empty();
              $('.list-search-title').css('padding-bottom','0')
              $('.list-search-title').css('margin-bottom','0')
              $('.list-search-title h3').css('display','none')
              $('.list-search-title a').css('display','none')
              $('.search-content').css('display','none')
              $('body').css('overflow','auto')
            })

            const searchDelay = 500; // milliseconds
            let s;

           
            $('.search-all').on('input', function() {
              clearTimeout(this.searchTimeout);
              s = $(this).val();
              if ($(this).val().split('').length > 1) {
                this.searchTimeout = setTimeout(() => {
                  axios.post('/api/search', {
                    search: $(this).val(),
                  })
                  .then(function (response) {
                    let products = response.data.products
                    let inspirations = response.data.inspirations
                    let images = response.data.images
                    $('.search-content').css('display','flex')
  
                    if (products.length > 0 || inspirations.length > 0) {
                      // empty the list-search-result element
                      $('.list-search-result').empty();
                      $('.list-search-result-inspirations').empty();
                      // iterate over the products and images
                      products.map((val, i) => {
                        images.map((val2, i2) => {
                          if (val2.products_id === val.id && val2.role === 'image' && val2.mediable_type === 'App\\Models\\Product') {
                            // create a new element for the product
                            const slug = val.title.split(' ').join('-').toLowerCase()
                            const element = $(`<a href="${origin}/product/${slug}" class="text-center"><img class="h-450 w-full object-cover mb-2" src="/img/${val2.uuid}?fm=0&q=80&fit=max&crop=2500%2C3335%2C0%2C0"/> <p class="uppercase">${val.title}</p> </a>`);
                            // append the element to the list-search-result element
  
                            $('.list-search-result').append(element);
                          }
                        });
                      });
  
                      inspirations.map((val, i) => {
                        images.map((val2, i2) => {
                          if (val2.products_id === val.id && val2.role === 'image' && val2.mediable_type === 'App\\Models\\Inspiration') {
                            // create a new element for the product
                            const regex = /_|\s/g;
                            const slug = val.title.replace(regex, '-').replace(/([^a-zA-Z0-9-])/g, '');
                            const element = $(`<a href="${origin}/inspiration/${slug}" class="text-center"><img class="h-450 w-full object-cover mb-2" src="/img/${val2.uuid}?fm=0&q=80&fit=max&crop=2500%2C3335%2C0%2C0"/> <p class="uppercase">${val.title}</p> </a>`);
                            // append the element to the list-search-result element
                            $('.list-search-result-inspirations').append(element);
                          }
                        });
                      });
                    
                    } else {
                      // show a no results message
                      $('.list-search-result').empty();
                      $('.list-search-result-inspirations').empty();
                      $('.list-search-result').html(`<div class="px-10 py-6"><p>No results could be found</p></div>`);
                      $('.list-search-result-inspirations').html(`<div class="px-10 py-6"><p>No results could be found</p></div>`);
                    }
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }, searchDelay);

              } else {
                $('.search-content').css('display','none')
              }
            });

            $('.view-s-p').on('click',function () {
              window.location.href = `${origin}/search?search=${s}`;
            })

            $('.search-all').on('keydown', function(event) {
              if (event.which === 13) {
                window.location.href = `${origin}/search?search=${s}`;
              }
            });

            $('.search-pr').on('input', function() {
              s = $(this).val();
            });

            $('.search-pr').on('keydown', function(event) {
              if (event.which === 13) {
                window.location.href = `${origin}/products?search=${s}`;
              }
            });

            $('.search-all2').on('input', function() {
              s = $(this).val();
            });

            $('.search-all2').on('keydown', function(event) {
              if (event.which === 13) {
                window.location.href = `${origin}/search?search=${s}`;
              }
            });
            

        });
        console.log('The DOM may not be ready!')

    
        // The rest of your code goes here!

    }
));