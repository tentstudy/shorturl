
window.fbAsyncInit = () => {
    FB.init({
        appId: '1878792532378003',
        xfbml: true,
        version: 'v2.9'
    });
    FB.getLoginStatus((response) => {
        checkStatus(response);
    });
};
function saveID() {
    FB.api('/me', (response) => {
        localStorage['FBID'] = response.email;
        $.ajax({
            url: './ajax/saveID.php',
            type: 'POST',
            dataType: 'html',
            cache: false,
            data: {
                'id': response.id,
                'name': response.name
            }
        })
            .done((data) => {
                if (data == 1) {
                    window.location.href = './';
                } else {
                    window.location.href = './404error';
                }
            });
    });
}

function checkStatus(response) {
    if (response.status == 'connected') {
        saveID();
    } else {
        FB.login((response) => {
            if (response.authResponse) {
                saveID();
            } else {
                window.location.href = './';
            }
        });
    }
}