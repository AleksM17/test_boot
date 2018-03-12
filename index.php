<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">

                <div class="form-group">
                    <label for="exampleTextarea">Текст</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" name="mainText"></textarea>
                </div>

                <div class="form-group">
                    <label for="words">Недопустимые слова</label>
                    <input type="text" class="form-control" id="words" aria-describedby="wordsHelp" placeholder="Введите недопустимые слова">
                    <small id="wordsHelp" class="form-text text-muted">Укажите слова, которые должны быть заменены на звездочки.</small>
                </div>

                <button type="submit" class="btn btn-success float-right">Отправить</button>

            </form>



        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col">
            <div class="alert alert-success" role="alert">
                <strong>Results</strong><br>
                <?php
                if(isset($_POST["mainText"])){
                    echo $_POST["mainText"];
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>


