// var listItems = document.getElementsByTagName("li");
// document.write("<p> O " + listItems.length + " elementos 'li'</p>");
// document.write("<p> Texto dentro dos elementos li: </p>");
// for (var i = 0; i < listItems.length; i++) {
// document.write("<p>" + listItems[i].innerHTML + "</p>");
// }

var secondListItems = document.getElementsByTagName("ul")[1].children;
document.write("<p> Texto dentro dos elementos li da segunda lista: </p>");
for (var i = 0; i < secondListItems.length; i++) {
    document.write("<p>" + secondListItems[i].innerHTML + "</p>");
}
