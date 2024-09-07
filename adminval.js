function InvalidMsg1(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Enter a Description is necessaary!');
    } else if (textbox.value.length <= '7') {
        textbox.setCustomValidity('Please enter atleast 8 charcters!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg2(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Enter a password is necessaary!');
    } else if (textbox.value.length <= '7') {
        textbox.setCustomValidity('Please enter atleast 8 charcters!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg3(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Enter a Package name is necessaary!');
    } else if (textbox.value.length <= '3') {
        textbox.setCustomValidity('Please enter atleast 3 charcters!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}


function InvalidMsg4(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Entering an email-id is necessary!');
    } else if (textbox.validity.typeMismatch) {
        textbox.setCustomValidity('Please enter an email address which is valid!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg5(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Please Select a Category !');
    } else if (textbox.value.length <= '2') {
        textbox.setCustomValidity('Please select a valid category!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg6(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Enter a Name is necessaary!');
    } else if (textbox.value.length <= '2') {
        textbox.setCustomValidity('Please enter a valid name!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg7(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Enter a Package link (GitHub or website)!');
    } else if (textbox.value.length <= '4') {
        textbox.setCustomValidity('Please enter atleast 5 charcters!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg8(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Enter Developer Info!');
    } else if (textbox.value.length <= '3') {
        textbox.setCustomValidity('Please enter  Detailed!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsg9(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Please Select a Icon!');
    } else if (textbox.value ==='') {
        textbox.setCustomValidity('Please Select!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg10(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Please Enter a Category !');
    } else if (textbox.value.length <= '2') {
        textbox.setCustomValidity('Please Enter a valid category!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMsg11(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Question Cannot Empty!');
    } else if (textbox.value.length <= '3') {
        textbox.setCustomValidity('Please enter atleast 3 charcters!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsg12(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Answer Cannot Empty!');
    } else if (textbox.value.length <= '4') {
        textbox.setCustomValidity('Please enter atleast 4 charcters!');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}