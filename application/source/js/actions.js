// var myDropdown = document.getElementById('dropdownLocation')
// myDropdown.addEventListener('show.bs.dropdown', function () {
//     // console.log("hello!");

// })
var b_location1 = document.getElementById('loc1');
var b_location2 = document.getElementById('loc2');
var b_location3 = document.getElementById('loc3');
b_location1.addEventListener("click", function () {
    // console.log("hello!");
    document.getElementById("loc1_ho").style.display = "block";
    document.getElementById("loc2_ho").style.display = "none";
    document.getElementById("loc3_ho").style.display = "none";
    // maps
    document.getElementById("map_loc1").style.display = "block";
    document.getElementById("map_loc2").style.display = "none";
    document.getElementById("map_loc3").style.display = "none";

})
b_location2.addEventListener("click", function () {
    // console.log("hello!");
    document.getElementById("loc1_ho").style.display = "none";
    document.getElementById("loc2_ho").style.display = "block";
    document.getElementById("loc3_ho").style.display = "none";
    // maps
    document.getElementById("map_loc1").style.display = "none";
    document.getElementById("map_loc2").style.display = "block";
    document.getElementById("map_loc3").style.display = "none";

})
b_location3.addEventListener("click", function () {
    // console.log("hello!");
    document.getElementById("loc1_ho").style.display = "none";
    document.getElementById("loc2_ho").style.display = "none";
    document.getElementById("loc3_ho").style.display = "block";
    // maps
    document.getElementById("map_loc1").style.display = "none";
    document.getElementById("map_loc2").style.display = "none";
    document.getElementById("map_loc3").style.display = "block";

})