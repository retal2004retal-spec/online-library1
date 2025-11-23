<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>إنشاء حساب</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>

  <div class="signup-box">
    <h2>تسجيل مستخدم جديد</h2>
    <form>
      <label for="username">اسم المستخدم</label>
      <input type="text" id="username" name="username" required>

      <label for="fullname">الاسم الكامل</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="password">كلمة السر</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm">إعادة كلمة السر</label>
      <input type="password" id="confirm" name="confirm" required>

      <label for="address">عنوان</label>
      <input type="text" id="address" name="address">

      <button type="submit">إنشاء حساب</button>
      <button type="button" onclick="window.location.href='login.php'">رجوع</button>
    </form>
  </div>

</body>
</html>
