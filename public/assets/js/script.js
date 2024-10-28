
document.getElementById('loginform').addEventListener('submit', function(event){

    event.preventDefault();
    
    const correctUsername = "Dzaki";
    const correctPassword = "Dzaki";

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // console.log(username);
    if(username === correctUsername && password === correctPassword){
        alert("login berhasil");
        window.location.href = '/';
    }else{
        alert("usernmae atau password tidak sesuai");
    }
});