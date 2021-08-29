( function() {

  //Mmenu-light
  document.addEventListener(
    "DOMContentLoaded", () => {
      const menu = new MmenuLight(
        document.querySelector( "#main-menu" ),
        "(max-width: 992px)"
      );

      const navigator = menu.navigation();
      const drawer = menu.offcanvas();

      document.querySelector( "a[href='#main-menu']" )
        .addEventListener( "click", ( evnt ) => {
          evnt.preventDefault();
          drawer.open();
        });
    }
  );

  //Tiny slider
  if($('.slider-home').length) {
    tns({
      container: '.slider-home',
      items: 1,
    });
  }
}() );
