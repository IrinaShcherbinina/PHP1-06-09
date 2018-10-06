<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div class="col-sm-3">
    <h3>Оставить отзыв:</h3>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Ваше имя:</label>
            <input type="text" class="form-control input-sm" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="email" class="form-control input-sm" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label>Тема:</label>
            <input type="text" class="form-control input-sm" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label>Отзыв:</label>
            <textarea class="form-control input-sm" name="body" rows="6" id="body" required></textarea>
        </div>
        <input type="hidden" name="id" id="id" value="">
        <input type="hidden" name="r" id="r" value="{{UNIT}}/create">
        <input type="submit" class="btn btn-default">
    </form>
</div>
</body>
</html>
   