function inputElem(name,value) {
    let element = document.createElement("input");
    element.setAttribute("type", "hidden");
    element.setAttribute("name", name);
    element.setAttribute("value", value);
    return element;
}

function getParameterD1Value() {
    return (new URL(document.location)).searchParams.get('d1');
}

document.querySelectorAll('form').forEach(
    form => {
        console.log(form);
        form.appendChild(inputElem("d1", getParameterD1Value()));
    }
);