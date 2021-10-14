function inputElem(name,value) {
    let element = document.createElement("input");
    element.setAttribute("type", "hidden");
    element.setAttribute("name", name);
    element.setAttribute("value", value);
    return element;
}

function getParameterValue() {
    return (new URL(document.location)).searchParams.get('utm_medium');
}

document.querySelectorAll('form').forEach(
    form => {
        console.log(form);
        form.appendChild(inputElem("utm_medium", getParameterValue()));
    }
);