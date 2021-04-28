document.addEventListener("DOMContentLoaded", function(event) 
{
    
    document.getElementById('add_record').onclick = function()
    {
        valid = true;

        first_name = document.getElementById('first_name').value;
        last_name = document.getElementById('last_name').value;
        email = document.getElementById('email').value;
        mobile = document.getElementById('mobile').value;

        if(first_name == '')
        {
            document.getElementById('first_name').classList.add('is-invalid');
            valid = false;
        }
        else
        {
            document.getElementById('first_name').classList.remove('is-invalid');
        }

        if(last_name == '')
        {
            document.getElementById('last_name').classList.add('is-invalid');
            valid = false;
        }
        else
        {
            document.getElementById('last_name').classList.remove('is-invalid');
        }

        if(valid)
        {
            console.log(first_name);
            console.log(last_name);
            console.log(email);
            console.log(mobile); 

            var data = new FormData();
            data.append('first_name', first_name);
            data.append('last_name', last_name);
            data.append('email', email);
            data.append('mobile', mobile);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost:8000/add_record.php', true);

            xhr.onload = function () 
            {
                // do something to response
                console.log(this.responseText);
                location.reload();
            };

            xhr.send(data);
        }

    }

});