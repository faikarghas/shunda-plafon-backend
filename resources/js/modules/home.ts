import { toInteger } from "lodash";

declare global {
    interface Window {
        axios:any;
    }
}
var base_url = location.origin


export class Menu {
    openMenuMobile(): void {
        $('#menu-hamburger').on('click',function (e) {
            $('.menu-mobile').toggleClass( "show" );
            $('.menu-mobile-overlay').toggleClass( "show" );
            $('#menu-hamburger').toggleClass( "open" );

            if ( $('.menu-mobile').hasClass('show')) {
                $('body').css('overflow','hidden')
            } else {
                $('body').css('overflow','auto')
            }
            
        })
    }

    closeMenuMobile(): void {
        $('.menu-mobile .close').on('click',function (e) {
            $('.menu-mobile').removeClass('show')
            $('.menu-mobile-overlay').removeClass( "show" );
            $('body').css('overflow','auto')
        })
    }

    closeTooltip(): void {
        $('.close-tooltip').on('click',function (e) {
            $('.lengkapi_pop').hide()
        })
    }
}


