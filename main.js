function switcher () {
    request();
}

function request() {
    var request = new XMLHttpRequest();
    request.open("POST", "attributes.xml", true);
    request.onload = function() {
        create(this);
    }
    request.send();
}

function create(xml) {
    var xmlDoc = xml.responseXML;
    var selected = $('.types-list').val();
    var view = "";
    if (selected != "") {
        var x = xmlDoc.getElementsByTagName("form");
        for (var i = 0; i<x.length; i++) {
            if (selected == x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue) {
                for (j=0; j<x[i].getElementsByTagName("attribute").length; j++) {
                    view += "<label>" + x[i].getElementsByTagName("attribute")[j].childNodes[0].nodeValue + 
                    "</label><input type=" + "text" + " name=" + 
                    x[i].getElementsByTagName("attribute")[j].childNodes[0].nodeValue + "><br>";
                }
                view += "<p>" + x[i].getElementsByTagName("info")[0].childNodes[0].nodeValue + "</p>";
            }
        }
    }
    $('.special-attribute-form').html(view);
}


