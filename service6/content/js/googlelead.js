const forms = document.getElementsByTagName('form');

for (let i = 0; i < forms.length; i++) {
    forms[i].addEventListener( 'submit', function ( event ) {
        $.get('https://www.cloudflare.com/cdn-cgi/trace', function(data) {
        data = data.trim().split('\n').reduce(function(obj, pair) {
        pair = pair.split('=');
        return obj[pair[0]] = pair[1], obj;
        }, {});
        sendData(forms[i], data.ip);
        });
    });
}

function sendData(form, ip) {
    const XHR = new XMLHttpRequest(),
    FD  = new FormData(form),
    googleApiUrl = 'https://script.google.com/macros/s/AKfycbyzbL3IC7rt9MLuhsynmMRH3GzKl08TSfOnp08l6rkcVN_YH89wqiK3wBcLtyzYF8dA/exec';

    let country = null;

    for(var pair of FD.entries()) {
        if (pair[0] === 'country') {
            country = pair[1];
        }
     }

    data = {
        url: getUrlWithoutSearchAndHash(),
        country_code: country ? country : '',
        browser_locale: navigator.language.substring(0, 2),
        click_id: FD.click_id ? FD.click_id : '',
        ip: ip,
        service: 'lucky',
        subid1: getSubId(),
    };

    // Push our data into our FormData object
    for( name in data ) {
    FD.append( name, data[ name ] );
    }

    XHR.open( 'POST', googleApiUrl );
    XHR.send( FD );
}

function getUrlWithoutSearchAndHash() {
    return window.location.href.split('?')[0];
}

function getSubId() {
    return (new URL(document.location)).searchParams.get('subid1');
}

