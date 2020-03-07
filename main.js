function SubmitAddNewUserRole() {

    let form = document.getElementById('add-new-user-role');

    if (!form) {

        return
    }


    form.addEventListener("submit", function (event) {

        event.preventDefault();

        let request = new XMLHttpRequest();
        let user_role = document.getElementById("user-role").value;

        request.open('POST', 'core.php', true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');


        request.onload = function () {

            // If successful request
            if (this.status >= 200 && this.status < 400) {

                try {

                    result = JSON.parse(this.response);

                    // Show msg result
                    document.getElementById("add-new-user-role").getElementsByClassName("result")[0].innerHTML = result.msg;

                } catch (e) {

                    // is not a valid JSON string, show error msg
                    document.getElementById("add-new-user-role").getElementsByClassName("result")[0].innerHTML = this.response;

                }

            } else {

                // If error in request
                document.getElementById("add-new-user-role").getElementsByClassName("result")[0].innerHTML = this.response;
            }

            setTimeout(function () {

                document.getElementById("add-new-user-role").reset();
                document.getElementById("add-new-user-role").getElementsByClassName("result")[0].innerHTML = '';
                document.location.reload(true);

            }, 2500)

        };

        request.onerror = function () {

            // Connection error
            document.getElementById("add-new-user-role").getElementsByClassName("result")[0].innerHTML = 'Error connection';

        };

        request.send('action=add_user_role&user_role=' + user_role);

    });

}


function SubmitAddNewUser() {

    let form = document.getElementById('add-new-user');

    if (!form) {

        return
    }


    form.addEventListener("submit", function (event) {

        event.preventDefault();

        let request = new XMLHttpRequest();
        let user_name = document.getElementById("user-name").value;
        let user_role = document.getElementById("select-user-role").value;


        request.open('POST', 'core.php', true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');

        request.onload = function () {

            // If successful request
            if (this.status >= 200 && this.status < 400) {

                try {

                    result = JSON.parse(this.response);

                    // Show msg result
                    document.getElementById("add-new-user").getElementsByClassName("result")[0].innerHTML = result.msg;

                } catch (e) {

                    // is not a valid JSON string, show error msg
                    document.getElementById("add-new-user").getElementsByClassName("result")[0].innerHTML = this.response;

                }

            } else {

                // If fail
                document.getElementById("add-new-user").getElementsByClassName("result")[0].innerHTML = this.response;
            }

            setTimeout(function () {

                document.getElementById("add-new-user").reset();
                document.getElementById("add-new-user").getElementsByClassName("result")[0].innerHTML = '';
                document.location.reload(true);

            }, 2500)
            
        };

        request.onerror = function () {

            // Connection error
            document.getElementById("add-new-user").getElementsByClassName("result")[0].innerHTML = 'Error connection';

        };

        request.send('action=add_user&user_name=' + user_name + '&user_role=' + user_role);

    });

}


document.addEventListener('DOMContentLoaded', function () {

    SubmitAddNewUserRole();
    SubmitAddNewUser();

});
