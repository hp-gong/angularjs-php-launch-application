var oinfo1 = document.getElementById('title_logo');
var oinfo2 = document.getElementById('info_1');
var oinfo3 = document.getElementById('info_2');
var oinfo4 = document.getElementById('footer1');
var oinfo5 = document.getElementById('footer2');
window.onload = jInfo1;
function submitData(fdata) {
var xhttp = new XMLHttpRequest();
xhttp.onload = function () {
console.log(xhttp.responseText);
jInfo1();
}

xhttp.open(fdata.method, fdata.action, true);
xhttp.send(new FormData(fdata));
//console.log(fdata.method);
return false;
}

function jInfo1() {
var ajaxhttp = new XMLHttpRequest();
var url = "launch_admin/include/select_header.php";
ajaxhttp.open("GET", url, true);
ajaxhttp.setRequestHeader("content-type", "application/json");
ajaxhttp.onreadystatechange = function () {
oinfo1.innerHTML = "";
oinfo2.innerHTML = "";
oinfo3.innerHTML = "";
oinfo4.innerHTML = "";
oinfo5.innerHTML = "";

if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200) {
var jcontent = JSON.parse(ajaxhttp.responseText);
for (var myObj in jcontent) {
oinfo1.innerHTML += '<div id="fh5co-logo"><a href="index.html">' + jcontent[myObj].title + '</a></div>';
oinfo2.innerHTML += '<h1>' + jcontent[myObj].info1 + '</h1>';
oinfo2.innerHTML += '<h2>' + jcontent[myObj].info2 + '</h2>';
oinfo3.innerHTML += '<h2>' + jcontent[myObj].info3 + '</h2>';
oinfo4.innerHTML += '<small class="block">' + jcontent[myObj].footer1 + '</small>';
oinfo5.innerHTML += '<small class="block">' + jcontent[myObj].footer2 + '</small>';
}
}

}

ajaxhttp.send();

}
