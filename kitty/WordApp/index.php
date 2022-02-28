<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <?php
    $words = [
      'abandon'             => 'terk etmek',
      'absolutely'          => 'kesinlikle, tamamen',
      'achive'              => 'başarmak, elde etmek',
      'adulthood'           => 'yetişkinilk, erişkinlik dönemi',
      'affectionately()adv' => 'sevgiyle, şevkatle',
      'agree(v)'            => 'aynı fikirde olmak, kabul etmek, beraber karar vermek',
      'annoying(adj)'       => 'sinir bozucu, rahatsız edici',
      'apathy(n)'           => 'ilgisizlik, kayıtsızlık',
      'appointment(n)'      => '1. randevu, 2. atama, tayin, görev',
      'attention(n)'        => 'dikkat, özen, ilgi',
      'battle(n)'           => 'savaş, mücadele',
      'beast(n)'            => '1. yaratık, canavar, 2. kaba, sevimsiz şey/kimse',
      'blame(n)/(v)'        => 'suçlama / suçlamak',
      'breezy(adj)'         => '1. rüzgarlı, esintili 2. neşeli, cıvıl cıvıl, şen şakrak',
      'capable(adj)'        => 'becerikli, kabiliyetli',
      'celebrity(n)'        => '1. ünlü, tanınmış kimse 2. ün, şöhret',
      'circumstance(n)'     => 'durum, şart, hal',
      'compare(v)'          => 'karşılaştırmak, mukayese etmek, ölçümek',
      'concisely(adv)'      => 'kısaca',
      'condition(v)'        => '1. koşullandırmak, etkilemek, (belli bir duruma) getirmek 2. belirlemek',
      'considerate(adj)'    => 'düşünceli, anlayışlı',
      'contradict(v)'       => 'aksini idda etmek, çelişmek',
      'curve(n)/(v)'        => 'eğri, kavis/bükülmek, kıvrılmak',
      'decelve (v)'         => 'kandırmak,aldatmak,oyunagetirmek',
      'depth(v)'            => 'derinlik;yoğunluk',
      'description(n)'=>'tanımlama,betimleme,tasvir',
      'determine(v)'=>'saptamak,tespit etmek,belirlemek,karar vermek',
      'devolopment(n))'=>'geliş(tir)me,büyüme,ilerleme',
      'disappear(v)'=>'ortadan kaybolmak,yok olmak',
      'dismiss(v)'=>'reddetmek;kovmak,işten çıkarmak;salıvermek,göndermek',
      'distort(v)'=>'(biçimini)bozmak,çarpıtmak',
      'doubt(n/v)'=>'şüphe (etmek),kuşku(lanmak)',
      'dull(adj)'=>'durgun,kasvetli,donuk,sıkıcı',
      'elevate(v)'=>'yükseltmek,artırmak,yüceltmek',
      'enable(v)'=>'olanak sağlamak,izin vermek',
      'ensure(v)'=>'sağlama almak,garantilemek',
      'erase(v)'=>'temizlemek,silmek',
      'essantial(adj)'=>'önemli,gerekli',
      'excuse(n)'=>'mazeret,bahane,özür',
      'expose(v)'=>'maruz bırakmak',
      'fake(adj)'=>'sahte,düzmece,çakma',
      'flood(n/v)'=>'sel/sular altında bırakmak,taşımak,sel gibi akmak',
      'follow(v)'=>'takip etmek,izlemek,sonucu olmak',
      'forceful(adj)'=>'etkileyici,güçlü,ikna edici',
      'frequently(adj)'=>'sık sık,çoğu kez,sıklıkla',
      'generously(adj)'=>'cömertçe,bol bol',
      'grave(n/adj)'=>'mezar,kabir/ciddi,kasvetli,sıkıcı,hüzünlü',
      'ground(n)'=>'toprak,arazi;konu,saha;prensip,temel',

    ];
    ?>
 



  <section>
  <!--for demo wrap-->

  <a href="../index.php">Anasayfa</a>
  <h1>UNIT 1</h1>

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Kelime</th>
          <th>Anlamı</th>
        </tr>
      </thead>
    </table>
  </div>
  
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php  
      $a =1;
      foreach ($words as $word => $value) { ?>
            
                <tr>
                  <th scope="row"><?=$a++;?></th>
                  <td><?= $word ?></td>
                  <td><?= $value ?></td>
                </tr>

    <?php } ?>
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
  Made with
  <i>♥</i> powered by lion AND kitty.
</div>



      <script type="text/javascript"> 
          // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
          $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
          }).resize();
      </script>
<!-- Bootstrapt js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>