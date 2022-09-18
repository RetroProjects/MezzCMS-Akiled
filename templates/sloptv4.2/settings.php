<?php
	$menu="me";
	include_once 'templantes/header.php';
?>
                        <div style="margin-top: 100px;">

<style>
.error{
    position: unset;
    margin-top: 0;
    margin-left: 0;
    background: #882424;
}
.errorSucces {
    position: unset;
    margin-top: 7px;
    margin-left: 0;
    background: #2f762a;
    padding: 5px;
    border-radius: 5px;
}
.bottomBar-emoji-secim-box {
    z-index: 1;
    margin-left: -10px;
    width: 525px;
    height: 243px;
    background: #e5e5e5d4;
    border-radius: 12px;
    box-sizing: initial;
    filter: drop-shadow(2px 4px 6px #00000069);
    -webkit-backdrop-filter: blur(4px);
    backdrop-filter: blur(4px);
    border-color: white;
    border-style: groove;
}
.esb-header {
    background: #1e7295;
    margin: 5px;
    border-radius: 4px;
    border-top: 3px solid #2b8bb3;
    border-bottom: 3px solid #1a6280;
    text-align: center;
    font-size: 14px;
    font-family: arial;
    color: #e9f1f5;
    font-weight: 700;
    padding: 4px;
}
.emojiBottom {
    left: 88px;
    bottom: -18px;
    border-bottom-style: solid;
    border-top: 15px solid #e5e5e5d4;
    border-right: 15px solid #0000;
    border-bottom-color: #0000;
    border-left: 15px solid #0000;
    color: #000;
    box-sizing: initial;
    -webkit-backdrop-filter: blur(4px);
    backdrop-filter: blur(4px);
}
.emoji-list {
    margin: 3px;
    height: 235px;
    width: 522px;
    overflow-y: scroll;
    overflow-x: hidden;
    list-style: none;
}

.emoji-kategori-box {
    width: 97%;
    height: 12px;
    color: #083b50;
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 17px;
    float: left;
}
.emojibox {
    width: 28.5px;
    height: 30px;
    background: #0000001c;
    padding: 1px 2px 2px;
    font-size: 21px;
    border-radius: 5px;
    float: left;
    margin-right: 5px;
    margin-bottom: 5px;
    cursor: pointer;
    text-align: center;
    box-sizing: initial;
}
.emojibox:hover {
    transition-delay: 0ms;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<form action="" method="POST">
<?php User::editEmail(); ?>
                    <fieldset class="form__fieldset form__fieldset--box">
                    <h4><?=$lang["Syouremail"];?></h4>
                    <p align="justify" style=" width: 90%; "><?=$lang["Syouremailtext"];?></p>
                    <input type="text" class="form__input" name="email" value="<?= User::userData('mail') ?>">
                    <input type="submit" class="btn btn-green-hotel" name="account" value="<?=$lang["Ssave"];?>" style="width: 50%;border-color: #193252;background-color: #294f6f;">

                    </fieldset>
					</form>
<form action="" method="POST">
<?php User::editPassword(); ?>
                    <fieldset class="form__fieldset form__fieldset--box" style="margin-top: 20px;">
                    <h4><?=$lang["Spasswordnow"];?></h4>
                    <p align="justify" style=" width: 90%; "><?=$lang["Spasswordnowtext"];?></p>
                    <input type="password" name="oldpassword" class="form__input" placeholder="*********">
                    <h4><?=$lang["Snewpassword"];?></h4>
                    <p align="justify" style=" width: 90%; "><?=$lang["Snewpasswordtext"];?></p>

                    <input type="password" name="newpassword" class="form__input" placeholder="*********">
					
                    <input type="submit" class="btn btn-green-hotel" name="password" value="<?=$lang["Ssave"];?>" style="width: 50%;border-color: #193252;background-color: #294f6f;">

                    </fieldset>
					</form>
 <fieldset class="form__fieldset form__fieldset--box" style="margin-top: 20px;">
<h4><?=$lang["emojititle"];?></h4>
                    <p align="justify" style=" width: 90%; "><?=$lang["emojidec"];?></p>

<div class="bottomBar-emoji-secim-box">
   <div class="emoji-list">
   <form action="" method="POST">
   <?php User::EditEmoji(); ?>
      <div class="emoji-kategori-box">😘 Emoticonos ➤</div>
      <input none="Sırıtan Yüz" class="emojibox" type="submit" name="emojiuser" value="😀"></input>
      <input none="Gülen Gözlerle Parlayan Yüz" class="emojibox" type="submit" name="emojiuser" value="😁"></input>
      <input none="Sevinç Gözyaşlarıyla Yüzleş" class="emojibox" type="submit" name="emojiuser" value="😂"></input>
      <input none="Yuvarlanıp Gülmek" class="emojibox" type="submit" name="emojiuser" value="🤣"></input>
      <input none="İri Gözlü Sırıtan Yüz" class="emojibox" type="submit" name="emojiuser" value="😃"></input>
      <input none="Gülen Gözlerle Sırıtan Yüz" class="emojibox" type="submit" name="emojiuser" value="😄"></input>
      <input none="Terle Sırıtan Yüz" class="emojibox" type="submit" name="emojiuser" value="😅"></input>
      <input none="Şaşı Şaşı Yüz" class="emojibox" type="submit" name="emojiuser" value="😆"></input>
      <input none="Göz Kırpan Yüz" class="emojibox" type="submit" name="emojiuser" value="😉"></input>
      <input none="Gülen Gözlerle Gülen Yüz" class="emojibox" type="submit" name="emojiuser" value="😊"></input>
      <input none="Şahane Yemek Gören Yüz" class="emojibox" type="submit" name="emojiuser" value="😋"></input>
      <input none="Güneş Gözlüğü İle Gülen Yüz" class="emojibox" type="submit" name="emojiuser" value="😎"></input>
      <input none="Aşık Olmuş Yüz" class="emojibox" type="submit" name="emojiuser" value="😍"></input>
      <input none="Öpücük Gönderen Yüz" class="emojibox" type="submit" name="emojiuser" value="😘"></input>
      <input none="Öpüşen Yüz" class="emojibox" type="submit" name="emojiuser" value="😗"></input>
      <input none="Gülen Gözlerle Öpüşme Yüzü" class="emojibox" type="submit" name="emojiuser" value="😙"></input>
      <input none="Kapalı Gözlerle Öpüşme Yüzü" class="emojibox" type="submit" name="emojiuser" value="😚"></input>
      <input none="Biraz Gülen Yüz" class="emojibox" type="submit" name="emojiuser" value="🙂"></input>
      <input none="Sarılan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤗"></input>
      <input none="Parıldayan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤩"></input>
      <input none="Düşünen Yüz" class="emojibox" type="submit" name="emojiuser" value="🤔"></input>
      <input none="Kaş Kaldırmış Yüz" class="emojibox" type="submit" name="emojiuser" value="🤨"></input>
      <input none="Nötr Yüz" class="emojibox" type="submit" name="emojiuser" value="😐"></input>
      <input none="İfadesiz Yüz" class="emojibox" type="submit" name="emojiuser" value="😑"></input>
      <input none="Ağızsız Yüz" class="emojibox" type="submit" name="emojiuser" value="😶"></input>
      <input none="Yuvarlanan Gözlerle Yüz" class="emojibox" type="submit" name="emojiuser" value="🙄"></input>
      <input none="Sırıtan Yüz" class="emojibox" type="submit" name="emojiuser" value="😏"></input>
      <input none="Azimli Yüz" class="emojibox" type="submit" name="emojiuser" value="😣"></input>
      <input none="Üzgün ama Rahatlamış Yüz" class="emojibox" type="submit" name="emojiuser" value="😥"></input>
      <input none="Ağzı Açık Yüz" class="emojibox" type="submit" name="emojiuser" value="😮"></input>
      <input none="Konuşmayan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤐"></input>
      <input none="Şaşırmış Yüz" class="emojibox" type="submit" name="emojiuser" value="😯"></input>
      <input none="Uykulu Yüz" class="emojibox" type="submit" name="emojiuser" value="😪"></input>
      <input none="Yorgun Yüz" class="emojibox" type="submit" name="emojiuser" value="😫"></input>
      <input none="Uyuyan Yüz" class="emojibox" type="submit" name="emojiuser" value="😴"></input>
      <input none="Rahatlamış Yüz" class="emojibox" type="submit" name="emojiuser" value="😌"></input>
      <input none="Dil Çıkaran Yüz" class="emojibox" type="submit" name="emojiuser" value="😛"></input>
      <input none="Dil Çıkarıp Göz Kırpan Yüz" class="emojibox" type="submit" name="emojiuser" value="😜"></input>
      <input none="Dil Çıkarıp Şaşı Bakan Yüz" class="emojibox" type="submit" name="emojiuser" value="😝"></input>
      <input none="Salya Akan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤤"></input>
      <input none="Eğlenmeyen Yüz" class="emojibox" type="submit" name="emojiuser" value="😒"></input>
      <input none="Terli Seksi Yüz" class="emojibox" type="submit" name="emojiuser" value="😓"></input>
      <input none="Dalgın Yüz" class="emojibox" type="submit" name="emojiuser" value="😔"></input>
      <input none="Şaşkın Yüz" class="emojibox" type="submit" name="emojiuser" value="😕"></input>
      <input none="Baş Aşağı Yüz" class="emojibox" type="submit" name="emojiuser" value="🙃"></input>
      <input none="Paragöz Yüz" class="emojibox" type="submit" name="emojiuser" value="🤑"></input>
      <input none="Şaşkın Yüz" class="emojibox" type="submit" name="emojiuser" value="😲"></input>
      <input none="Hafifce Asık Surat" class="emojibox" type="submit" name="emojiuser" value="🙁"></input>
      <input none="Şaşkın Yüz" class="emojibox" type="submit" name="emojiuser" value="😖"></input>
      <input none="Hayal Kırıklığına Uğramış Yüz" class="emojibox" type="submit" name="emojiuser" value="😞"></input>
      <input none="Endişeli Yüz" class="emojibox" type="submit" name="emojiuser" value="😟"></input>
      <input none="Kızgın Yüz" class="emojibox" type="submit" name="emojiuser" value="😤"></input>
      <input none="Ağlayan Yüz" class="emojibox" type="submit" name="emojiuser" value="😢"></input>
      <input none="Hüngür Hüngür Ağlayan Yüz" class="emojibox" type="submit" name="emojiuser" value="😭"></input>
      <input none="Ağzı Açık Kalmış Yüz" class="emojibox" type="submit" name="emojiuser" value="😦"></input>
      <input none="Kederli Yüz" class="emojibox" type="submit" name="emojiuser" value="😧"></input>
      <input none="Korkunç Yüz" class="emojibox" type="submit" name="emojiuser" value="😨"></input>
      <input none="Yorgun Yüz" class="emojibox" type="submit" name="emojiuser" value="😩"></input>
      <input none="Patlayan Kafa" class="emojibox" type="submit" name="emojiuser" value="🤯"></input>
      <input none="Diş Gösteren Yüz" class="emojibox" type="submit" name="emojiuser" value="😬"></input>
      <input none="Terli ve Endişeli Yüz" class="emojibox" type="submit" name="emojiuser" value="😰"></input>
      <input none="Korkudan Çığlık Atan Yüz" class="emojibox" type="submit" name="emojiuser" value="😱"></input>
      <input none="Kızarmış Surat" class="emojibox" type="submit" name="emojiuser" value="😳"></input>
      <input none="Eğlenceli Yüz" class="emojibox" type="submit" name="emojiuser" value="🤪"></input>
      <input none="Başı Dönen Yüz" class="emojibox" type="submit" name="emojiuser" value="😵"></input>
      <input none="Surat Asan Yüz" class="emojibox" type="submit" name="emojiuser" value="😡"></input>
      <input none="Kızgın Surat" class="emojibox" type="submit" name="emojiuser" value="😠"></input>
      <input none="Argo Kullanan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤬"></input>
      <input none="Maske Takan Yüz" class="emojibox" type="submit" name="emojiuser" value="😷"></input>
      <input none="Termometreli Yüz" class="emojibox" type="submit" name="emojiuser" value="🤒"></input>
      <input none="Baş Bandajlı Yüz" class="emojibox" type="submit" name="emojiuser" value="🤕"></input>
      <input none="Miğdesi Bulanan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤢"></input>
      <input none="Kusan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤮"></input>
      <input none="Hapşıran Yüz" class="emojibox" type="submit" name="emojiuser" value="🤧"></input>
      <input none="Melek Yüz" class="emojibox" type="submit" name="emojiuser" value="😇"></input>
      <input none="Kovboy Şapkalı Yüz" class="emojibox" type="submit" name="emojiuser" value="🤠"></input>
      <input none="Palyaço Yüzü" class="emojibox" type="submit" name="emojiuser" value="🤡"></input>
      <input none="Yalancı Yüz" class="emojibox" type="submit" name="emojiuser" value="🤥"></input>
      <input none="Sus İşareti Yapan Yüz" class="emojibox" type="submit" name="emojiuser" value="🤫"></input>
      <input none="Gülen Yüz" class="emojibox" type="submit" name="emojiuser" value="🤭"></input>
      <input none="Tek Gözlüklü Yüz" class="emojibox" type="submit" name="emojiuser" value="🧐"></input>
      <input none="İnek Yüz" class="emojibox" type="submit" name="emojiuser" value="🤓"></input>
      <input none="Boynuzlu Kırmızı Şeytan" class="emojibox" type="submit" name="emojiuser" value="😈"></input>
      <input none="Boynuzlu Kırmızı Şeytan Yüzü" class="emojibox" type="submit" name="emojiuser" value="👿"></input>
      <input none="Canavar" class="emojibox" type="submit" name="emojiuser" value="👹"></input>
      <input none="Goblin" class="emojibox" type="submit" name="emojiuser" value="👺"></input>
      <input none="Kafatası" class="emojibox" type="submit" name="emojiuser" value="💀"></input>
      <input none="Hayalet" class="emojibox" type="submit" name="emojiuser" value="👻"></input>
      <input none="Uzaylı" class="emojibox" type="submit" name="emojiuser" value="👽"></input>
      <input none="Robot Yüz" class="emojibox" type="submit" name="emojiuser" value="🤖"></input>
      <input none="Kaka Yığını" class="emojibox" type="submit" name="emojiuser" value="💩"></input>
      <div class="emoji-kategori-box">👦 Personas ➤</div>
      <input none="Oğlan" class="emojibox" type="submit" name="emojiuser" value="👦"></input>
      <input none="Bebek" class="emojibox" type="submit" name="emojiuser" value="👶"></input>
      <input none="Kız" class="emojibox" type="submit" name="emojiuser" value="👧"></input>
      <input none="Erkek" class="emojibox" type="submit" name="emojiuser" value="👨"></input>
      <input none="Kadın" class="emojibox" type="submit" name="emojiuser" value="👩"></input>
      <input none="Yaşlı Adam" class="emojibox" type="submit" name="emojiuser" value="👴"></input>
      <input none="Yaşlı Kadın" class="emojibox" type="submit" name="emojiuser" value="👵"></input>
      <input none="Uzaylı Canavar" class="emojibox" type="submit" name="emojiuser" value="👾"></input>
      <input none="Erkek Doktor" class="emojibox" type="submit" name="emojiuser" value="👨‍⚕️"></input>
      <input none="Kadın Doktor" class="emojibox" type="submit" name="emojiuser" value="👩‍⚕️"></input>
      <input none="Erkek Öğrenci" class="emojibox" type="submit" name="emojiuser" value="👨‍🎓"></input>
      <input none="Kadın Öğrenci" class="emojibox" type="submit" name="emojiuser" value="👩‍🎓"></input>
      <input none="Erkek Yargıç" class="emojibox" type="submit" name="emojiuser" value="👨‍⚖️"></input>
      <input none="Kadın Yargıç" class="emojibox" type="submit" name="emojiuser" value="👩‍⚖️"></input>
      <input none="Erkek Çiftçi" class="emojibox" type="submit" name="emojiuser" value="👨‍🌾"></input>
      <input none="Kadın Çiftçi" class="emojibox" type="submit" name="emojiuser" value="👩‍🌾"></input>
      <input none="Erkek Aşçı" class="emojibox" type="submit" name="emojiuser" value="👨‍🍳"></input>
      <input none="Kadın Aşçı" class="emojibox" type="submit" name="emojiuser" value="👩‍🍳"></input>
      <input none="Erkek Tamirci" class="emojibox" type="submit" name="emojiuser" value="👨‍🔧"></input>
      <input none="Kadın Tamirci" class="emojibox" type="submit" name="emojiuser" value="👩‍🔧"></input>
      <input none="Erkek Fabrika İşçisi" class="emojibox" type="submit" name="emojiuser" value="👨‍🏭"></input>
      <input none="Kadın Fabrika İşçisi" class="emojibox" type="submit" name="emojiuser" value="👩‍🏭"></input>
      <input none="Erkek Ofis Çalışanı" class="emojibox" type="submit" name="emojiuser" value="👨‍💼"></input>
      <input none="Kadın Ofis Çalışanı" class="emojibox" type="submit" name="emojiuser" value="👩‍💼"></input>
      <input none="Erkek Bilim İnsanı" class="emojibox" type="submit" name="emojiuser" value="👨‍🔬"></input>
      <input none="Kadın Bilim İnsanı" class="emojibox" type="submit" name="emojiuser" value="👩‍🔬"></input>
      <input none="Erkek Teknoloji Uzmanı" class="emojibox" type="submit" name="emojiuser" value="👨‍💻"></input>
      <input none="Kadın Teknoloji Uzmanı" class="emojibox" type="submit" name="emojiuser" value="👩‍💻"></input>
      <input none="Erkek Şarkıcı" class="emojibox" type="submit" name="emojiuser" value="👨‍🎤"></input>
      <input none="Kadın Şarkıcı" class="emojibox" type="submit" name="emojiuser" value="👩‍🎤"></input>
      <input none="Erkek Sanatcı" class="emojibox" type="submit" name="emojiuser" value="👨‍🎨"></input>
      <input none="Kadın Sanatcı" class="emojibox" type="submit" name="emojiuser" value="👩‍🎨"></input>
      <input none="Erkek Pilot" class="emojibox" type="submit" name="emojiuser" value="👨‍✈️"></input>
      <input none="Kadın Pilot" class="emojibox" type="submit" name="emojiuser" value="👩‍✈️"></input>
      <input none="Erkek Astronot" class="emojibox" type="submit" name="emojiuser" value="👨‍🚀"></input>
      <input none="Kadın Astronot" class="emojibox" type="submit" name="emojiuser" value="👩‍🚀"></input>
      <input none="Erkek İtfaiyeci" class="emojibox" type="submit" name="emojiuser" value="👨‍🚒"></input>
      <input none="Kadın İtfaiyeci" class="emojibox" type="submit" name="emojiuser" value="👩‍🚒"></input>
      <input none="Polis Memuru" class="emojibox" type="submit" name="emojiuser" value="👮"></input>
      <input none="Erkek Polis Memuru" class="emojibox" type="submit" name="emojiuser" value="👮‍♂️"></input>
      <input none="Kadın Polis Memuru" class="emojibox" type="submit" name="emojiuser" value="👮‍♀️"></input>
      <input none="Dedektif" class="emojibox" type="submit" name="emojiuser" value="🕵"></input>
      <input none="Erkek Dedektif" class="emojibox" type="submit" name="emojiuser" value="🕵️‍♂️"></input>
      <input none="Kadın Dedektif" class="emojibox" type="submit" name="emojiuser" value="🕵️‍♀️"></input>
      <input none="Muhafız" class="emojibox" type="submit" name="emojiuser" value="💂"></input>
      <input none="Erkek Muhafız" class="emojibox" type="submit" name="emojiuser" value="💂‍♂️"></input>
      <input none="Kadın Muhafız" class="emojibox" type="submit" name="emojiuser" value="💂‍♀️"></input>
      <input none="İnşaat İşçisi" class="emojibox" type="submit" name="emojiuser" value="👷"></input>
      <input none="Erkek İnşaat İşçisi" class="emojibox" type="submit" name="emojiuser" value="👷‍♂️"></input>
      <input none="Kadın İnşaat İşçisi" class="emojibox" type="submit" name="emojiuser" value="👷‍♀️"></input>
      <input none="Prens" class="emojibox" type="submit" name="emojiuser" value="🤴"></input>
      <input none="Prenses" class="emojibox" type="submit" name="emojiuser" value="👸"></input>
      <input none="Türban Giyen Kişi" class="emojibox" type="submit" name="emojiuser" value="👳"></input>
      <input none="Türban Giyen Adam" class="emojibox" type="submit" name="emojiuser" value="👳‍♂️"></input>
      <input none="Türban Giyen Kadın" class="emojibox" type="submit" name="emojiuser" value="👳‍♀️"></input>
      <input none="Çin Şapkalı Adam" class="emojibox" type="submit" name="emojiuser" value="👲"></input>
      <input none="Başörtülü Kadın" class="emojibox" type="submit" name="emojiuser" value="🧕"></input>
      <input none="Sakallı Adam" class="emojibox" type="submit" name="emojiuser" value="🧔"></input>
      <input none="Sarışın Erkek" class="emojibox" type="submit" name="emojiuser" value="👱"></input>
      <input none="Sarışın Adam" class="emojibox" type="submit" name="emojiuser" value="👱‍♂️"></input>
      <input none="Sarışın Kadın" class="emojibox" type="submit" name="emojiuser" value="👱‍♀️"></input>
      <input none="Smokinli Erkek" class="emojibox" type="submit" name="emojiuser" value="🤵"></input>
      <input none="Peçeli Gelin" class="emojibox" type="submit" name="emojiuser" value="👰"></input>
      <input none="Hamile Kadın" class="emojibox" type="submit" name="emojiuser" value="🤰"></input>
      <input none="Emzirme" class="emojibox" type="submit" name="emojiuser" value="🤱"></input>
      <input none="Bebek Melek" class="emojibox" type="submit" name="emojiuser" value="👼"></input>
      <input none="Noel Baba" class="emojibox" type="submit" name="emojiuser" value="🎅"></input>
      <input none="Noel Anne" class="emojibox" type="submit" name="emojiuser" value="🤶"></input>
      <input none="Kadın Büyücü" class="emojibox" type="submit" name="emojiuser" value="🧙‍♀️"></input>
      <input none="Erkek Büyücü" class="emojibox" type="submit" name="emojiuser" value="🧙‍♂️"></input>
      <input none="Kadın Peri" class="emojibox" type="submit" name="emojiuser" value="🧚‍♀️"></input>
      <input none="Erkek Peri" class="emojibox" type="submit" name="emojiuser" value="🧚‍♂️"></input>
      <input none="Kadın Vampir" class="emojibox" type="submit" name="emojiuser" value="🧛‍♀️"></input>
      <input none="Erkek Vampir" class="emojibox" type="submit" name="emojiuser" value="🧛‍♂️"></input>
      <input none="Deniz Kızı" class="emojibox" type="submit" name="emojiuser" value="🧜‍♀️"></input>
      <input none="Deniz Erkeği" class="emojibox" type="submit" name="emojiuser" value="🧜‍♂️"></input>
      <input none="Kadın Elf" class="emojibox" type="submit" name="emojiuser" value="🧝‍♀️"></input>
      <input none="Erkek Elf" class="emojibox" type="submit" name="emojiuser" value="🧝‍♂️"></input>
      <input none="Kadın Cin" class="emojibox" type="submit" name="emojiuser" value="🧞‍♀️"></input>
      <input none="Erkek Cin" class="emojibox" type="submit" name="emojiuser" value="🧞‍♂️"></input>
      <input none="Kadın Zombi" class="emojibox" type="submit" name="emojiuser" value="🧟‍♀️"></input>
      <input none="Erkek Zombi" class="emojibox" type="submit" name="emojiuser" value="🧟‍♂️"></input>
      <input none="Kaşlarını Çatan Kişi" class="emojibox" type="submit" name="emojiuser" value="🙍"></input>
      <input none="Kaşlarını Çatan Adam" class="emojibox" type="submit" name="emojiuser" value="🙍‍♂️"></input>
      <input none="Kaşlarını Çatan Kadın" class="emojibox" type="submit" name="emojiuser" value="🙍‍♀️"></input>
      <input none="Surat Asan Kişi" class="emojibox" type="submit" name="emojiuser" value="🙎"></input>
      <input none="Somurtkan Adam" class="emojibox" type="submit" name="emojiuser" value="🙎‍♂️"></input>
      <input none="Somurtkan Kadın" class="emojibox" type="submit" name="emojiuser" value="🙎‍♀️"></input>
      <input none="Hayır İşareti Yapan Kadın" class="emojibox" type="submit" name="emojiuser" value="🙅"></input>
      <input none="Hayır Yapan Adam" class="emojibox" type="submit" name="emojiuser" value="🙅‍♂️"></input>
      <input none="Hayır Yapan Kadın" class="emojibox" type="submit" name="emojiuser" value="🙅‍♀️"></input>
      <input none="İyi Hareket Eden Kişi" class="emojibox" type="submit" name="emojiuser" value="🙆"></input>
      <input none="Tamam El Hareketi Yapan Adam" class="emojibox" type="submit" name="emojiuser" value="🙆‍♂️"></input>
      <input none="Tamam El Hareketi Yapan Kadın" class="emojibox" type="submit" name="emojiuser" value="🙆‍♀️"></input>
      <input none="Elini Deviren Kişi" class="emojibox" type="submit" name="emojiuser" value="💁"></input>
      <input none="Elini Deviren Erkek" class="emojibox" type="submit" name="emojiuser" value="💁‍♂️"></input>
      <input none="Elini Deviren Kadın" class="emojibox" type="submit" name="emojiuser" value="💁‍♀️"></input>
      <input none="El Kaldıran Kişi" class="emojibox" type="submit" name="emojiuser" value="🙋"></input>
      <input none="El Kaldıran Adam" class="emojibox" type="submit" name="emojiuser" value="🙋‍♂️"></input>
      <input none="El Kaldıran Kadın" class="emojibox" type="submit" name="emojiuser" value="🙋‍♀️"></input>
      <input none="Eğilen Kişi" class="emojibox" type="submit" name="emojiuser" value="🙇"></input>
      <input none="Eğilen Adam" class="emojibox" type="submit" name="emojiuser" value="🙇‍♂️"></input>
      <input none="Eğilen Kadın" class="emojibox" type="submit" name="emojiuser" value="🙇‍♀️"></input>
      <input none="Elini Başına Atan Kişi" class="emojibox" type="submit" name="emojiuser" value="🤦"></input>
      <input none="Elini Başına Atan Erkek" class="emojibox" type="submit" name="emojiuser" value="🤦‍♂️"></input>
      <input none="Elini Başına Atan Kadın" class="emojibox" type="submit" name="emojiuser" value="🤦‍♀️"></input>
      <input none="Omuz Silken Kişi" class="emojibox" type="submit" name="emojiuser" value="🤷"></input>
      <input none="Omuz Silken Adam" class="emojibox" type="submit" name="emojiuser" value="🤷‍♂️"></input>
      <input none="Omuz Silken Kadın" class="emojibox" type="submit" name="emojiuser" value="🤷‍♀️"></input>
      <input none="Masaj Yaptıran Kişi" class="emojibox" type="submit" name="emojiuser" value="💆"></input>
      <input none="Masaj Yaptıran Erkek" class="emojibox" type="submit" name="emojiuser" value="💆‍♂️"></input>
      <input none="Masaj Yaptıran Kadın" class="emojibox" type="submit" name="emojiuser" value="💆‍♀️"></input>
      <input none="Saç Kestiren Kişi" class="emojibox" type="submit" name="emojiuser" value="💇"></input>
      <input none="Saç Kestiren Erkek" class="emojibox" type="submit" name="emojiuser" value="💇‍♂️"></input>
      <input none="Saç Kestiren Kadın" class="emojibox" type="submit" name="emojiuser" value="💇‍♀️"></input>
      <input none="Yürüyen Kişi" class="emojibox" type="submit" name="emojiuser" value="🚶"></input>
      <input none="Yürüyen Adam" class="emojibox" type="submit" name="emojiuser" value="🚶‍♂️"></input>
      <input none="Yürüyen Kadın" class="emojibox" type="submit" name="emojiuser" value="🚶‍♀️"></input>
      <input none="Koşan Kişi" class="emojibox" type="submit" name="emojiuser" value="🏃"></input>
      <input none="Koşan Adam" class="emojibox" type="submit" name="emojiuser" value="🏃‍♂️"></input>
      <input none="Koşan Kadın" class="emojibox" type="submit" name="emojiuser" value="🏃‍♀️"></input>
      <input none="Dans Eden Kadın" class="emojibox" type="submit" name="emojiuser" value="💃"></input>
      <input none="Dans Eden Erkek" class="emojibox" type="submit" name="emojiuser" value="🕺"></input>
      <input none="Tavşan Kulaklı İnsanlar" class="emojibox" type="submit" name="emojiuser" value="👯"></input>
      <input none="Tavşan Kulaklı Erkekler" class="emojibox" type="submit" name="emojiuser" value="👯‍♂️"></input>
      <input none="Tavşan Kulaklı Kadınlar" class="emojibox" type="submit" name="emojiuser" value="👯‍♀️"></input>
      <input none="Buhar Odasındaki Kadın" class="emojibox" type="submit" name="emojiuser" value="🧖‍♀️"></input>
      <input none="Buhar Odasındaki Erkek" class="emojibox" type="submit" name="emojiuser" value="🧖‍♂️"></input>
      <input none="Takım Elbise Giyen Adam" class="emojibox" type="submit" name="emojiuser" value="🕴"></input>
      <input none="Siluette Göğüs" class="emojibox" type="submit" name="emojiuser" value="👤"></input>
      <input none="Siluette Büstler" class="emojibox" type="submit" name="emojiuser" value="👥"></input>
      <input none="El Ele Tutuşan Erkek ve Kadın" class="emojibox" type="submit" name="emojiuser" value="👫"></input>
      <input none="El Ele Tutuşan İki Adam" class="emojibox" type="submit" name="emojiuser" value="👬"></input>
      <input none="El Ele Tutuşan İki Kadın" class="emojibox" type="submit" name="emojiuser" value="👭"></input>
      <input none="Öpücük" class="emojibox" type="submit" name="emojiuser" value="💏"></input>
      <input none="Öpücük: Erkek, Erkek" class="emojibox" type="submit" name="emojiuser" value="👨‍❤️‍💋‍👨"></input>
      <input none="Öpücük: Kadın, Kadın" class="emojibox" type="submit" name="emojiuser" value="👩‍❤️‍💋‍👩"></input>
      <input none="Çift ile Kalp" class="emojibox" type="submit" name="emojiuser" value="💑"></input>
      <input none="Kalpli Çift: Adam, Adam" class="emojibox" type="submit" name="emojiuser" value="👨‍❤️‍👨"></input>
      <input none="Kalpli Çift: Kadın, Kadın" class="emojibox" type="submit" name="emojiuser" value="👩‍❤️‍👩"></input>
      <input none="Aile" class="emojibox" type="submit" name="emojiuser" value="👪"></input>
      <input none="Aile: Erkek, Kadın, Erkek" class="emojibox" type="submit" name="emojiuser" value="👨‍👩‍👦"></input>
      <input none="Aile: Erkek, Kadın, Kız" class="emojibox" type="submit" name="emojiuser" value="👨‍👩‍👧"></input>
      <input none="Aile: Kadın, Kız, Erkek" class="emojibox" type="submit" name="emojiuser" value="👨‍👩‍👧‍👦"></input>
      <input none="Aile: Erkek, Kadın, Oğlan, Oğlan" class="emojibox" type="submit" name="emojiuser" value="👨‍👩‍👦‍👦"></input>
      <input none="Aile: Erkek, Kadın, Kız, Kız" class="emojibox" type="submit" name="emojiuser" value="👨‍👩‍👧‍👧"></input>
      <input none="Aile: Erkek, Erkek, Oğlan" class="emojibox" type="submit" name="emojiuser" value="👨‍👨‍👦"></input>
      <input none="Aile: Erkek, Erkek, Kız" class="emojibox" type="submit" name="emojiuser" value="👨‍👨‍👧"></input>
      <input none="Aile: Erkek, Erkek, Kız, Oğlan" class="emojibox" type="submit" name="emojiuser" value="👨‍👨‍👧‍👦"></input>
      <input none="Aile: Erkek, Erkek, Oğlan, Oğlan" class="emojibox" type="submit" name="emojiuser" value="👨‍👨‍👦‍👦"></input>
      <input none="Aile: Erkek, Erkek, Kız, Kız" class="emojibox" type="submit" name="emojiuser" value="👨‍👨‍👧‍👧"></input>
      <input none="Aile: Kadın, Kadın, Erkek" class="emojibox" type="submit" name="emojiuser" value="👩‍👩‍👦"></input>
      <input none="Aile: Kadın, Kadın, Kız" class="emojibox" type="submit" name="emojiuser" value="👩‍👩‍👧"></input>
      <input none="Aile: Kadın, Kadın, Kız, Erkek" class="emojibox" type="submit" name="emojiuser" value="👩‍👩‍👧‍👦"></input>
      <input none="Aile: Kadın, Kadın, Oğlan, Oğlan" class="emojibox" type="submit" name="emojiuser" value="👩‍👩‍👦‍👦"></input>
      <input none="Aile: Kadın, Kadın, Kız, Kız" class="emojibox" type="submit" name="emojiuser" value="👩‍👩‍👧‍👧"></input>
      <input none="Aile: Erkek, Erkek" class="emojibox" type="submit" name="emojiuser" value="👨‍👦"></input>
      <input none="Aile: Erkek, Oğlan, Oğlan" class="emojibox" type="submit" name="emojiuser" value="👨‍👦‍👦"></input>
      <input none="Aile: Erkek, Kız" class="emojibox" type="submit" name="emojiuser" value="👨‍👧"></input>
      <input none="Aile: Erkek, Kız, Erkek" class="emojibox" type="submit" name="emojiuser" value="👨‍👧‍👦"></input>
      <input none="Aile: Erkek, Kız, Kız" class="emojibox" type="submit" name="emojiuser" value="👨‍👧‍👧"></input>
      <input none="Aile: Kadın, Erkek" class="emojibox" type="submit" name="emojiuser" value="👩‍👦"></input>
      <input none="Aile: Kadın, Erkek, Erkek" class="emojibox" type="submit" name="emojiuser" value="👩‍👦‍👦"></input>
      <input none="Aile: Kadın, Kız" class="emojibox" type="submit" name="emojiuser" value="👩‍👧"></input>
      <input none="Aile: Kadın, Kız, Erkek" class="emojibox" type="submit" name="emojiuser" value="👩‍👧‍👦"></input>
      <input none="Aile: Kadın, Kız, Kız" class="emojibox" type="submit" name="emojiuser" value="👩‍👧‍👧"></input>
      <div class="emoji-kategori-box">😺 Animales ➤</div>
      <input none="Sırıtan Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😺"></input>
      <input none="Gülen Gözlerle Sırıtan Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😸"></input>
      <input none="Sevinç Gözyaşlarıyla Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😹"></input>
      <input none="Kalp Gözlü Gülümseyen Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😻"></input>
      <input none="Alaycı Bir Gülümseme ile Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😼"></input>
      <input none="Kedi Yüzü Öpüşme" class="emojibox" type="submit" name="emojiuser" value="😽"></input>
      <input none="Yorgun Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="🙀"></input>
      <input none="Ağlayan Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😿"></input>
      <input none="Somurtkan Kedi Yüzü" class="emojibox" type="submit" name="emojiuser" value="😾"></input>
      <input none="Gözünü Kapatan Maymun" class="emojibox" type="submit" name="emojiuser" value="🙈"></input>
      <input none="Duymayan Maymun" class="emojibox" type="submit" name="emojiuser" value="🙉"></input>
      <input none="Ağzını Kapatan Maymun" class="emojibox" type="submit" name="emojiuser" value="🙊"></input>
      <input none="Çarpışma" class="emojibox" type="submit" name="emojiuser" value="💥"></input>
      <input none="Maymun Surat" class="emojibox" type="submit" name="emojiuser" value="🐵"></input>
      <input none="Maymun" class="emojibox" type="submit" name="emojiuser" value="🐒"></input>
      <input none="Goril" class="emojibox" type="submit" name="emojiuser" value="🦍"></input>
      <input none="Köpek Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐶"></input>
      <input none="Köpek" class="emojibox" type="submit" name="emojiuser" value="🐕"></input>
      <input none="Kaniş" class="emojibox" type="submit" name="emojiuser" value="🐩"></input>
      <input none="Kurt Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐺"></input>
      <input none="Tilki Yüzü" class="emojibox" type="submit" name="emojiuser" value="🦊"></input>
      <input none="Kedi Surat" class="emojibox" type="submit" name="emojiuser" value="🐱"></input>
      <input none="Kedi" class="emojibox" type="submit" name="emojiuser" value="🐈"></input>
      <input none="Aslan Yüzü" class="emojibox" type="submit" name="emojiuser" value="🦁"></input>
      <input none="Kaplan Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐯"></input>
      <input none="Kaplan" class="emojibox" type="submit" name="emojiuser" value="🐅"></input>
      <input none="Leopar" class="emojibox" type="submit" name="emojiuser" value="🐆"></input>
      <input none="At Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐴"></input>
      <input none="At" class="emojibox" type="submit" name="emojiuser" value="🐎"></input>
      <input none="Tek Boynuzlu At" class="emojibox" type="submit" name="emojiuser" value="🦄"></input>
      <input none="Zebra" class="emojibox" type="submit" name="emojiuser" value="🦓"></input>
      <input none="İnek Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐮"></input>
      <input none="Öküz" class="emojibox" type="submit" name="emojiuser" value="🐂"></input>
      <input none="Manda" class="emojibox" type="submit" name="emojiuser" value="🐃"></input>
      <input none="İnek" class="emojibox" type="submit" name="emojiuser" value="🐄"></input>
      <input none="Domuz Suratı" class="emojibox" type="submit" name="emojiuser" value="🐷"></input>
      <input none="Domuz" class="emojibox" type="submit" name="emojiuser" value="🐖"></input>
      <input none="Domuz" class="emojibox" type="submit" name="emojiuser" value="🐗"></input>
      <input none="Domuz Burnu" class="emojibox" type="submit" name="emojiuser" value="🐽"></input>
      <input none="Koyun" class="emojibox" type="submit" name="emojiuser" value="🐏"></input>
      <input none="Koyun" class="emojibox" type="submit" name="emojiuser" value="🐑"></input>
      <input none="Keçi" class="emojibox" type="submit" name="emojiuser" value="🐐"></input>
      <input none="Deve" class="emojibox" type="submit" name="emojiuser" value="🐪"></input>
      <input none="Deve" class="emojibox" type="submit" name="emojiuser" value="🐫"></input>
      <input none="Zürafa" class="emojibox" type="submit" name="emojiuser" value="🦒"></input>
      <input none="Fil" class="emojibox" type="submit" name="emojiuser" value="🐘"></input>
      <input none="Gergedan" class="emojibox" type="submit" name="emojiuser" value="🦏"></input>
      <input none="Fare Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐭"></input>
      <input none="Fare" class="emojibox" type="submit" name="emojiuser" value="🐁"></input>
      <input none="Sıçan" class="emojibox" type="submit" name="emojiuser" value="🐀"></input>
      <input none="Hamster Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐹"></input>
      <input none="Tavşan Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐰"></input>
      <input none="Tavşan" class="emojibox" type="submit" name="emojiuser" value="🐇"></input>
      <input none="Kirpi" class="emojibox" type="submit" name="emojiuser" value="🦔"></input>
      <input none="Yarasa" class="emojibox" type="submit" name="emojiuser" value="🦇"></input>
      <input none="Ayı Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐻"></input>
      <input none="Koala" class="emojibox" type="submit" name="emojiuser" value="🐨"></input>
      <input none="Panda Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐼"></input>
      <input none="Pati İzleri" class="emojibox" type="submit" name="emojiuser" value="🐾"></input>
      <input none="Horoz" class="emojibox" type="submit" name="emojiuser" value="🦃"></input>
      <input none="Tavuk" class="emojibox" type="submit" name="emojiuser" value="🐔"></input>
      <input none="Horoz" class="emojibox" type="submit" name="emojiuser" value="🐓"></input>
      <input none="Civciv" class="emojibox" type="submit" name="emojiuser" value="🐣"></input>
      <input none="Civciv" class="emojibox" type="submit" name="emojiuser" value="🐤"></input>
      <input none="Öne Bakan Civciv" class="emojibox" type="submit" name="emojiuser" value="🐥"></input>
      <input none="Kuş" class="emojibox" type="submit" name="emojiuser" value="🐦"></input>
      <input none="Penguen" class="emojibox" type="submit" name="emojiuser" value="🐧"></input>
      <input none="Kartal" class="emojibox" type="submit" name="emojiuser" value="🦅"></input>
      <input none="Ördek" class="emojibox" type="submit" name="emojiuser" value="🦆"></input>
      <input none="Baykuş" class="emojibox" type="submit" name="emojiuser" value="🦉"></input>
      <input none="Kurbağa Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐸"></input>
      <input none="Timsah" class="emojibox" type="submit" name="emojiuser" value="🐊"></input>
      <input none="Kaplumbağa" class="emojibox" type="submit" name="emojiuser" value="🐢"></input>
      <input none="Kertenkele" class="emojibox" type="submit" name="emojiuser" value="🦎"></input>
      <input none="Yılan" class="emojibox" type="submit" name="emojiuser" value="🐍"></input>
      <input none="Ejderha Yüzü" class="emojibox" type="submit" name="emojiuser" value="🐲"></input>
      <input none="Ejderha" class="emojibox" type="submit" name="emojiuser" value="🐉"></input>
      <input none="Sauropod" class="emojibox" type="submit" name="emojiuser" value="🦕"></input>
      <input none="T-Rex" class="emojibox" type="submit" name="emojiuser" value="🦖"></input>
      <input none="Fışkıran Balina" class="emojibox" type="submit" name="emojiuser" value="🐳"></input>
      <input none="Balina" class="emojibox" type="submit" name="emojiuser" value="🐋"></input>
      <input none="Yunus" class="emojibox" type="submit" name="emojiuser" value="🐬"></input>
      <input none="Balık" class="emojibox" type="submit" name="emojiuser" value="🐟"></input>
      <input none="Tropikal Balık" class="emojibox" type="submit" name="emojiuser" value="🐠"></input>
      <input none="Balon Balığı" class="emojibox" type="submit" name="emojiuser" value="🐡"></input>
      <input none="Köpek Balığı" class="emojibox" type="submit" name="emojiuser" value="🦈"></input>
      <input none="Ahtapot" class="emojibox" type="submit" name="emojiuser" value="🐙"></input>
      <input none="Spiral Kabuk" class="emojibox" type="submit" name="emojiuser" value="🐚"></input>
      <input none="Yengeç" class="emojibox" type="submit" name="emojiuser" value="🦀"></input>
      <input none="Karides" class="emojibox" type="submit" name="emojiuser" value="🦐"></input>
      <input none="Kalamar" class="emojibox" type="submit" name="emojiuser" value="🦑"></input>
      <input none="Salyangoz" class="emojibox" type="submit" name="emojiuser" value="🐌"></input>
      <input none="Kelebek" class="emojibox" type="submit" name="emojiuser" value="🦋"></input>
      <input none="Tırtıl" class="emojibox" type="submit" name="emojiuser" value="🐛"></input>
      <input none="Karınca" class="emojibox" type="submit" name="emojiuser" value="🐜"></input>
      <input none="Bal Arısı" class="emojibox" type="submit" name="emojiuser" value="🐝"></input>
      <input none="Uğur Böceği" class="emojibox" type="submit" name="emojiuser" value="🐞"></input>
      <input none="Kriket" class="emojibox" type="submit" name="emojiuser" value="🦗"></input>
      <input none="Akrep" class="emojibox" type="submit" name="emojiuser" value="🦂"></input>
      <div class="emoji-kategori-box">💐 Flores➤</div>
      <input none="Buket" class="emojibox" type="submit" name="emojiuser" value="💐"></input>
      <input none="Kiraz Çiçeği" class="emojibox" type="submit" name="emojiuser" value="🌸"></input>
      <input none="Beyaz Çiçek" class="emojibox" type="submit" name="emojiuser" value="💮"></input>
      <input none="Gül" class="emojibox" type="submit" name="emojiuser" value="🌹"></input>
      <input none="Solmuş Gül" class="emojibox" type="submit" name="emojiuser" value="🥀"></input>
      <input none="Ebegümeci" class="emojibox" type="submit" name="emojiuser" value="🌺"></input>
      <input none="Ayçiçeği" class="emojibox" type="submit" name="emojiuser" value="🌻"></input>
      <input none="Çiçek" class="emojibox" type="submit" name="emojiuser" value="🌼"></input>
      <input none="Lale" class="emojibox" type="submit" name="emojiuser" value="🌷"></input>
      <input none="Fidan" class="emojibox" type="submit" name="emojiuser" value="🌱"></input>
      <input none="Yaprak Dökmeyen Ağaç" class="emojibox" type="submit" name="emojiuser" value="🌲"></input>
      <input none="Yaprak Döken Ağaç" class="emojibox" type="submit" name="emojiuser" value="🌳"></input>
      <input none="Palmiye" class="emojibox" type="submit" name="emojiuser" value="🌴"></input>
      <input none="Kaktüs" class="emojibox" type="submit" name="emojiuser" value="🌵"></input>
      <input none="Pirinç Demeti" class="emojibox" type="submit" name="emojiuser" value="🌾"></input>
      <input none="Ot" class="emojibox" type="submit" name="emojiuser" value="🌿"></input>
      <input none="Dört Yapraklı Yonca" class="emojibox" type="submit" name="emojiuser" value="🍀"></input>
      <input none="Akçaağaç Yaprağı" class="emojibox" type="submit" name="emojiuser" value="🍁"></input>
      <input none="Düşen Yaprak" class="emojibox" type="submit" name="emojiuser" value="🍂"></input>
      <input none="Rüzgarda Çırpınan Yaprak" class="emojibox" type="submit" name="emojiuser" value="🍃"></input>
      <input none="Mantar" class="emojibox" type="submit" name="emojiuser" value="🍄"></input>
      <input none="Kestane" class="emojibox" type="submit" name="emojiuser" value="🌰"></input>
      <div class="emoji-kategori-box">🌍 Mundo ➤</div>
      <input none="Avrupa-Afrika Gösteren Dünya" class="emojibox" type="submit" name="emojiuser" value="🌍"></input>
      <input none="Amerikayı Gösteren Dünya" class="emojibox" type="submit" name="emojiuser" value="🌎"></input>
      <input none="Asya-Avustralya Gösteren Dünya" class="emojibox" type="submit" name="emojiuser" value="🌏"></input>
      <input none="Meridyenli Küre" class="emojibox" type="submit" name="emojiuser" value="🌐"></input>
      <input none="Yeni Ay" class="emojibox" type="submit" name="emojiuser" value="🌑"></input>
      <input none="Hilal Ayı" class="emojibox" type="submit" name="emojiuser" value="🌒"></input>
      <input none="İlk Çeyrek Ay" class="emojibox" type="submit" name="emojiuser" value="🌓"></input>
      <input none="Kambur Ay" class="emojibox" type="submit" name="emojiuser" value="🌔"></input>
      <input none="Dolunay" class="emojibox" type="submit" name="emojiuser" value="🌕"></input>
      <input none="Küçülen Ay" class="emojibox" type="submit" name="emojiuser" value="🌖"></input>
      <input none="Son Çeyrek Ay" class="emojibox" type="submit" name="emojiuser" value="🌗"></input>
      <input none="Hilal Ayı" class="emojibox" type="submit" name="emojiuser" value="🌘"></input>
      <input none="Hilal" class="emojibox" type="submit" name="emojiuser" value="🌙"></input>
      <input none="Yeni Ay Yüzü" class="emojibox" type="submit" name="emojiuser" value="🌚"></input>
      <input none="İlk Çeyrek Ay Yüzü" class="emojibox" type="submit" name="emojiuser" value="🌛"></input>
      <input none="Son Çeyrek Ay Yüzü" class="emojibox" type="submit" name="emojiuser" value="🌜"></input>
      <input none="Dolunay Yüzü" class="emojibox" type="submit" name="emojiuser" value="🌝"></input>
      <input none="Güneş Yüzü" class="emojibox" type="submit" name="emojiuser" value="🌞"></input>
      <input none="Beyaz Orta Yıldız" class="emojibox" type="submit" name="emojiuser" value="⭐"></input>
      <input none="Parlayan Yıldız" class="emojibox" type="submit" name="emojiuser" value="🌟"></input>
      <input none="Kayan Yıldız" class="emojibox" type="submit" name="emojiuser" value="🌠"></input>
      <input none="Bulut" class="emojibox" type="submit" name="emojiuser" value="☁"></input>
      <input none="Bulut Arkasındaki Güneş" class="emojibox" type="submit" name="emojiuser" value="⛅"></input>
      <input none="Gökkuşağı" class="emojibox" type="submit" name="emojiuser" value="🌈"></input>
      <input none="Yağmur Damlalı Şemsiye" class="emojibox" type="submit" name="emojiuser" value="☔"></input>
      <input none="Şimşek" class="emojibox" type="submit" name="emojiuser" value="⚡"></input>
      <input none="Kardan Adam" class="emojibox" type="submit" name="emojiuser" value="⛄"></input>
      <input none="Ateş" class="emojibox" type="submit" name="emojiuser" value="🔥"></input>
      <input none="Damlacık" class="emojibox" type="submit" name="emojiuser" value="💧"></input>
      <input none="Su Dalgası" class="emojibox" type="submit" name="emojiuser" value="🌊"></input>
      <input none="Noel Ağacı" class="emojibox" type="submit" name="emojiuser" value="🎄"></input>
      <input none="Parıltı" class="emojibox" type="submit" name="emojiuser" value="✨"></input>
      <input none="Tanabata Ağacı" class="emojibox" type="submit" name="emojiuser" value="🎋"></input>
      <input none="Çam Dekorasyonu" class="emojibox" type="submit" name="emojiuser" value="🎍"></input>
      <div class="emoji-kategori-box">🍔 Comida➤</div>
      <input none="Üzüm" class="emojibox" type="submit" name="emojiuser" value="🍇"></input>
      <input none="Kavun" class="emojibox" type="submit" name="emojiuser" value="🍈"></input>
      <input none="Karpuz" class="emojibox" type="submit" name="emojiuser" value="🍉"></input>
      <input none="Mandalina" class="emojibox" type="submit" name="emojiuser" value="🍊"></input>
      <input none="Limon" class="emojibox" type="submit" name="emojiuser" value="🍋"></input>
      <input none="Muz" class="emojibox" type="submit" name="emojiuser" value="🍌"></input>
      <input none="Ananas" class="emojibox" type="submit" name="emojiuser" value="🍍"></input>
      <input none="Kırmızı Elma" class="emojibox" type="submit" name="emojiuser" value="🍎"></input>
      <input none="Yeşil Elma" class="emojibox" type="submit" name="emojiuser" value="🍏"></input>
      <input none="Armut" class="emojibox" type="submit" name="emojiuser" value="🍐"></input>
      <input none="Şeftali" class="emojibox" type="submit" name="emojiuser" value="🍑"></input>
      <input none="Kiraz" class="emojibox" type="submit" name="emojiuser" value="🍒"></input>
      <input none="Çilek" class="emojibox" type="submit" name="emojiuser" value="🍓"></input>
      <input none="Kivi" class="emojibox" type="submit" name="emojiuser" value="🥝"></input>
      <input none="Domates" class="emojibox" type="submit" name="emojiuser" value="🍅"></input>
      <input none="Hindistan Cevizi" class="emojibox" type="submit" name="emojiuser" value="🥥"></input>
      <input none="Avokado" class="emojibox" type="submit" name="emojiuser" value="🥑"></input>
      <input none="Patlıcan" class="emojibox" type="submit" name="emojiuser" value="🍆"></input>
      <input none="Patates" class="emojibox" type="submit" name="emojiuser" value="🥔"></input>
      <input none="Havuç" class="emojibox" type="submit" name="emojiuser" value="🥕"></input>
      <input none="Mısır" class="emojibox" type="submit" name="emojiuser" value="🌽"></input>
      <input none="Salatalık" class="emojibox" type="submit" name="emojiuser" value="🥒"></input>
      <input none="Brokoli" class="emojibox" type="submit" name="emojiuser" value="🥦"></input>
      <input none="Yer Fıstığı" class="emojibox" type="submit" name="emojiuser" value="🥜"></input>
      <input none="Ekmek" class="emojibox" type="submit" name="emojiuser" value="🍞"></input>
      <input none="Kruvasan" class="emojibox" type="submit" name="emojiuser" value="🥐"></input>
      <input none="Baget Ekmek" class="emojibox" type="submit" name="emojiuser" value="🥖"></input>
      <input none="Çubuk Kraker" class="emojibox" type="submit" name="emojiuser" value="🥨"></input>
      <input none="Krep" class="emojibox" type="submit" name="emojiuser" value="🥞"></input>
      <input none="Peynir Dilimi" class="emojibox" type="submit" name="emojiuser" value="🧀"></input>
      <input none="Kemikli Et" class="emojibox" type="submit" name="emojiuser" value="🍖"></input>
      <input none="Kanat" class="emojibox" type="submit" name="emojiuser" value="🍗"></input>
      <input none="Kesilmiş Et" class="emojibox" type="submit" name="emojiuser" value="🥩"></input>
      <input none="Domuz Pastırması" class="emojibox" type="submit" name="emojiuser" value="🥓"></input>
      <input none="Hamburger" class="emojibox" type="submit" name="emojiuser" value="🍔"></input>
      <input none="Patates Kızartması" class="emojibox" type="submit" name="emojiuser" value="🍟"></input>
      <input none="Pizza" class="emojibox" type="submit" name="emojiuser" value="🍕"></input>
      <input none="Sosisli" class="emojibox" type="submit" name="emojiuser" value="🌭"></input>
      <input none="Sandviç" class="emojibox" type="submit" name="emojiuser" value="🥪"></input>
      <input none="Taco" class="emojibox" type="submit" name="emojiuser" value="🌮"></input>
      <input none="Burrito" class="emojibox" type="submit" name="emojiuser" value="🌯"></input>
      <input none="Yemek Pişirme" class="emojibox" type="submit" name="emojiuser" value="🍳"></input>
      <input none="Kap Yemek" class="emojibox" type="submit" name="emojiuser" value="🍲"></input>
      <input none="Kaşıklı Kase" class="emojibox" type="submit" name="emojiuser" value="🥣"></input>
      <input none="Yeşil Salata" class="emojibox" type="submit" name="emojiuser" value="🥗"></input>
      <input none="Patlamış Mısır" class="emojibox" type="submit" name="emojiuser" value="🍿"></input>
      <input none="Konserve" class="emojibox" type="submit" name="emojiuser" value="🥫"></input>
      <input none="Bento Kutusu" class="emojibox" type="submit" name="emojiuser" value="🍱"></input>
      <input none="Pirinç Kraker" class="emojibox" type="submit" name="emojiuser" value="🍘"></input>
      <input none="Pirinç Topu" class="emojibox" type="submit" name="emojiuser" value="🍙"></input>
      <input none="Pişmiş Pirinç" class="emojibox" type="submit" name="emojiuser" value="🍚"></input>
      <input none="Köri Pirinç" class="emojibox" type="submit" name="emojiuser" value="🍛"></input>
      <input none="Buharlama Kasesi" class="emojibox" type="submit" name="emojiuser" value="🍜"></input>
      <input none="Spagetti" class="emojibox" type="submit" name="emojiuser" value="🍝"></input>
      <input none="Kavrulmuş Tatlı Patates" class="emojibox" type="submit" name="emojiuser" value="🍠"></input>
      <input none="Oden" class="emojibox" type="submit" name="emojiuser" value="🍢"></input>
      <input none="Suşi" class="emojibox" type="submit" name="emojiuser" value="🍣"></input>
      <input none="Kızarmış Karides" class="emojibox" type="submit" name="emojiuser" value="🍤"></input>
      <input none="Girdaplı Balık Kek" class="emojibox" type="submit" name="emojiuser" value="🍥"></input>
      <input none="Dango" class="emojibox" type="submit" name="emojiuser" value="🍡"></input>
      <input none="Hamur Tatlısı" class="emojibox" type="submit" name="emojiuser" value="🥟"></input>
      <input none="Şans Kurabiyesi" class="emojibox" type="submit" name="emojiuser" value="🥠"></input>
      <input none="Paket Servisi Kutusu" class="emojibox" type="submit" name="emojiuser" value="🥡"></input>
      <input none="Yumuşak Dondurma" class="emojibox" type="submit" name="emojiuser" value="🍦"></input>
      <input none="Traşlanmış Buz" class="emojibox" type="submit" name="emojiuser" value="🍧"></input>
      <input none="Dondurma" class="emojibox" type="submit" name="emojiuser" value="🍨"></input>
      <input none="Tatlı Çörek" class="emojibox" type="submit" name="emojiuser" value="🍩"></input>
      <input none="Kurabiye" class="emojibox" type="submit" name="emojiuser" value="🍪"></input>
      <input none="Doğum Günü Pastası" class="emojibox" type="submit" name="emojiuser" value="🎂"></input>
      <input none="Pasta Dilimi" class="emojibox" type="submit" name="emojiuser" value="🍰"></input>
      <input none="Turta" class="emojibox" type="submit" name="emojiuser" value="🥧"></input>
      <input none="Çikolata" class="emojibox" type="submit" name="emojiuser" value="🍫"></input>
      <input none="Şeker" class="emojibox" type="submit" name="emojiuser" value="🍬"></input>
      <input none="Lolipop" class="emojibox" type="submit" name="emojiuser" value="🍭"></input>
      <input none="Muhallebi" class="emojibox" type="submit" name="emojiuser" value="🍮"></input>
      <input none="Bal Küpü" class="emojibox" type="submit" name="emojiuser" value="🍯"></input>
      <input none="Biberon" class="emojibox" type="submit" name="emojiuser" value="🍼"></input>
      <input none="Bir Bardak Süt" class="emojibox" type="submit" name="emojiuser" value="🥛"></input>
      <input none="Bir Fincan Sıcak İçecek" class="emojibox" type="submit" name="emojiuser" value="☕"></input>
      <input none="Sapsız Çay Fincanı" class="emojibox" type="submit" name="emojiuser" value="🍵"></input>
      <input none="Hatır" class="emojibox" type="submit" name="emojiuser" value="🍶"></input>
      <input none="Haşhaş Mantarlı Şişe" class="emojibox" type="submit" name="emojiuser" value="🍾"></input>
      <input none="Şarap Bardağı" class="emojibox" type="submit" name="emojiuser" value="🍷"></input>
      <input none="Kokteyl Bardağı" class="emojibox" type="submit" name="emojiuser" value="🍸"></input>
      <input none="Tropikal İçecek" class="emojibox" type="submit" name="emojiuser" value="🍹"></input>
      <input none="Bira Kupası" class="emojibox" type="submit" name="emojiuser" value="🍺"></input>
      <input none="Tungur Bira Kupaları" class="emojibox" type="submit" name="emojiuser" value="🍻"></input>
      <input none="Tokuşturulan Bira Bardakları" class="emojibox" type="submit" name="emojiuser" value="🥂"></input>
      <input none="İçki Olan Bardak" class="emojibox" type="submit" name="emojiuser" value="🥃"></input>
      <input none="Pipetli Bardak" class="emojibox" type="submit" name="emojiuser" value="🥤"></input>
      <input none="Yemek Çubukları" class="emojibox" type="submit" name="emojiuser" value="🥢"></input>
      <input none="Çatal ve Bıçak" class="emojibox" type="submit" name="emojiuser" value="🍴"></input>
      <input none="Kaşık" class="emojibox" type="submit" name="emojiuser" value="🥄"></input>
      <div class="emoji-kategori-box">🏇 Deportes ➤</div>
      <input none="At Yarışı" class="emojibox" type="submit" name="emojiuser" value="🏇"></input>
      <input none="Kayakçı" class="emojibox" type="submit" name="emojiuser" value="🏂"></input>
      <input none="Kadın Tırmanma" class="emojibox" type="submit" name="emojiuser" value="🧗‍♀️"></input>
      <input none="Tırmanan Adam" class="emojibox" type="submit" name="emojiuser" value="🧗‍♂️"></input>
      <input none="Lotus Pozisyonunda Kadın" class="emojibox" type="submit" name="emojiuser" value="🧘‍♀️"></input>
      <input none="Lotus Pozisyonunda Erkek" class="emojibox" type="submit" name="emojiuser" value="🧘‍♂️"></input>
      <input none="Golf Oynayan Kişi" class="emojibox" type="submit" name="emojiuser" value="🏌"></input>
      <input none="Erkek Golf" class="emojibox" type="submit" name="emojiuser" value="🏌️‍♂️"></input>
      <input none="Kadın Golf" class="emojibox" type="submit" name="emojiuser" value="🏌️‍♀️"></input>
      <input none="Sörf Yapan Kişi" class="emojibox" type="submit" name="emojiuser" value="🏄"></input>
      <input none="Erkek Sörfçü" class="emojibox" type="submit" name="emojiuser" value="🏄‍♂️"></input>
      <input none="Kadın Sörfçü" class="emojibox" type="submit" name="emojiuser" value="🏄‍♀️"></input>
      <input none="Teknede Kürek Çeken Kişi" class="emojibox" type="submit" name="emojiuser" value="🚣"></input>
      <input none="Adam Kürekli Tekne" class="emojibox" type="submit" name="emojiuser" value="🚣‍♂️"></input>
      <input none="Teknede Kürek Çeken Kadın" class="emojibox" type="submit" name="emojiuser" value="🚣‍♀️"></input>
      <input none="Yüzen Kişi" class="emojibox" type="submit" name="emojiuser" value="🏊"></input>
      <input none="Yüzen Adam" class="emojibox" type="submit" name="emojiuser" value="🏊‍♂️"></input>
      <input none="Yüzen Kadın" class="emojibox" type="submit" name="emojiuser" value="🏊‍♀️"></input>
      <input none="Zıplayan Top" class="emojibox" type="submit" name="emojiuser" value="⛹"></input>
      <input none="Adam Zıplayan Top" class="emojibox" type="submit" name="emojiuser" value="⛹️‍♂️"></input>
      <input none="Kadın Zıplayan Top" class="emojibox" type="submit" name="emojiuser" value="⛹️‍♀️"></input>
      <input none="Ağırlık Kaldıran Kişi" class="emojibox" type="submit" name="emojiuser" value="🏋"></input>
      <input none="Ağırlık Kaldıran Adam" class="emojibox" type="submit" name="emojiuser" value="🏋️‍♂️"></input>
      <input none="Ağırlık Kaldıran Kadın" class="emojibox" type="submit" name="emojiuser" value="🏋️‍♀️"></input>
      <input none="Bisiklet Süren Kişi" class="emojibox" type="submit" name="emojiuser" value="🚴"></input>
      <input none="Bisiklet Süren Erkek" class="emojibox" type="submit" name="emojiuser" value="🚴‍♂️"></input>
      <input none="Bisiklet Süren Kadın" class="emojibox" type="submit" name="emojiuser" value="🚴‍♀️"></input>
      <input none="Dağda Bisiklet Süren Kişi" class="emojibox" type="submit" name="emojiuser" value="🚵"></input>
      <input none="Dağda Bisiklet Süren Adam" class="emojibox" type="submit" name="emojiuser" value="🚵‍♂️"></input>
      <input none="Dağda Bisiklet Süren Kadın" class="emojibox" type="submit" name="emojiuser" value="🚵‍♀️"></input>
      <input none="Amuda Kalkan Kişi" class="emojibox" type="submit" name="emojiuser" value="🤸"></input>
      <input none="Amuda Kalkan Erkek" class="emojibox" type="submit" name="emojiuser" value="🤸‍♂️"></input>
      <input none="Amuda Kalkan Kadın" class="emojibox" type="submit" name="emojiuser" value="🤸‍♀️"></input>
      <input none="Güreşen İnsanlar" class="emojibox" type="submit" name="emojiuser" value="🤼"></input>
      <input none="Erkekler Güreş" class="emojibox" type="submit" name="emojiuser" value="🤼‍♂️"></input>
      <input none="Kadınlar Güreş" class="emojibox" type="submit" name="emojiuser" value="🤼‍♀️"></input>
      <input none="Su Topu Oynayan Kişi" class="emojibox" type="submit" name="emojiuser" value="🤽"></input>
      <input none="Su Topu Oynayan Erkek" class="emojibox" type="submit" name="emojiuser" value="🤽‍♂️"></input>
      <input none="Su Topu Oynayan Kadın" class="emojibox" type="submit" name="emojiuser" value="🤽‍♀️"></input>
      <input none="Hentbol Oynayan Kişi" class="emojibox" type="submit" name="emojiuser" value="🤾"></input>
      <input none="Hentbol Oynayan Erkek" class="emojibox" type="submit" name="emojiuser" value="🤾‍♂️"></input>
      <input none="Hentbol Oynayan Kadın" class="emojibox" type="submit" name="emojiuser" value="🤾‍♀️"></input>
      <input none="Hokkabazlık Yapan Kişi" class="emojibox" type="submit" name="emojiuser" value="🤹"></input>
      <input none="Erkek Hokkabazlık" class="emojibox" type="submit" name="emojiuser" value="🤹‍♂️"></input>
      <input none="Kadın Hokkabazlık" class="emojibox" type="submit" name="emojiuser" value="🤹‍♀️"></input>
      <input none="Sirk Çadırı" class="emojibox" type="submit" name="emojiuser" value="🎪"></input>
      <input none="Bilet" class="emojibox" type="submit" name="emojiuser" value="🎫"></input>
      <input none="Kupa" class="emojibox" type="submit" name="emojiuser" value="🏆"></input>
      <input none="Spor Madalyası" class="emojibox" type="submit" name="emojiuser" value="🏅"></input>
      <input none="1.lik Madalyası" class="emojibox" type="submit" name="emojiuser" value="🥇"></input>
      <input none="2.lik Madalyası" class="emojibox" type="submit" name="emojiuser" value="🥈"></input>
      <input none="3.lük Madalyası" class="emojibox" type="submit" name="emojiuser" value="🥉"></input>
      <input none="Futbol Topu" class="emojibox" type="submit" name="emojiuser" value="⚽"></input>
      <input none="Beyzbol Topu" class="emojibox" type="submit" name="emojiuser" value="⚾"></input>
      <input none="Basketbol Topu" class="emojibox" type="submit" name="emojiuser" value="🏀"></input>
      <input none="Voleybol Topu" class="emojibox" type="submit" name="emojiuser" value="🏐"></input>
      <input none="Amerikan Futbolu Topu" class="emojibox" type="submit" name="emojiuser" value="🏈"></input>
      <input none="Ragbi Futbolu Topu" class="emojibox" type="submit" name="emojiuser" value="🏉"></input>
      <input none="Tenis Raketi" class="emojibox" type="submit" name="emojiuser" value="🎾"></input>
      <input none="Bowling" class="emojibox" type="submit" name="emojiuser" value="🎳"></input>
      <input none="Kriket Oyunu" class="emojibox" type="submit" name="emojiuser" value="🏏"></input>
      <input none="Çim Jokeyi" class="emojibox" type="submit" name="emojiuser" value="🏑"></input>
      <input none="Buz Hokeyi" class="emojibox" type="submit" name="emojiuser" value="🏒"></input>
      <input none="Masa Tenisi" class="emojibox" type="submit" name="emojiuser" value="🏓"></input>
      <input none="Badminton" class="emojibox" type="submit" name="emojiuser" value="🏸"></input>
      <input none="Boks Eldiveni" class="emojibox" type="submit" name="emojiuser" value="🥊"></input>
      <input none="Dövüş Sanatları Üniforması" class="emojibox" type="submit" name="emojiuser" value="🥋"></input>
      <input none="Delik ile Bayrak" class="emojibox" type="submit" name="emojiuser" value="⛳"></input>
      <input none="Buz Pateni" class="emojibox" type="submit" name="emojiuser" value="⛸"></input>
      <input none="Olta Kamışı" class="emojibox" type="submit" name="emojiuser" value="🎣"></input>
      <input none="Koşu Üstü" class="emojibox" type="submit" name="emojiuser" value="🎽"></input>
      <input none="Kayaklar" class="emojibox" type="submit" name="emojiuser" value="🎿"></input>
      <input none="Kızak" class="emojibox" type="submit" name="emojiuser" value="🛷"></input>
      <input none="Curling Taşı" class="emojibox" type="submit" name="emojiuser" value="🥌"></input>
      <input none="Dart" class="emojibox" type="submit" name="emojiuser" value="🎯"></input>
      <input none="Bilardo Topu" class="emojibox" type="submit" name="emojiuser" value="🎱"></input>
      <input none="Konsol" class="emojibox" type="submit" name="emojiuser" value="🎮"></input>
      <input none="Kumar Makinesi" class="emojibox" type="submit" name="emojiuser" value="🎰"></input>
      <input none="Zar" class="emojibox" type="submit" name="emojiuser" value="🎲"></input>
      <input none="Tiyatro" class="emojibox" type="submit" name="emojiuser" value="🎭"></input>
      <input none="Sanatçı Paleti" class="emojibox" type="submit" name="emojiuser" value="🎨"></input>
      <input none="Müzik" class="emojibox" type="submit" name="emojiuser" value="🎼"></input>
      <input none="Mikrofon" class="emojibox" type="submit" name="emojiuser" value="🎤"></input>
      <input none="Kulaklık" class="emojibox" type="submit" name="emojiuser" value="🎧"></input>
      <input none="Saksafon" class="emojibox" type="submit" name="emojiuser" value="🎷"></input>
      <input none="Gitar" class="emojibox" type="submit" name="emojiuser" value="🎸"></input>
      <input none="Müzikal Klavye" class="emojibox" type="submit" name="emojiuser" value="🎹"></input>
      <input none="Trompet" class="emojibox" type="submit" name="emojiuser" value="🎺"></input>
      <input none="Keman" class="emojibox" type="submit" name="emojiuser" value="🎻"></input>
      <input none="Davul" class="emojibox" type="submit" name="emojiuser" value="🥁"></input>
      <input none="Clepper" class="emojibox" type="submit" name="emojiuser" value="🎬"></input>
      <input none="Yay ve Ok" class="emojibox" type="submit" name="emojiuser" value="🏹"></input>
      <div class="emoji-kategori-box">🗼 Lugares y Viajes➤</div>
      <input none="Japonya Haritası" class="emojibox" type="submit" name="emojiuser" value="🗾"></input>
      <input none="Volkan" class="emojibox" type="submit" name="emojiuser" value="🌋"></input>
      <input none="Fuji Dağı" class="emojibox" type="submit" name="emojiuser" value="🗻"></input>
      <input none="Ev" class="emojibox" type="submit" name="emojiuser" value="🏠"></input>
      <input none="Bahçeli Ev" class="emojibox" type="submit" name="emojiuser" value="🏡"></input>
      <input none="Ofis Binası" class="emojibox" type="submit" name="emojiuser" value="🏢"></input>
      <input none="Japon Postanesi" class="emojibox" type="submit" name="emojiuser" value="🏣"></input>
      <input none="Postane" class="emojibox" type="submit" name="emojiuser" value="🏤"></input>
      <input none="Hastane" class="emojibox" type="submit" name="emojiuser" value="🏥"></input>
      <input none="Banka" class="emojibox" type="submit" name="emojiuser" value="🏦"></input>
      <input none="Otel" class="emojibox" type="submit" name="emojiuser" value="🏨"></input>
      <input none="Aşk Oteli" class="emojibox" type="submit" name="emojiuser" value="🏩"></input>
      <input none="Bakkal" class="emojibox" type="submit" name="emojiuser" value="🏪"></input>
      <input none="Okul" class="emojibox" type="submit" name="emojiuser" value="🏫"></input>
      <input none="Büyük Mağaza" class="emojibox" type="submit" name="emojiuser" value="🏬"></input>
      <input none="Fabrika" class="emojibox" type="submit" name="emojiuser" value="🏭"></input>
      <input none="Japon Kalesi" class="emojibox" type="submit" name="emojiuser" value="🏯"></input>
      <input none="Kale" class="emojibox" type="submit" name="emojiuser" value="🏰"></input>
      <input none="Düğün" class="emojibox" type="submit" name="emojiuser" value="💒"></input>
      <input none="Tokyo Kulesi" class="emojibox" type="submit" name="emojiuser" value="🗼"></input>
      <input none="Özgürlük Anıtı" class="emojibox" type="submit" name="emojiuser" value="🗽"></input>
      <input none="Kilise" class="emojibox" type="submit" name="emojiuser" value="⛪"></input>
      <input none="Cami" class="emojibox" type="submit" name="emojiuser" value="🕌"></input>
      <input none="Sinagog" class="emojibox" type="submit" name="emojiuser" value="🕍"></input>
      <input none="Kabe" class="emojibox" type="submit" name="emojiuser" value="🕋"></input>
      <input none="Çeşme" class="emojibox" type="submit" name="emojiuser" value="⛲"></input>
      <input none="Çadır" class="emojibox" type="submit" name="emojiuser" value="⛺"></input>
      <input none="Sisli" class="emojibox" type="submit" name="emojiuser" value="🌁"></input>
      <input none="Yıldızlarla Gece" class="emojibox" type="submit" name="emojiuser" value="🌃"></input>
      <input none="Dağların Üzerinde Gün Doğumu" class="emojibox" type="submit" name="emojiuser" value="🌄"></input>
      <input none="Gündoğumu" class="emojibox" type="submit" name="emojiuser" value="🌅"></input>
      <input none="Alacakaranlık Altındaki Şehir" class="emojibox" type="submit" name="emojiuser" value="🌆"></input>
      <input none="Gün Batımı" class="emojibox" type="submit" name="emojiuser" value="🌇"></input>
      <input none="Gece Köprü" class="emojibox" type="submit" name="emojiuser" value="🌉"></input>
      <input none="Samanyolu" class="emojibox" type="submit" name="emojiuser" value="🌌"></input>
      <input none="Atlıkarınca" class="emojibox" type="submit" name="emojiuser" value="🎠"></input>
      <input none="Dönmedolap" class="emojibox" type="submit" name="emojiuser" value="🎡"></input>
      <input none="Lunapark Hız Treni" class="emojibox" type="submit" name="emojiuser" value="🎢"></input>
      <input none="Lokomotif" class="emojibox" type="submit" name="emojiuser" value="🚂"></input>
      <input none="Vagon" class="emojibox" type="submit" name="emojiuser" value="🚃"></input>
      <input none="Yüksek Hızlı Tren" class="emojibox" type="submit" name="emojiuser" value="🚄"></input>
      <input none="Hızlı Tren" class="emojibox" type="submit" name="emojiuser" value="🚅"></input>
      <input none="Tren" class="emojibox" type="submit" name="emojiuser" value="🚆"></input>
      <input none="Metro" class="emojibox" type="submit" name="emojiuser" value="🚇"></input>
      <input none="Hafif Raylı" class="emojibox" type="submit" name="emojiuser" value="🚈"></input>
      <input none="İstasyon" class="emojibox" type="submit" name="emojiuser" value="🚉"></input>
      <input none="Tramvay" class="emojibox" type="submit" name="emojiuser" value="🚊"></input>
      <input none="Monorey" class="emojibox" type="submit" name="emojiuser" value="🚝"></input>
      <input none="Dağ Demiryolu" class="emojibox" type="submit" name="emojiuser" value="🚞"></input>
      <input none="Tramvay Arabası" class="emojibox" type="submit" name="emojiuser" value="🚋"></input>
      <input none="Otobüs" class="emojibox" type="submit" name="emojiuser" value="🚌"></input>
      <input none="Gelen Otobüs" class="emojibox" type="submit" name="emojiuser" value="🚍"></input>
      <input none="Troleybüs" class="emojibox" type="submit" name="emojiuser" value="🚎"></input>
      <input none="Minibüs" class="emojibox" type="submit" name="emojiuser" value="🚐"></input>
      <input none="Ambulans" class="emojibox" type="submit" name="emojiuser" value="🚑"></input>
      <input none="İtfaiye" class="emojibox" type="submit" name="emojiuser" value="🚒"></input>
      <input none="Polis Arabası" class="emojibox" type="submit" name="emojiuser" value="🚓"></input>
      <input none="Yaklaşan Polis Arabası" class="emojibox" type="submit" name="emojiuser" value="🚔"></input>
      <input none="Taksi" class="emojibox" type="submit" name="emojiuser" value="🚕"></input>
      <input none="Gelen Taksi" class="emojibox" type="submit" name="emojiuser" value="🚖"></input>
      <input none="Otomobil" class="emojibox" type="submit" name="emojiuser" value="🚗"></input>
      <input none="Yaklaşan Otomobil" class="emojibox" type="submit" name="emojiuser" value="🚘"></input>
      <input none="Teslimat Kamyonu" class="emojibox" type="submit" name="emojiuser" value="🚚"></input>
      <input none="Masfallı Kamyon" class="emojibox" type="submit" name="emojiuser" value="🚛"></input>
      <input none="Traktör" class="emojibox" type="submit" name="emojiuser" value="🚜"></input>
      <input none="Bisiklet" class="emojibox" type="submit" name="emojiuser" value="🚲"></input>
      <input none="Scooter" class="emojibox" type="submit" name="emojiuser" value="🛴"></input>
      <input none="Motorlu Scooter" class="emojibox" type="submit" name="emojiuser" value="🛵"></input>
      <input none="Otobüs Durağı" class="emojibox" type="submit" name="emojiuser" value="🚏"></input>
      <input none="Benzin Pompası" class="emojibox" type="submit" name="emojiuser" value="⛽"></input>
      <input none="Polis Arabası Işığı" class="emojibox" type="submit" name="emojiuser" value="🚨"></input>
      <input none="Tekne" class="emojibox" type="submit" name="emojiuser" value="⛵"></input>
      <input none="Sürat Teknesi" class="emojibox" type="submit" name="emojiuser" value="🚤"></input>
      <input none="Gemi" class="emojibox" type="submit" name="emojiuser" value="🚢"></input>
      <input none="Uçak Kalkış" class="emojibox" type="submit" name="emojiuser" value="🛫"></input>
      <input none="Uçak Varış" class="emojibox" type="submit" name="emojiuser" value="🛬"></input>
      <input none="Oturma Yeri" class="emojibox" type="submit" name="emojiuser" value="💺"></input>
      <input none="Helikopter" class="emojibox" type="submit" name="emojiuser" value="🚁"></input>
      <input none="Süspansiyon Demiryolu" class="emojibox" type="submit" name="emojiuser" value="🚟"></input>
      <input none="Dağ Teleferiği" class="emojibox" type="submit" name="emojiuser" value="🚠"></input>
      <input none="Hava Tramvayı" class="emojibox" type="submit" name="emojiuser" value="🚡"></input>
      <input none="Roket" class="emojibox" type="submit" name="emojiuser" value="🚀"></input>
      <input none="Uçan Daire" class="emojibox" type="submit" name="emojiuser" value="🛸"></input>
      <input none="Havai Fişek" class="emojibox" type="submit" name="emojiuser" value="🎆"></input>
      <input none="Maytap" class="emojibox" type="submit" name="emojiuser" value="🎇"></input>
      <input none="Ay Görüntüleme Töreni" class="emojibox" type="submit" name="emojiuser" value="🎑"></input>
      <input none="Moai Heykeli" class="emojibox" type="submit" name="emojiuser" value="🗿"></input>
      <input none="Pasaport Kontrolü" class="emojibox" type="submit" name="emojiuser" value="🛂"></input>
      <input none="Gümrük" class="emojibox" type="submit" name="emojiuser" value="🛃"></input>
      <input none="Bagaj Teslim Yeri" class="emojibox" type="submit" name="emojiuser" value="🛄"></input>
      <input none="Sol Bagaj" class="emojibox" type="submit" name="emojiuser" value="🛅"></input>
      <div class="emoji-kategori-box">💎 Objetos ➤</div>
      <input none="Değerli Taş" class="emojibox" type="submit" name="emojiuser" value="💎"></input>
      <input none="Gözlük" class="emojibox" type="submit" name="emojiuser" value="👓"></input>
      <input none="Kravat" class="emojibox" type="submit" name="emojiuser" value="👔"></input>
      <input none="Tişört" class="emojibox" type="submit" name="emojiuser" value="👕"></input>
      <input none="Kot" class="emojibox" type="submit" name="emojiuser" value="👖"></input>
      <input none="Eşarp" class="emojibox" type="submit" name="emojiuser" value="🧣"></input>
      <input none="Eldiven" class="emojibox" type="submit" name="emojiuser" value="🧤"></input>
      <input none="Ceket" class="emojibox" type="submit" name="emojiuser" value="🧥"></input>
      <input none="Çorap" class="emojibox" type="submit" name="emojiuser" value="🧦"></input>
      <input none="Elbise" class="emojibox" type="submit" name="emojiuser" value="👗"></input>
      <input none="Kimono" class="emojibox" type="submit" name="emojiuser" value="👘"></input>
      <input none="Bikini" class="emojibox" type="submit" name="emojiuser" value="👙"></input>
      <input none="Kadın Giysisi" class="emojibox" type="submit" name="emojiuser" value="👚"></input>
      <input none="Çanta" class="emojibox" type="submit" name="emojiuser" value="👛"></input>
      <input none="El Çantası" class="emojibox" type="submit" name="emojiuser" value="👜"></input>
      <input none="Debriyaj Çantası" class="emojibox" type="submit" name="emojiuser" value="👝"></input>
      <input none="Okul Sırt Çantası" class="emojibox" type="submit" name="emojiuser" value="🎒"></input>
      <input none="Kundura" class="emojibox" type="submit" name="emojiuser" value="👞"></input>
      <input none="Koşu Ayakkabısı" class="emojibox" type="submit" name="emojiuser" value="👟"></input>
      <input none="Topuklu Ayakkabı" class="emojibox" type="submit" name="emojiuser" value="👠"></input>
      <input none="Kadın Sandaleti" class="emojibox" type="submit" name="emojiuser" value="👡"></input>
      <input none="Kadın Botu" class="emojibox" type="submit" name="emojiuser" value="👢"></input>
      <input none="Taç" class="emojibox" type="submit" name="emojiuser" value="👑"></input>
      <input none="Kadın Şapkası" class="emojibox" type="submit" name="emojiuser" value="👒"></input>
      <input none="Sihirbaz Şapkası" class="emojibox" type="submit" name="emojiuser" value="🎩"></input>
      <input none="Mezuniyet Kepi" class="emojibox" type="submit" name="emojiuser" value="🎓"></input>
      <input none="Normal Şapka" class="emojibox" type="submit" name="emojiuser" value="🧢"></input>
      <input none="Ruj" class="emojibox" type="submit" name="emojiuser" value="💄"></input>
      <input none="Yüzük" class="emojibox" type="submit" name="emojiuser" value="💍"></input>
      <input none="Kapalı Şemsiye" class="emojibox" type="submit" name="emojiuser" value="🌂"></input>
      <input none="İş Çantası" class="emojibox" type="submit" name="emojiuser" value="💼"></input>
      <input none="Banyo Yapan Kişi" class="emojibox" type="submit" name="emojiuser" value="🛀"></input>
      <input none="Yataktaki Kişi" class="emojibox" type="submit" name="emojiuser" value="🛌"></input>
      <input none="Aşk Mektubu" class="emojibox" type="submit" name="emojiuser" value="💌"></input>
      <input none="Bomba" class="emojibox" type="submit" name="emojiuser" value="💣"></input>
      <input none="Yatay Trafik Lambası" class="emojibox" type="submit" name="emojiuser" value="🚥"></input>
      <input none="Dik Trafik Lambası" class="emojibox" type="submit" name="emojiuser" value="🚦"></input>
      <input none="İnşaat" class="emojibox" type="submit" name="emojiuser" value="🚧"></input>
      <input none="Çapa" class="emojibox" type="submit" name="emojiuser" value="⚓"></input>
      <input none="Tespih" class="emojibox" type="submit" name="emojiuser" value="📿"></input>
      <input none="Mutfak Bıçağı" class="emojibox" type="submit" name="emojiuser" value="🔪"></input>
      <input none="Vazo" class="emojibox" type="submit" name="emojiuser" value="🏺"></input>
      <input none="Berber Direği" class="emojibox" type="submit" name="emojiuser" value="💈"></input>
      <input none="Yağ Varili" class="emojibox" type="submit" name="emojiuser" value="🛢"></input>
      <input none="Kum Saati Bitiş" class="emojibox" type="submit" name="emojiuser" value="⌛"></input>
      <input none="Kum Saati Doldurma" class="emojibox" type="submit" name="emojiuser" value="⏳"></input>
      <input none="Cep Saati" class="emojibox" type="submit" name="emojiuser" value="⌚"></input>
      <input none="Alarm Saati" class="emojibox" type="submit" name="emojiuser" value="⏰"></input>
      <input none="Kronometre" class="emojibox" type="submit" name="emojiuser" value="⏱"></input>
      <input none="Zamanlayıcı Saat" class="emojibox" type="submit" name="emojiuser" value="⏲"></input>
      <input none="Balon" class="emojibox" type="submit" name="emojiuser" value="🎈"></input>
      <input none="Parti Bombası" class="emojibox" type="submit" name="emojiuser" value="🎉"></input>
      <input none="Konfeti Topu" class="emojibox" type="submit" name="emojiuser" value="🎊"></input>
      <input none="Japon Bebekler" class="emojibox" type="submit" name="emojiuser" value="🎎"></input>
      <input none="Olta" class="emojibox" type="submit" name="emojiuser" value="🎏"></input>
      <input none="Rüzgar Çanı" class="emojibox" type="submit" name="emojiuser" value="🎐"></input>
      <input none="Kurdele" class="emojibox" type="submit" name="emojiuser" value="🎀"></input>
      <input none="Hediye" class="emojibox" type="submit" name="emojiuser" value="🎁"></input>
      <input none="Kristal Top" class="emojibox" type="submit" name="emojiuser" value="🔮"></input>
      <input none="Radyo" class="emojibox" type="submit" name="emojiuser" value="📻"></input>
      <input none="Telefon" class="emojibox" type="submit" name="emojiuser" value="📱"></input>
      <input none="Ev Telefonu" class="emojibox" type="submit" name="emojiuser" value="☎"></input>
      <input none="Telefon" class="emojibox" type="submit" name="emojiuser" value="📞"></input>
      <input none="Pil" class="emojibox" type="submit" name="emojiuser" value="🔋"></input>
      <input none="Kablo" class="emojibox" type="submit" name="emojiuser" value="🔌"></input>
      <input none="Bilgisayar" class="emojibox" type="submit" name="emojiuser" value="💻"></input>
      <input none="Disket" class="emojibox" type="submit" name="emojiuser" value="💽"></input>
      <input none="CD" class="emojibox" type="submit" name="emojiuser" value="💿"></input>
      <input none="Film Kamerası" class="emojibox" type="submit" name="emojiuser" value="🎥"></input>
      <input none="Televizyon" class="emojibox" type="submit" name="emojiuser" value="📺"></input>
      <input none="Kamera" class="emojibox" type="submit" name="emojiuser" value="📷"></input>
      <input none="Video Kamera" class="emojibox" type="submit" name="emojiuser" value="📹"></input>
      <input none="Büyüteç" class="emojibox" type="submit" name="emojiuser" value="🔎"></input>
      <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="📗"></input>
      <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="📘"></input>
      <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="📙"></input>
      <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="📚"></input>
      <input none="Rapor" class="emojibox" type="submit" name="emojiuser" value="📃"></input>
      <input none="Dosya" class="emojibox" type="submit" name="emojiuser" value="📁"></input>
      <input none="Takvim" class="emojibox" type="submit" name="emojiuser" value="📅"></input>
      <input none="Takvim" class="emojibox" type="submit" name="emojiuser" value="📆"></input>
      <input none="Cetvel" class="emojibox" type="submit" name="emojiuser" value="📏"></input>
      <input none="Kilit" class="emojibox" type="submit" name="emojiuser" value="🔒"></input>
      <input none="Çekiç" class="emojibox" type="submit" name="emojiuser" value="🔨"></input>
      <input none="Silah" class="emojibox" type="submit" name="emojiuser" value="🔫"></input>
      <input none="Kapı" class="emojibox" type="submit" name="emojiuser" value="🚪"></input>
      <input none="Sigara" class="emojibox" type="submit" name="emojiuser" value="🚬"></input>
      <input none="Oklu Kalp" class="emojibox" type="submit" name="emojiuser" value="💘"></input>
      <input none="Kırık Kalp" class="emojibox" type="submit" name="emojiuser" value="💔"></input>
      <input none="İkili Kalp" class="emojibox" type="submit" name="emojiuser" value="💕"></input>
      <input none="Parlayan Kalp" class="emojibox" type="submit" name="emojiuser" value="💖"></input>
      <input none="Büyüyen Kalp" class="emojibox" type="submit" name="emojiuser" value="💗"></input>
      <input none="Mavi Kalp" class="emojibox" type="submit" name="emojiuser" value="💙"></input>
      <input none="Yeşil Kalp" class="emojibox" type="submit" name="emojiuser" value="💚"></input>
      <input none="Sarı Kalp" class="emojibox" type="submit" name="emojiuser" value="💛"></input>
      <input none="Kurdeleli Kalp" class="emojibox" type="submit" name="emojiuser" value="💝"></input>
      <input none="Ter Damlacıkları" class="emojibox" type="submit" name="emojiuser" value="💦"></input>
      <input none="Ossuruk" class="emojibox" type="submit" name="emojiuser" value="💨"></input>
      <div class="emoji-kategori-box">🖕 Señas➤</div>
      <input none="Beğenme" class="emojibox" type="submit" name="emojiuser" value="👍"></input>
      <input none="Beğenmeme" class="emojibox" type="submit" name="emojiuser" value="👎"></input>
      <input none="Kaslı Kollar" class="emojibox" type="submit" name="emojiuser" value="💪"></input>
      <input none="Öz Çekim" class="emojibox" type="submit" name="emojiuser" value="🤳"></input>
      <input none="Sağ İşaret Etme" class="emojibox" type="submit" name="emojiuser" value="👉"></input>
      <input none="Yukarı İşaret Etme" class="emojibox" type="submit" name="emojiuser" value="☝"></input>
      <input none="Orta Parmak İşareti" class="emojibox" type="submit" name="emojiuser" value="🖕"></input>
      <input none="Aşağı İşaret Etme" class="emojibox" type="submit" name="emojiuser" value="👇"></input>
      <input none="Zafer Eli" class="emojibox" type="submit" name="emojiuser" value="✌"></input>
      <input none="Çapraz Parmaklar" class="emojibox" type="submit" name="emojiuser" value="🤞"></input>
      <input none="Vulkan Selamı" class="emojibox" type="submit" name="emojiuser" value="🖖"></input>
      <input none="Boynuz İşareti" class="emojibox" type="submit" name="emojiuser" value="🤘"></input>
      <input none="Merhaba" class="emojibox" type="submit" name="emojiuser" value="🖐"></input>
      <input none="Tamam" class="emojibox" type="submit" name="emojiuser" value="👌"></input>
      <input none="Yumruk" class="emojibox" type="submit" name="emojiuser" value="👊"></input>
      <input none="Sağ Yumruk" class="emojibox" type="submit" name="emojiuser" value="🤜"></input>
      <input none="Sol Yumruk" class="emojibox" type="submit" name="emojiuser" value="🤛"></input>
      <input none="El Arkası" class="emojibox" type="submit" name="emojiuser" value="🤚"></input>
      <input none="El Sallamak" class="emojibox" type="submit" name="emojiuser" value="👋"></input>
      <input none="Yazı Yazmak" class="emojibox" type="submit" name="emojiuser" value="✍"></input>
      <input none="Alkışlamak" class="emojibox" type="submit" name="emojiuser" value="👏"></input>
      <input none="Katlanmış Eller" class="emojibox" type="submit" name="emojiuser" value="🙏"></input>
      <input none="Kulak" class="emojibox" type="submit" name="emojiuser" value="👂"></input>
      <input none="Burun" class="emojibox" type="submit" name="emojiuser" value="👃"></input>
      <input none="Dil" class="emojibox" type="submit" name="emojiuser" value="👅"></input>
      <input none="Ağız" class="emojibox" type="submit" name="emojiuser" value="👄"></input>
      <input none="Dudak" class="emojibox" type="submit" name="emojiuser" value="💋"></input>
	</form>
	</div>
</div>

                    </fieldset>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>