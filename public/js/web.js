function getUrlParameters() {
    const url = window.location.href;

    const queryString = url.split('?')[1];
    if (!queryString) {
        return {};
    }

    const params = queryString.split('&');
    const result = {};

    params.forEach(param => {
        const [key, value] = param.split('=');
        result[decodeURIComponent(key)] = decodeURIComponent(value || '');
    });

    return result;
}

function getFormData(form){      
    var formData = new FormData(form);
    var jsonData = {};

    formData.forEach((value, key) => {
        jsonData[key] = value.trim() ? value : null;
    });

    return jsonData;
}