<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container{
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        button{
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }

        img{
            width: 100%;
            margin-top: 15px;
            border-radius: 10px;
            display: none;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Form Upload Foto</h2>

    <form onsubmit="return validasiForm()">

        <input type="text" id="nama" placeholder="Masukkan Nama">

        <input type="file" id="foto" accept="image/*">

        <button type="submit">Simpan</button>

    </form>

    <img id="preview">

</div>

<script>

function validasiForm(){

    let nama = document.getElementById("nama").value;
    let foto = document.getElementById("foto").value;

    if(nama == ""){
        alert("Nama harus diisi!");
        return false;
    }

    if(foto == ""){
        alert("Foto harus dipilih!");
        return false;
    }

    alert("Data berhasil disimpan!");
    return true;
}

document.getElementById("foto").addEventListener("change", function(event){

    let preview = document.getElementById("preview");

    preview.src = URL.createObjectURL(event.target.files[0]);

    preview.style.display = "block";

});

</script>

</body>
</html>