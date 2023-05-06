<?php 
include_once __DIR__ . '/funtions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/styleGenereal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div >
        <div class="container-fluid" >
            <div class="container">
                <div class="head">
                    <h1>Strong password Generator</h1>
                    <h3>Genera una password sicura</h3>
                </div>
                <div class="mid">
                    <p v-if="password != ''">La tua password é:  
                        <!-- meti la password php -->
                        <?php echo $password ?>
                    </p>
                </div>
                <div class="content">
                    <form action="" method='get'>
                        <div class="container-long" >
                            <p>lunghezza della password</p>
                            
                            <input type="number" v-model="limit" name='lenght'>
                        </div>
                            <div class="container-repeat">
                                Consenti la repetizione dei caratteri?
                            <div class="options">
                                <div>
                                    <input type="radio" name="repeat" value='yes'>
                                    <label for="">Si</label>
                                </div>
                                <div> 
                                    <input type="radio" name="repeat" id=""  checked="true" value='no'>
                                    <label for="">No</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="lettere" id="let" ref="let" value='yes'>
                                    <label for="">lettere</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="number" id="num" ref="num" value='yes'>
                                    <label for="">numeri</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="simbol" id="sim" ref="sim"  value='yes' >
                                    <label for="">simboli</label>
                                </div>
                            </div>
                            <div class="button">
                                <button type='submit'>
                                    Envia
                                </button>
                                <button>
                                    Anulla
                                </button>
            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>