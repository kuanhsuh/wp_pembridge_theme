$(document).ready(function() {

  $('#loadingScreen').removeClass('d-flex').addClass('d-none');
  $('#content').removeClass('d-none').addClass('d-block');

  //Brands Page
  $("#brand1").click(function(){
    var tooltiptext = $("#tooltiptext1")
    tooltiptext.hasClass("invisible") ? tooltiptext.removeClass( "invisible" ) : tooltiptext.addClass( "invisible" )
    }
  );
  $("#brand2").click(function(){
    var tooltiptext = $("#tooltiptext2")
    tooltiptext.hasClass("invisible") ? tooltiptext.removeClass( "invisible" ) : tooltiptext.addClass( "invisible" )
    }
  );
  $("#brand3").click(function(){
    var tooltiptext = $("#tooltiptext3")
    tooltiptext.hasClass("invisible") ? tooltiptext.removeClass( "invisible" ) : tooltiptext.addClass( "invisible" )
    }
  );
  $("#brand4").click(function(){
    var tooltiptext = $("#tooltiptext4")
    tooltiptext.hasClass("invisible") ? tooltiptext.removeClass( "invisible" ) : tooltiptext.addClass( "invisible" )
    }
  );
  $("#brand5").click(function(){
    var tooltiptext = $("#tooltiptext5")
    tooltiptext.hasClass("invisible") ? tooltiptext.removeClass( "invisible" ) : tooltiptext.addClass( "invisible" )
    }
  );
  $("#brand6").click(function(){
    var tooltiptext = $("#tooltiptext6")
    tooltiptext.hasClass("invisible") ? tooltiptext.removeClass( "invisible" ) : tooltiptext.addClass( "invisible" )
    }
  );

  if(window.innerWidth < 768) {
    $("#brand1").off("click");
    $("#brand2").off("click");
    $("#brand3").off("click");
    $("#brand4").off("click");
    $("#brand5").off("click");
    $("#brand6").off("click");
    $("#tooltiptext1").removeClass( "invisible" )
    $("#tooltiptext2").removeClass( "invisible" )
    $("#tooltiptext3").removeClass( "invisible" )
    $("#tooltiptext4").removeClass( "invisible" )
    $("#tooltiptext5").removeClass( "invisible" )
    $("#tooltiptext6").removeClass( "invisible" )
  }

  //Products - Main Menu
  $("#hover-products").click(function(){
    $("#products-brands").addClass("invisible")
    $("#products-brands").addClass("d-none")
    //reset submenu
    $("#submenu").addClass("invisible")
    $("#chair").addClass("d-none")
    $("#table").addClass("d-none")
    $("#storage").addClass("d-none")
    if ($("#products-products").hasClass("invisible")){
      $("#products-products").removeClass("invisible")
      $("#products-products").removeClass("d-none")
    } else {
      $("#products-products").addClass("invisible")
      $("#products-products").addClass("d-none")
    }
  })

  $("#click-brands").click(function(){
    $("#main-menu").removeClass("invisible")
    $("#product").addClass("d-none")
    //reset submenu
    $("#submenu").addClass("invisible")
    $("#chair").addClass("d-none")
    $("#table").addClass("d-none")
    $("#storage").addClass("d-none")
    if ($("#brand").hasClass("d-none")){
      $("#brand").removeClass("d-none")
    } else {
      $("#brand").addClass("d-none")
      $("#main-menu").addClass("invisible")
    }
  })

  $("#click-products").click(function(){
    $("#main-menu").removeClass("invisible")
    $("#brand").addClass("d-none")
    //reset submenu
    $("#submenu").addClass("invisible")
    $("#chair").addClass("d-none")
    $("#table").addClass("d-none")
    if ($("#product").hasClass("d-none")){
      $("#product").removeClass("d-none")
    } else {
      $("#product").addClass("d-none")
      $("#main-menu").addClass("invisible")
    }
  })

  // Storages - SubMenu
  $("#main-storage").click(function(){
    if ($("#storage").hasClass("d-none")){
      $("#submenu").removeClass("invisible")
      $("#table").addClass("d-none")
      $("#chair").addClass("d-none")
      $("#storage").removeClass("d-none")
    } else {
      $("#submenu").addClass("invisible")
      $("#storage").addClass("d-none")
    }
  })
  // Chair - SubMenu
  $("#main-chair").click(function(){
    if ($("#chair").hasClass("d-none")){
      $("#submenu").removeClass("invisible")
      $("#table").addClass("d-none")
      $("#storage").addClass("d-none")
      $("#chair").removeClass("d-none")
    } else {
      $("#submenu").addClass("invisible")
      $("#chair").addClass("d-none")
    }
  })

  // Table - SubMenu
  $("#main-table").click(function(){
    if ($("#table").hasClass("d-none")){
      $("#submenu").removeClass("invisible")
      $("#chair").addClass("d-none")
      $("#storage").addClass("d-none")
      $("#table").removeClass("d-none")
    } else {
      $("#submenu").addClass("invisible")
      $("#table").addClass("d-none")
    }
  })

  });