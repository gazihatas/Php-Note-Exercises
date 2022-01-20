<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Oturum Açma Değişkeni | $_SESSION</h1>
    <p>
      $_SESSION değişkeni oturum açmayı ve oturum okumayı sağlar. Çerezlerin aksine Session bilgileri
      Sunucuda saklanır. Aynen çerezlerde çerezlerde olduğu gibi genelde üyelik bilgileri,
      alış veriş sepetlerindeki ürün bilgileri ve kullanıcıya ait başka bilgilerde saklanır.
      Kullanıcı oturum süresi boyunca session ile takip edilir. Siteyi terk ettiğinde Oturum
      süresi sona erer. Çünkü çerezler gibi uzun süreli oturumlar açılmaz.
    </p>

    <p>
      <b>SESSION</b> başlatmak ve takip etmek için <b>programın en başına session_start()</b> fonksiyonunun
      yazılması gerekir. Bu oturum açma işlemi başlatılır. Çerezlerde olduğu gibi <b>session_start()</b>
      fonksiyonundan önce ekrana hiçbir çıktının verilmemesi gerekir.
    </p>

    <p>
      Session ataması, okuması ve Session bilgilerini takip etmek için her sayfanın en başında
      mutlaka <b>session_start()</b> fonksiyonunun bulunması gerekir.
    </p>

    <p>
      Aynı anda bieden fazla session atamasını yapabiliriz.
    </p>

    <h2>SESSION SİLME</h2>
    <p>
      <b>session_destroy()</b> bütün sessionları yok eder. Eğer sessionlardan sadece bazılarını
      yok etmek istiyorsanız <b>unset()</b> fonksiyonunu kullanmalısınız.
      <br>
      Örneğin ad isminde açılmış bir sessionu <b>unset($_SESSION['ad']);</b> ile yok edebiliriz.
    </p>

    
  </body>
</html>
