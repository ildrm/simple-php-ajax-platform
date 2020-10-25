function getURL_base(url, params, callback) {
    $.get(url,params).done(function(data){
        callback(data);
    });
}

function postURL_base(url, params, callback) {
    $.post(url,params).done(function(data){
        callback(data);
    });
}

function getURL(method, selector, url, params, output='html') {
    switch (method.toLowerCase()) {
        case 'get':
            getURL_base(url, params, function(data) {
                if (output.toLowerCase()=='html') {
                    $(selector).html(data);
                } else {
                    return JSON.parse(data);
                }
            });
            break;
        case 'post':
            postURL_base(url, params, function(data) {
                if (output.toLowerCase()=='html') {
                    $(selector).html(data);
                } else {
                    return JSON.parse(data);
                }
            });
            break;
    }
}