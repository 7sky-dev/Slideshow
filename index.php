<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Slideshow</title>
</head>
<body onload="start()">

    <div id="photos">
        <img id="inputPhotos" src="">
    </div>

    <script>
        <?php 
            $path = "img";
            $files = scandir($path,0);
        ?>

        const div_photos = document.getElementById("inputPhotos");
        const files = <?php echo json_encode($files);?>;
        let i=0;
        files.splice(0,2);

        function start(){
            div_photos.src="img/"+files[0];
        }

        function change(){
            i++;
            if(i>=files.length){
                i=0;
            }
            div_photos.src="img/"+files[i];            
        }
        setInterval(change, 2000);

    </script>
</body>
</html>