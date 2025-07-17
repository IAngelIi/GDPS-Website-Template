<?php
include 'config.php';
?>

<html>

<head>
    <title>Shadownix</title>
    <link rel="stylesheet" type="text/css" href="files/style.css">
</head>

<body style="background: linear-gradient(#909090, #000000);">
    <center>
        <img src="logoShadownixGDPS.png" style="max-width: 100%; height: auto;">

        <div>
            <br>
            <br>
            <br>
            <!-- Upper buttons -->
            <a href="<?php echo $windows; ?>.zip"download><img src="files/windows.png" width="200" hspace="12"></a>
            <a href="<?php echo $android; ?>.apk"download><img src="files/android.png" width="200" hspace="12"></a>
            <a href="<?php echo $tools; ?>"><img src="files/tools.png" width="200" hspace="12"></a>
            <!-- Add buttons below -->
        </div>

        <br>

        <div>
            <!-- Lower buttons -->
            <a href="<?php echo $youtube; ?>" target="_blank"><img src="files/youtube.png" width="200"
                    hspace="12"></a>
            <a href="<?php echo $discord; ?>" target="_blank"><img src="files/discord.png" width="200"
                    hspace="12"></a>
            <!-- Add buttons below -->
        </div>
        
        <br>
        <img src="files/about.png" style="max-width: 30%; height: auto;">
        
        <div class="text">
            <span class="white"><?php echo $about; ?></span>
        </div>

        <div class="text">
            <!-- Do not remove pls -->
            <span class="white">made by <span class="gray"><u><a href="https://discord.gg/mH6mnZWgY9"
                            target="_blank">Shadownix Team</a>
        </div>
    </center>
</body>

</html>