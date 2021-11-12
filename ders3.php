<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İnternet Programcılığı 3.Ders</title>
</head>
<body>
    <?php

     class Account
     {
         private $id;
         private $name;
         private $surname;
         private $balance;
     }

     public function __construction($id,$name,$surname,$balance)
     {
         $this->id = $id;
         $this->name =$name;
         $this->surname =$surname;
         $this->balance =$balance;
     }

     public function getid()
     {
         return $this->id;
        
   }

   public function getName()
   {
       return $this->name;
   }

   public function getSurname()
   {
       return $this->surname;
   }

   public function getBalance()
   {
       return $this->balance;
   }

   public function showInfo()
   {
       echo "<br>/tHesapBilgileri";
       echo "Hesap Id'si: /t" . $this->id. "<br>";
       echo "Hesap Adı: /t" . $this->name. "<br>";
       echo "Hesap Soyadı: /t" . $this->surname. "<br>";
       echo "Hesap Bakiyesi: /t" . $this->balance. "<br>";
        }

        $hesap1 = new Account(1,"Ali","Keskin","5000");

        echo "Hesap ID'si:" . $hesap1->getid();

        $hesap1->showInfo();
    




?>
    
</body>
</html>