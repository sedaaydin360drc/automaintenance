
# KURULUM

Paketi kurmak için terminale aşağıdaki komutu yazabilirsiniz.
```
composer require sedaaydin360drc/automaintenance 
```

---

# KULLANIM

Paket kurulumundan sonra env dosyasına bakım modunu açacak ve bakım modunu kapatacak tarihleri belirtmemiz gerekiyor:
Bakım modunu kapatacak tarih için: 
```
MAINTENANCE_MODE_DOWN="37 11 24 1 *"
``` 
Bakım modundan çıkılması istenen tarih için: 
```
MAINTENANCE_MODE_UP="38 11 24 1 *"
``` 
Burda sırasıyla yazılan sayıların karşılığı şu şekildedir: 
```
MAINTENANCE_MODE_UP="Dakika Saat Gün Ay *"
``` 

Tek rakam olan ay, gün, saat ve dakika için sayıların başına 0 yazılmaması gerekiyor. 

Örneğin 3 Ocak 09:02 ise tanımlama şu şekilde yapılmalıdır.
```
MAINTENANCE_MODE_UP="2 9 3 1 *"
``` 

--- 
# GÜNCELLEME
Eğer pakette bir değişiklik olduysa hangi versiyon ile update edildiğini bulup örn(v1.0.3) 
Daha sonra paketi versiyon adı ile birlikte tekrar kurmamız gerekiyor (üzerine yazacaktır)
```
composer require sedaaydin360drc/automaintenance:1.0.3
```