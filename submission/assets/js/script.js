// mendapatkan elemen column
var elements = document.getElementsByClassName("column");

// deklarasi variabel looping
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// dua gambar  sisi per sisi
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// empat gambar sisi per sisi
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}


var header = document.getElementById("myProduct");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

$('.page-scroll').on('click',function(e){
  var tujuan = $(this).attr('href');
  var elementTujuan = $(tujuan);
  $('body').animated({
    scrollTop: elementTujuan.offset().top - 50
  },1000);
  e.preventDefault();
});