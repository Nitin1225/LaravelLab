function validate()
{
    var pass = document.getElementById('pass1').value;
    var cpass = document.getElementById('pass').value;
    if(pass!=cpass)
    {
        alert('Password did not match');
        return false;
    }
}