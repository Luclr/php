<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"];

    if ($file["error"]) {
        throw new Exception("Erro no upload: " . $file["error"]);
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)) {
        mkdir($dirUploads, 0775, true);
        chmod($dirUploads, 0775);
    }

    if (move_uploaded_file(
        $file["tmp_name"],
        $dirUploads . DIRECTORY_SEPARATOR . $file["name"]
    )) {
        echo "Upload realizado com sucesso";
    } else {
        throw new Exception("Não foi possível salvar o arquivo.");
    }

}
?>
