$(document).ready(function() {

  $('#loadingScreen').removeClass('d-flex').addClass('d-none');
  $('#content').removeClass('d-none').addClass('d-block');
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