/*
function ShowAndHide() {
    var x = document.getElementById('signin');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
    window.scrollTo(0, document.getElementById('signin').offsetTop)
}
*/

//Contact form
function contactform()
{
  document.querySelector('#contact-form').classList.toggle('active');
}
function closecontactform()
{
  document.querySelector('#contact-form').classList.remove('active');
}
//SignIn Form
function signinform()
{
  document.querySelector('#reg-form').classList.remove('active');
  document.querySelector('#signin-form').classList.toggle('active');
}

function closesigninform()
{
  document.querySelector('#signin-form').classList.remove('active');
}

function searchitem()
{
  document.querySelector('#signin-form').classList.remove('active');
}
function openregform()
{
  
  document.querySelector('#signin-form').classList.remove('active');
  document.querySelector('#reg-form').classList.toggle('active');
}
function closeregform()
{
  document.querySelector('#reg-form').classList.remove('active');
}

function donateo()
{
  document.querySelector('#donate-form').classList.toggle('active');
}

function donateclose()
{
  document.querySelector('#donate-form').classList.remove('active');
}

