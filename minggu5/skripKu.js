function myFunction(){
    let nama = document.getElementById("nama").value;
    let tempatLahir = document.getElementById("tempatLahir").value;
    let tanggalLahir = document.getElementById("tanggalLahir").value;
    let jenisKelamin = document.getElementById("jenisKelamin").value;
    let pendikTerakhir = document.getElementById("pendidikanTerakhir").value;
    var visible = document.getElementById("deskripsi");
    if(nama.length===0){
        alert("Nama harus diisi");
    } else if(nama.length<7){
        alert("Nama harus memiliki panjang minimal 7 karakter.");
    }else{
        document.getElementById("usernameOutput").innerHTML = nama;
        document.getElementById("nama").value = "";
        document.getElementById("tempatLahirOutput").innerHTML = tempatLahir;
        document.getElementById("tempatLahir").value = "";
        document.getElementById("tanggalLahirOutput").innerHTML = tanggalLahir;
        document.getElementById("tanggalLahir").value = "";
        document.getElementById("jenisKelaminOutput").innerHTML = jenisKelamin;
        document.getElementById("jenisKelamin").value = "";
        document.getElementById("pendidikanTerakhirOutput").innerHTML = pendikTerakhir;
        document.getElementById("pendidikanTerakhir").value = "";

        visible.style.visibility="visible";
    }   
}
