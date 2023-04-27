var list=document.querySelector(".bi-list")
var x=document.querySelector(".bi-x-lg")
var menuBar=document.querySelector(".row")

function changeList(){
    list.style.display = 'none';
    x.style.display = 'flex'
    menuBar.style.display= 'flex'
}

function changeX(){
    list.style.display = 'flex';
    x.style.display = 'none'
    menuBar.style.display= 'none'
}

function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }


//   const htmlEl = document.getElementsByTagName('html')[0];

// const toggleTheme = (theme) => {
//     htmlEl.dataset.theme = theme;
// }


