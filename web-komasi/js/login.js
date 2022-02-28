
function validasi() {
    var user = document.getElementById("user").value;
    var pw = document.getElementById("pw").value;
    if (user=="admin" && pw=="admin") {
        return true;
    }else{
        alert('Username atau Password tidak sesuai');
        return false;
    }
}