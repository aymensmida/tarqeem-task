function submitAndAction(form,btn) {
    disableButtonAndShowSpinner(btn);
    document.getElementById(form).submit();
}

function disableButtonAndShowSpinner(buttonId) {
    var button = document.getElementById(buttonId);

    if (button) {
        button.disabled = true;
        var spinner = findSpinnerInButton(button);

        if (spinner) {
            spinner.style.display = "inline-block";
        }
    }
}

function findSpinnerInButton(button) {
    for (var i = 0; i < button.childNodes.length; i++) {
        var childNode = button.childNodes[i];
        if (childNode.nodeType === 1 && childNode.classList.contains('spinner-border')) {
            return childNode;
        }
    }
    return null;
}


function hideSpinnerAndShowContent() {
    setTimeout(function() {
        document.getElementById('loading-spinner').classList.add('d-none');
        document.getElementById('content-container').style.transition = 'opacity 0.5s';
        document.getElementById('content-container').style.opacity = '1';
    }, 600);
}

hideSpinnerAndShowContent();
