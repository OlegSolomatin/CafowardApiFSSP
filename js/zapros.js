/*var url = "https://api-ip.fssprus.ru/api/v1.0/result?token=0iJ8kgQqCoTe&task=f2c38213-8ca1-4d7c-aa15-53eb05fa0578";

var xhr = new XMLHttpRequest();
xhr.open("GET", url);

xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        console.log(xhr.status);
        console.log(xhr.responseText);
    }};

xhr.send();*/

var url = "https://api-ip.fssprus.ru/api/v1.0/search/physical?token=0iJ8kgQqCoTe&region=50&firstname=Олег&secondname=Соломатин&lastname=Игоревич&birthdate=26.06.1994";

var xhr = new XMLHttpRequest();
xhr.open("GET", url);

xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        console.log(xhr.status);
        console.log(xhr.responseText);
    }};

xhr.send();