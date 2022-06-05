<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="silma.jpeg" title="DEVI SILMA YUNIAR" alt="Herliyansyah" width="200" style="float: left; border: 1px solid black;">
            <h1>HI!</h1>
            <p>Saya adalah Devi Silma dari Universitas Pelita Bangsa dengan jurusan teknik informatika,hal yang saya ingin saya pahami adalah <b>ui/ux</b> dalam membuat web. </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>