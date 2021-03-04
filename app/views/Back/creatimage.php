<?php ob_start(); ?>

<section>
    <div class="newImg">
        <h2>Créer une image</h2>
        <form action="indexAdmin.php?action=creatImage" method="post" enctype="multipart/form-data" class="formImg">

            <div class="article_title">
                <label for="title">Titre  seo de votre image</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="article_title">
                <input type="file" id="fileToUpload" name="fileToUpload" class="filesImg">
                <br><br>
                <div class="img">
                    <br><br>
                </div>
            </div>
            <div class="sub_btn">
                <input type="submit" value="envoyer" name="submit" id="upload" class="submit">
            </div>

        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>