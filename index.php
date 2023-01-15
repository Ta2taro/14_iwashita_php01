<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>アンケートアプリ</title>
</head>
<body>

<h1>以下アンケートにご協力をお願いします。</h1>


<form action="write.php" method="post">
    <p>お名前:<br> <input type = "text" name = "name" size ="20" maxlength="20" value="氏名"><br></p>
    <p>Email:<br> <input type = "text" name = "email" size ="20" maxlength="40" value="XXX@XXX.co.jp"><br><br></p>

    <p>質問1:出身は？ <br><input type = "text" name = "origin" size ="10"><br></p>
    <!-- <p>質問2:血液型は？ 
        <br><input type = "radio" name = "blood_type[]" value="type_a">A型
            <input type = "radio" name = "blood_type[]" value="type_b">B型
            <input type = "radio" name = "blood_type[]" value="type_o">O型
            <input type = "radio" name = "blood_type[]" value="type_ab">AB型<br></p> -->
            <!-- なぜradioボタンだと表示できない！？ -->
    
    <p>質問2:誕生日は？ <br><input type = "text" name = "birthday" size ="10"><br><br></p>
    <p><input type="submit" value="送信"></p>

</form>




</body>
</html>